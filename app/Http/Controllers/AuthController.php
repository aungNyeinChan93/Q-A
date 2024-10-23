<?php

namespace App\Http\Controllers;


use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // login page
    public function login()
    {
        return inertia("auth/Login");
    }

    // register page
    public function register()
    {
        return inertia("auth/Register");
    }

    // register process
    public function registerProcess(Request $request)
    {
        $fields = $request->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required"],
            "image" => ["nullable", "file", "mimes:png,jpg"],
        ]);
        $path = null;
        if ($request->hasFile("image")) {
            $path = Storage::disk("public")->put("userImage", $request->image);
        }
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "image" => $path,
        ]);
        Auth::login($user);
        return inertia("Home", ["alert" => "Register Success!", "user" => $user]);
    }

    // login process
    public function loginProcess(Request $request)
    {
        $field = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);
        if (Auth::attempt($field)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return inertia("Home", ["alert" => "Login Success!", "user" => $user]);
            // return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // logout process
    public function logout(Request $request){
        request()->session()->regenerate();
        Auth::logout();
        return to_route("Auth#register");
    }

    // test
    public function test(){
        return inertia("Test");
    }
}
