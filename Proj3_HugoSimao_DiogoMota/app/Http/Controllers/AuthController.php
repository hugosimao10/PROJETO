<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function index() {
        return view('loginRegister');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('client')
                ->withSuccess('Signed in');
        }

        return redirect("client")->withSuccess('Login details are not valid');
    }

    public function client()
    {
        if (Auth::check()) {
            return view('client');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => FacadesHash::make($data['password'])
        ]);
    }





    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('login');
    }
}
