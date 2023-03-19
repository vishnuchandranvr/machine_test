<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show()
    {

        return view('frontend.auth.login');
    }

    public function registration()
    {

        return view('frontend.auth.registration');
    }
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);


        Auth::login($user);


        return redirect()->route('product.index');
    }

    public function login(Request $request)
    {

        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return redirect()->route('user_login.show')->withErrors($validator)->withInput();
        } else {

            $userdata = array(
                'email' => $request->email,
                'password' => $request->password,
               
            );


            if (Auth::attempt($userdata)) {
                return redirect()->route('product.index');
            } else {
                Session::flash('message', 'Email id or Password is Incorrect!');
                Session::flash('alert-class', 'alert-danger');
                return back();
            }
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('user_login.show');
    }
}
