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
    public function usersignup() {
        return view('signuplte  ');
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3'
        ]);

        if($validator->fails()) {
            return redirect()->route('usersignup')->withErrors($validator);
        }

        User::create([
            'fname' => $request->get('first_name'),
            'mname' => $request->get('middle_name'),
            'lname' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('userlogin')->with('success', 'You can now sign in');

    }

    public function userlogin() {
        return view('loginlte');
    }

    public function authenticate(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('userlogin')->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboardlte1.index')->with('success', 'You are now signed in');
            // var_dump(Auth::user());
        } else {
            return redirect()->route('userlogin')->withErrors('Invalid email and password');
        }
    }

    public function userlogout() {
        Session::flush();
        Auth::logout();

        // return redirect()->route('userlogin');
    }
}
