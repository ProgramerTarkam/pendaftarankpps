<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class SessionController extends Controller
{
    public function index()
    {
        return view('sesi.login');
    }
    public function login(Request $request)
    {
        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];

        $name = $request->name;    

        if(Auth::attempt($infologin)){
            return redirect('/dasboard');
        }
        ;
    }

    public function register()
    {
        return view('sesi.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->type = $request->input('type');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        auth()->login($user);

        return redirect('/');
    }
}

