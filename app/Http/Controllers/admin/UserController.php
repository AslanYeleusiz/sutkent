<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.pages.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'required' => ':attribute жолы толтырылуы керек.',
            'min' => ':attribute жолы :value символдан немесе одан асу керек.',
            'mimes' => ':attribute жолы :value типті болуы керек.',
            'unique' => 'Бұндай :attribute бос емес!',
        );
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users',
            'password' => 'required|min:8',
            'gender' => 'required',
            'is_admin' => 'required'
        ], $messages);
        $rank = '';
        $filename = '';
        $email = null;
        if($request->email) $email=$request->email;
        if($request->rank) $rank=$request->rank;
        if($request->image){
            $uploadedFile = $request->file('image');
            $ext = $uploadedFile->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            Storage::disk('images')->putFileAs(
                'users/avatar/',
                $uploadedFile,
                $filename
            );
        }
        return User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'rank' => $rank,
            'email' => $email,
            'img' => $filename,
            'gender' => $request->gender,
            'is_admin' => $request->is_admin
        ]);

        return redirect()->route('qoldanushylar.index')->with('message', 'Қолданушы сәтті жүктелді!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::disk('images')->delete('users/avatar/'.$user->img);
        $user->delete();
        return redirect()->route('qoldanushylar.index')->with('message', 'Қолданушы сәтті жойылды!');
    }
}
