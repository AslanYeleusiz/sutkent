<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class NewsController extends Controller
{
    public function index() {
        $news = news::orderBy('created_at','desc')->paginate(12);
        foreach ($news as $material) {
            $material->date = Date::dmYKZ($material->created_at);
            $material->lat_title = Helper::translate($material->kk_title);
        }
        return view('pages.zhanalyqtar')->with([
            'news' => $news
        ]);
    }

    public function show($slug, $id) {
        $news = news::findOrFail($id);
        $news->date = Date::dmYKZ($news->created_at);
        return view('pages.zhanalyq')->with([
            'news' => $news
        ]);
    }



}
