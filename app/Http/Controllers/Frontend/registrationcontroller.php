<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class registrationcontroller extends Controller
{
    public function registrationshow()
    {
        return view('users.pages.registration');
    }
    public function loginshow()
    {
        return view('users.pages.login');
    }


    public function userstore(Request $request)
    {
        // dd($request->all());


        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        User::Create([
            'name' => $request->first_name,
            'lastname' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,

        ]);
        return redirect()->back()->with('message', 'Congratulations, Registration Successfull');
    }


    public function loginPost(Request $request)
    {
        // dd($request->all());

        $userpost = $request->except('_token');
        // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('frontend.user');
        } else {
            Session::flash("error", 'Invalid username or password');

            return redirect()->route('loginshow');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.user');
    }
}
