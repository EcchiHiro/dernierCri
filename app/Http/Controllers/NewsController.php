<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class NewsController extends BaseController
{

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

        if(is_array($apiConfig)){

            $endpoint = Arr::get($apiConfig, 'endpoint');
            $newsSection = 'home.json';

            $response = Http::get($endpoint . $newsSection , [
                'api-key' => Arr::get($apiConfig, 'api.public'),
            ]);

            if($response->successful()) {
                $results = $response->json('results');
                dd($results);
            }

        }
    }
}
