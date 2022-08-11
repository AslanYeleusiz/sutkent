<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AkimshilikController;
use App\Http\Controllers\admin\ArdagerController;
use App\Http\Controllers\admin\QogamdarController;
use App\Http\Controllers\admin\AnalarController;
use App\Http\Controllers\admin\MediatorController;
use App\Http\Controllers\admin\QogamhorController;
use App\Http\Controllers\admin\ForumController;
use App\Http\Controllers\admin\VideosController;
use App\Http\Controllers\admin\GalleryController;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::post('/mail/send', [MainController::class, 'mailSend'])->name('mail.send');
    Route::get('/auyl', function () {
        return view('pages.auyl');
    });
    Route::get('/zhanalyqtar', [MainController::class, 'news']);
    Route::get('/zhanalyq/{slug}-{id}.html', [MainController::class, 'new_block']);
    Route::get('/akimshilik', [MainController::class, 'akimshilik']);
    Route::get('/ardagerler-kenesi', [MainController::class, 'ardagerler']);
    Route::get('/qoghamdyq-musheler', [MainController::class, 'qogam']);
    Route::get('/analar-kenesi', [MainController::class, 'analar']);
    Route::get('/mediator', [MainController::class, 'mediator']);
    Route::get('/qoghamdyq-khor-musheler', [MainController::class, 'khor']);
    Route::get('/forum', [MainController::class, 'forum'])->name('forum');
    Route::post('/forum/send', [MainController::class, 'forumSend'])->name('forumSend');
    Route::get('/videos', [MainController::class, 'videos']);
    Route::get('/video/{slug}-{id}.html', [MainController::class, 'video']);
    Route::get('/gallery', [MainController::class, 'gallery']);
    Route::get('/bailanys', function () {
       return view('pages.about');
    });
    Route::group(['prefix'=>'auth'], function () {
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/login', [AuthController::class, 'login']);
    });

});
Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'api'
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/sliders/create', [AdminController::class, 'createSlider'])->name('sliders.create');
    Route::post('/sliders/store', [AdminController::class, 'storeSlider'])->name('sliders.store');
    Route::get('/sliders/{id}/edit', [AdminController::class, 'editSlider'])->name('sliders.edit');
    Route::post('/sliders/{id}/update', [AdminController::class, 'updateSlider'])->name('sliders.update');
    Route::delete('/sliders/{id}/destroy', [AdminController::class, 'destroySlider'])->name('sliders.destroy');
    Route::group(['prefix' => '/zhanalyqtar'], function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.news');
        Route::get('/qosu', function () {return view('admin.pages.news.create');})->name('admin.news.create');
        Route::post('/qosu/action', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/{id}/ozgertu', [NewsController::class, 'show'])->name('admin.news.edit');
        Route::post('/{id}/ozgertu/update', [NewsController::class, 'update'])->name('admin.news.update');
        Route::post('/{id}/delete', [NewsController::class, 'delete'])->name('admin.news.delete');
    });
    Route::resource('qoldanushylar', UserController::class);
    Route::resource('forum', ForumController::class);
    Route::group(['prefix'=>'/kenes'], function () {
        Route::resource('akimshilik', AkimshilikController::class);
        Route::resource('ardagerler', ArdagerController::class);
        Route::resource('qogamdar', QogamdarController::class);
        Route::resource('analar', AnalarController::class);
        Route::resource('mediator', MediatorController::class);
        Route::resource('qogamhor', QogamhorController::class);
    });
    Route::resource('videos', VideosController::class);
    Route::resource('gallery', GalleryController::class);
});

