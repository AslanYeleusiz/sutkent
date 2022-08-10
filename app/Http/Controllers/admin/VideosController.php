<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\videos;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = videos::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.pages.videos.index')->with([
            'materials' => $videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        videos::create([
            'kk_title' => $request->kk_title,
            'ru_title' => $request->ru_title,
            'kk_description' => $request->kk_description,
            'ru_description' => $request->ru_description,
            'link' => $request->link
        ]);
        return redirect()->route('videos.index')->with('message', 'Бейнеролик сәтті жүктелді!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = videos::findOrFail($id);
        return view('admin.pages.videos.edit')->with([
            'material' => $video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        videos::findOrFail($id)->update([
            'kk_title' => $request->kk_title,
            'ru_title' => $request->ru_title,
            'kk_description' => $request->kk_description,
            'ru_description' => $request->ru_description,
            'link' => $request->link
        ]);
        return redirect()->route('videos.index')->with('message', 'Бейнеролик сәтті өзгертілді!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = videos::findOrFail($id);
        $video->delete();
        return redirect()->route('videos.index')->with('message', 'Бейнеролик сәтті жойылды!');
    }
}
