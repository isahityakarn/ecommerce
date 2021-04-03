<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;


class UserController extends Controller
{

    public function index()
    {
        return view('user.login');
    }


    public function auth(Request $request)
    {
        $email = $request->input('email');
        $data = User::where(['email' => $email])->first();
        if ($data) {
            if (Hash::check($request->post('password'), $data->password)) {
                $request->session()->put('USER_LOGIN', true);
                $request->session()->put('USER_ID', $data->id);
                return redirect('/');
            } else {
                $request->session()->flash("error", "please check your password Password");
                return redirect('/login');
            }
        } else {
            $request->session()->flash("error", "please Enter Valid Login Details");
            return redirect('/login');
        }
    }


    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function usercreate()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userstore(Request $request)
    {



        $password = $request->password;
        $cpassword = $request->cpassword;
        if ($password != $cpassword) {
            return redirect()->back();
        } else {
            $request->validate([
                'email' => 'unique:users,email',
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->address = $request->address;
            $user->state = $request->state;
            $user->zipcode = $request->zipcode;
            $user->country = $request->country;
            $user->phone = $request->phone;
            $user->save();
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }



    public function update1()
    {
        $data = user::find(6);
        $data->password = Hash::make('123456789');
        $data->save();
        return view('/');
    }
}