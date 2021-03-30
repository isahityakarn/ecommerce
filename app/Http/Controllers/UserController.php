<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('user.login');
    }


    public function auth(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
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

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = user::find(1);
        $data->password = Hash::make('123456789');
        $data->save();
        return view('/');
    }
}