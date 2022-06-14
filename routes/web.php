<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('news')->group(static function () {

    Route::controller(NewsController::class)->group(function () {
        Route::get('/fetch/{news_type}', 'importNews');
        Route::get('/', 'index');
        Route::get('/news/{id}', 'show');
    });

});

