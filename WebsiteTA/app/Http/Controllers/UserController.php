<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials )) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginerror', 'login Gagal');

    }
}
