<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\news;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Request $request) {
        $news = news::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.news.index')->with([
            'materials' => $news
        ]);
    }
    public function show($id) {
        $new = news::findOrFail($id);
        return view('admin.pages.news.edit')->with([
            'material' => $new
        ]);
    }
    public function update($id, Request $request) {
        $messages = array(
            'required' => ':attribute жолы толтырылуы керек.',
            'mimes' => ':attribute жолы jpg,jpeg,jfif,png форматында болуы міндетті.'
        );
        $validated = $request->validate([
            'kk_title' => 'required',
            'ru_title' => 'required',
            'kk_description' => 'required',
            'ru_description' => 'required',
            'kk_short_description' => 'required',
            'ru_short_description' => 'required',
            'image' => 'mimes: jpg,jpeg,jfif,png'
        ], $messages);
        $filename = $request->last_image;
        if($request->file('image')){
            Storage::disk('images')->delete('news/'.$filename);
            $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'news/',
                $uploadedFile,
                $filename
            );
        };
        news::findOrFail($id)->update([
            'kk_title' => $request->kk_title,
            'ru_title' => $request->ru_title,
            'kk_description' => $request->kk_description,
            'ru_description' => $request->ru_description,
            'kk_short_description' => $request->kk_short_description,
            'ru_short_description' => $request->ru_short_description,
            'image' => $filename
        ]);

        return redirect()->route('admin.news')->with('message', 'Материал сәтті сақталды!');


    }
    public function delete($id) {
        $new = news::findOrFail($id);
        Storage::disk('images')->delete('news/'.$new->image);
        $new->delete();
        return redirect()->route('admin.news')->with('message', 'Материал сәтті жойылды!');
    }
    public function store(Request $request) {
        $messages = array(
            'required' => ':attribute жолы толтырылуы керек.',
            'mimes' => ':attribute жолы jpg,jpeg,png форматында болуы міндетті.',
        );
        $validated = $request->validate([
            'kk_title' => 'required',
            'ru_title' => 'required',
            'kk_description' => 'required',
            'ru_description' => 'required',
            'kk_short_description' => 'required',
            'ru_short_description' => 'required',
            'image' => 'required|mimes: jpg,jpeg,png'
        ], $messages);

        $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'news/',
                $uploadedFile,
                $filename
            );

        news::create([
            'kk_title' => $request->kk_title,
            'ru_title' => $request->ru_title,
            'kk_description' => $request->kk_description,
            'ru_description' => $request->ru_description,
            'kk_short_description' => $request->kk_short_description,
            'ru_short_description' => $request->ru_short_description,
            'image' => $filename
        ]);

        return redirect()->route('admin.news')->with('message', 'Материал сәтті сақталды!');;
    }

}
