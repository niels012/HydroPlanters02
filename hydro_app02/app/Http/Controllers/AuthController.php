<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login() {
        return view('loginlte');
    }

    public function signup() {
        return view('signuplte');
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3'
        ]);

        if($validator->fails()) {
            return redirect()->route('signup')->withErrors($validator);
        }

        User::create([
            'firstname' => $request->get('first_name'),
            'middlename' => $request->get('middle_name'),
            'lastname' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('login')->with('success', 'You can now sign in');
    }    

    public function authenticate(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('login')->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'You are now signed in');
            // var_dump(Auth::user());
        } else {
            return redirect()->route('login')->withErrors('Invalid email and password');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }

}