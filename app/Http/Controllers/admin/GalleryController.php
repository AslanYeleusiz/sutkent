<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = gallery::orderBy('created_at','desc')->paginate(20);
        return view('admin.pages.gallery.index')->with([
            'materials' => $photos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'gallery/',
                $uploadedFile,
                $filename
            );
        gallery::create([
            'title' => $request->title,
            'img' => $filename,
        ]);
        return redirect()->route('gallery.index')->with('message','Галлереяға мәлімет сәтті жүктелді.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = gallery::findOrFail($id);
        return view('admin.pages.gallery.edit')->with([
            'material' => $material
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
        $filename = $request->last_image;
        if($request->file('image')){
            Storage::disk('images')->delete('gallery/'.$filename);
            $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'gallery/',
                $uploadedFile,
                $filename
            );
        };
        gallery::findOrFail($id)->update([
            'title' => $request->title,
            'img' => $filename,
        ]);
        return redirect()->route('gallery.index')->with('message','Галлереяға мәлімет сәтті өзгертілді.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = gallery::findOrFail($id);
        Storage::disk('images')->delete('gallery/'.$gallery->img);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('message','Галлереядан мәлімет сәтті жойылды.');
    }
}
