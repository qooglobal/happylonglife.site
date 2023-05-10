<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = DB::table("users")->where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('userid', $user->id);
                $request->session()->put('username', $user->name);
                return redirect()->to('/dashboard');
            } else {
                return back()->with("wrongemail", 'Wrong Credentials');
            }
        } else {
            return back()->with("wrongemail", 'Wrong Credentials');
        }
    }

    public function logout()
    {
        if (session()->has('userid')) {
            session()->flush();
        }
        return redirect()->to('/');
    }
}
