<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Addtocart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $data_category = Category::all();
        $data_product = Product::all();

        if ($request->session()->has('USER_LOGIN')) {
            $id = session()->get('USER_ID');
            $data_category = Category::all();
            $data_product = Product::all();
            $data = User::find($id);
            return view("front.index", compact('data_category', 'data_product', 'data'));
        } else {
            $data_category = Category::all();
            $data_product = Product::all();
            return view("front.index", compact('data_category', 'data_product'));
        }
        return view("front.index", compact('data_category', 'data_product'));
    }


    public function product_details($Find_id, Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $data_product = Product::where(['id' => $Find_id])->first();
            return view("front.product_details", compact('data_product', 'data'));
        } else {
            return redirect('/')->with("error");
        }
    }

    public function addtocart(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $cdate = date('d-M-Y');
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $qty = $request->qty;
            $price = $request->price;
            $total_price = $qty * $price;
            $addtocart = new Addtocart;
            $addtocart->product_id = $request->product_id;
            $addtocart->user_id = $user_id;
            $addtocart->dop = $cdate;
            $addtocart->qty = $request->qty;
            $addtocart->total_price = $total_price;
            $addtocart->save();
            return redirect("/");
        } else {
            return redirect('/login');
        }
    }
}