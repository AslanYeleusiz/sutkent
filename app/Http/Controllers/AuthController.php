<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request) {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'password' => 'required|min:8|max:22',
            'password_confirm' => 'required|same:password'
        ]);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        auth()->login($user);
        return redirect('/');
    }


    public function login(Request $request) {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect("/");
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => ['required', 'string', 'email', 'max:255','unique:user,email'],
            'name' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'max:22', 'required_with:password_confirm'],
            'password_confirm' => ['required', 'string', 'min:8', 'max:16', 'same:password'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => $data['password'],
        ]);
    }
}
