<?php

namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class NewsController extends BaseController
{

    public function index()
    {
        $news = News::paginate(12);

        return View::make('pages.home',
            compact(
                'news'
            ));
    }

    /**
     * Import news based on url params
     * Allows to import from multiple source using the config news
     * TODO : Secure route by using a guard
     */
    public function importNews()
    {
        $config = config('news');
        $newsType = Route::input('news_type');

        //Get api config based on route params
        $apiConfig = Arr::get($config, $newsType);

        //Use method based on config
        if (is_array($apiConfig)) {
            $method = Arr::get($apiConfig, 'method');
            $this->$method($apiConfig);

            Return Redirect::to('/')
                ->with('success', 'Les nouvelles on bien été importées');
        }

        Return Redirect::to('home')
            ->with('error', 'Une erreur est survenue durant l\'import');
    }

    /**
     * @param $apiConfig
     */
    public function importNyTimesStories($apiConfig)
    {
        $endpoint = Arr::get($apiConfig, 'endpoint');
        $newsSection = 'home.json';

        $response = Http::get($endpoint . $newsSection, [
            'api-key' => Arr::get($apiConfig, 'api.public'),
        ]);

        if ($response->successful()) {
            $results = $response->json('results');

            foreach ($results as $result) {
                $data = [
                    'created_at'   => $result['created_date'],
                    'news_type'    => $result['section'],
                    'title'        => $result['title'],
                    'description'  => $result['abstract'],
                    'external_url' => $result['url'],
                ];

                if(Arr::has($result, 'multimedia')) {
                    $images = Arr::get($result, 'multimedia');
                    $data['thumbnail_image'] = isset($images[2]) ? $images[2]['url'] : null;
                    $data['main_image'] = isset($images[1]) ? $images[1]['url'] : null;
                }

                News::firstOrCreate($data);

            }
        }
    }
}
