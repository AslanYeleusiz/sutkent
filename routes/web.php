<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('pages.main');
    });
    Route::get('/auyl', function () {
        return view('pages.auyl');
    });
    Route::get('/zhanalyq', function () {
        return view('pages.zhanalyq');
    });
    Route::get('/akimshilik', function () {
        return view('pages.akimshilik');
    });
    Route::get('/kenes', function () {
        return view('pages.kenes');
    });
    Route::get('/forum', function () {
        return view('pages.forum');
    });
    Route::get('/videos', function () {
        return view('pages.videos');
    });
    Route::get('/video', function () {
        return view('pages.video');
    });
    Route::get('/gallery', function () {
        return view('pages.gallery');
    });

});
