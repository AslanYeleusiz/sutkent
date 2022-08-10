<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use App\Models\forum;
use App\Models\gallery;
use App\Models\videos;
use App\Models\slider;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        $newsCount = news::count();
        $forumCount = forum::count();
        $galleryCount = gallery::count();
        $videosCount = videos::count();
        $slider = slider::get();
        return view('admin.pages.main')->with([
            'newsCount' => $newsCount,
            'forumCount' => $forumCount,
            'galleryCount' => $galleryCount,
            'videosCount' => $videosCount,
            'sliders' => $slider
        ]);
    }

    public function createSlider() {
        return view('admin.pages.createSlide');
    }

    public function storeSlider(Request $request) {
        $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'slide/',
                $uploadedFile,
                $filename
            );
        slider::create([
            'title' => $request->title,
            'image' => $filename,
        ]);
        return redirect()->route('admin.index')->with('message','Слайдерге мәлімет сәтті жүктелді.');
    }

    public function editSlider($id)
    {
        $material = slider::findOrFail($id);
        return view('admin.pages.editSlide')->with([
            'material' => $material
        ]);
    }
    public function updateSlider(Request $request, $id)
    {
        $filename = $request->last_image;
        if($request->file('image')){
            Storage::disk('images')->delete('slide/'.$filename);
            $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'slide/',
                $uploadedFile,
                $filename
            );
        };
        slider::findOrFail($id)->update([
            'title' => $request->title,
            'image' => $filename,
        ]);
        return redirect()->route('admin.index')->with('message','Галлереяға мәлімет сәтті өзгертілді.');
    }
    public function destroySlider($id)
    {
        $slider = slider::findOrFail($id);
        Storage::disk('images')->delete('slide/'.$slider->image);
        $slider->delete();
        return redirect()->route('admin.index')->with('message','Галлереяға мәлімет сәтті жойылды.');
    }


}
