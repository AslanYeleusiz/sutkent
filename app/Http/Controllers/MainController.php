<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\videos;
use App\Models\akimshilik;
use App\Models\forum;
use App\Models\gallery;
use App\Models\slider;
use App\Helpers\Date;
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mail;

class MainController extends Controller
{

    public function index() {
//        dd(app()->getLocale());
        $news = news::orderBy('created_at','desc')->limit(3)->get();
        $videos = videos::orderBy('created_at','desc')->limit(3)->get();
        $sliders = slider::get();
        if(app()->getLocale() === 'kk'){
            foreach ($news as $material) {
                $material->date = Date::dmYKZ($material->created_at);
                $material->lat_title = Helper::translate($material->kk_title);
                $material->title = $material->kk_title;
                $material->short_description = $material->kk_short_description;
                $material->description = $material->kk_description;
            }
            foreach ($videos as $material) {
                $material->title = $material->kk_title;
                $material->lat_title = Helper::translate($material->kk_title);
            }
            foreach ($sliders as $material) {
                $material->title = $material->kk_title;
            }

        }else{
            foreach ($news as $material) {
                $material->date = Date::dmYKZ($material->created_at);
                $material->lat_title = Helper::translate($material->kk_title);
                $material->title = $material->ru_title;
                $material->short_description = $material->ru_short_description;
                $material->description = $material->ru_description;
            }
            foreach ($videos as $material) {
                $material->title = $material->ru_title;
                $material->lat_title = Helper::translate($material->ru_title);
            }
            foreach ($sliders as $material) {
                $material->title = $material->ru_title;
            }
        }
        return view('pages.main')->with([
            'news' => $news,
            'videos' => $videos,
            'sliders' => $sliders
        ]);
    }

    public function videos() {
        $videos = videos::orderBy('created_at','desc')->paginate(12);
        if(app()->getLocale() === 'kk'){
            foreach ($videos as $material) {
                $material->title = $material->kk_title;
                $material->lat_title = Helper::translate($material->kk_title);
            }
        }else{
            foreach ($videos as $material) {
                $material->title = $material->ru_title;
                $material->lat_title = Helper::translate($material->ru_title);
            }
        }
        return view('pages.videos')->with([
            'videos' => $videos
        ]);

    }
    public function video($slug, $id) {
        $video = videos::findOrFail($id);
        if(app()->getLocale() === 'kk'){
            $video->title = $video->kk_title;
            $video->description = $video->kk_description;

        }else{
            $video->title = $video->ru_title;
            $video->description = $video->ru_description;
        }
        return view('pages.video')->with([
            'video' => $video
        ]);
    }
    public function news() {
        $news = news::orderBy('created_at','desc')->paginate(12);
        if(app()->getLocale() === 'kk'){
            foreach ($news as $material) {
                $material->date = Date::dmYKZ($material->created_at);
                $material->lat_title = Helper::translate($material->kk_title);
                $material->title = $material->kk_title;
                $material->short_description = $material->kk_short_description;
            }
        }else{
            foreach ($news as $material) {
                $material->date = Date::dmYKZ($material->created_at);
                $material->lat_title = Helper::translate($material->kk_title);
                $material->title = $material->ru_title;
                $material->short_description = $material->ru_short_description;
            }
        }
        return view('pages.zhanalyqtar')->with([
            'news' => $news
        ]);
    }

    public function new_block($slug, $id) {
        $new = news::findOrFail($id);
        if(app()->getLocale() === 'kk'){
            $new->date = Date::dmYKZ($new->created_at);
            $new->title = $new->kk_title;
            $new->description = $new->kk_description;
        }else{
            $new->date = Date::dmYKZ($new->created_at);
            $new->title = $new->ru_title;
            $new->description = $new->ru_description;
        }
        return view('pages.zhanalyq')->with([
            'new' => $new
        ]);
    }

    public function akimshilik() {
        $users = $this->kenes(1);
        return view('pages.akimshilik')->with([
            'users' => $users
        ]);
    }
    public function ardagerler() {
        $users = $this->kenes(2);
        return view('pages.kenes')->with([
            'users' => $users,
            'kenes' => __('site.Ардагерлер кеңесі')
        ]);
    }
    public function qogam() {
        $users = $this->kenes(3);
        return view('pages.kenes')->with([
            'users' => $users,
            'kenes' => __('site.Қоғамдық мүшелері')
        ]);
    }
    public function analar() {
        $users = $this->kenes(4);
        return view('pages.kenes')->with([
            'users' => $users,
            'kenes' => __('site.Аналар кеңесі')
        ]);
    }
    public function mediator() {
        $users = $this->kenes(5);
        return view('pages.kenes')->with([
            'users' => $users,
            'kenes' => __('site.Медиатор')
        ]);
    }
    public function khor() {
        $users = $this->kenes(6);
        return view('pages.kenes')->with([
            'users' => $users,
            'kenes' => __('site.Қоғамдық қор мүшелері')
        ]);
    }
    public function forum() {
        $forums = forum::orderBy('created_at', 'desc')->paginate(10);
        foreach ($forums as $forum) {
            $forum->date =  Date::dmYKZ($forum->created_at);
        }
        return view('pages.forum')->with([
            'forums' => $forums
        ]);
    }
    public function forumSend(Request $request) {
        forum::create([
            'name' => $request->name,
            'text' => $request->text
        ]);
        return redirect()->route('forum')->withSuccess('success');
    }
    public function gallery(Request $request) {
        $gallerys = gallery::orderBy('created_at','desc')->paginate(12);
        return view('pages.gallery')->with([
            'galleryes' => $gallerys
        ]);
    }
    public function mailSend(Request $request) {

    }




    protected function kenes($id) {
        $users = akimshilik::where('type',$id)->get();
        if(app()->getLocale() === 'kk')
            foreach ($users as $user)
                $user->rank = $user->kk_rank;
        else
            foreach ($users as $user)
                $user->rank = $user->ru_rank;
        return $users;
    }
}
