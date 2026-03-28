<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // عرض صفحة login
    public function showLogin()
    {
        return view('auth.login');
    }

    // تنفيذ تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/books');
        }

        return back()->with('error', 'Invalid email or password');
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
