<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\web;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = Web::latest()->first();
        return view('login', [
            'web' => $web
        ]);
    }

    public function otentikasi(Request $request)
    {

        $req =   $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required'
        ]);

        if (Auth::attempt($req)) {

            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
