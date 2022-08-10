<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\akimshilik;
use App\Http\Controllers\Controller;

class ArdagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = akimshilik::where('type',2)->orderBy('created_at','desc')->paginate(20);
        return view('admin.pages.kenes.index')->with([
            'users' => $users,
            'typeName' => 'Ардагерлер кеңесі',
            'routeName' => 'ardagerler'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.kenes.create')->with([
            'typeName' => 'Ардагерлер кеңесі',
            'routeName' => 'ardagerler'
        ]);
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
                'kenes/avatar/',
                $uploadedFile,
                $filename
            );
        akimshilik::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'kk_rank' => $request->kk_rank,
            'ru_rank' => $request->ru_rank,
            'img' => $filename,
            'type' => 2,
        ]);
        return redirect()->route('ardagerler.index')->with('message', 'Әкімшілік сәтті жүктелді!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = akimshilik::findOrFail($id);
        return view('admin.pages.kenes.edit')->with([
            'user' => $user,
            'typeName' => 'Ардагерлер кеңесі',
            'routeName' => 'ardagerler'
        ]);
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
            $uploadedFile = $request->file('image');
            Storage::disk('images')->delete('kenes/avatar/'.$request->last_image);
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'kenes/avatar/',
                $uploadedFile,
                $filename
            );
        }
        akimshilik::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'kk_rank' => $request->kk_rank,
            'ru_rank' => $request->ru_rank,
            'img' => $filename,
        ]);
        return redirect()->route('akimshilik.index')->with('message', 'Ардагерлер кеңесі сәтті өзгертілді!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = akimshilik::findOrFail($id);
        Storage::disk('images')->delete('kenes/avatar/'.$user->img);
        $user->delete();
        return redirect()->route('ardagerler.index')->with('message', 'Жазба сәтті жойылды!');
    }
}
