<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('/admin/dashboard');
        } else {
            return view('admin.login');
        }
        return view('admin.login');
    }


    public function auth(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = Admin::where(['email' => $email])->first();

        if ($data) {
            if (Hash::check($request->post('password'), $data->password)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $data->id);
                return redirect('admin/dashboard');
            } else {
                $request->session()->flash("error", "please check your password Password");
                return redirect('admin');
            }
        } else {
            $request->session()->flash("error", "please Enter Valid Login Details");
            return redirect('admin');
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function update()
    {
        $data = Admin::find(1);
        $data->password = Hash::make('123456789');
        $data->save();
        return view('admin.dashboard');
    }
}