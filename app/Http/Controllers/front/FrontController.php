<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Addtocart;
use App\Models\Category;
use App\Models\Order_info;
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
            $c = Addtocart::where(['user_id' => $id])->where(['active' => 1])->count();
            return view("front.index", compact('data_category', 'data_product', 'data', 'c'));
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
            $related_data_product = Product::where(['category_id' => $data_product->category_id])->get();
            $c = Addtocart::where(['user_id' => $user_id])->where(['active' => 1])->count();
            return view("front.product_details", compact('data_product', 'data', 'related_data_product', 'c'));
        } else {
            return redirect('/')->with("error", "without login you can not shop ");
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

    public function addtocart_delete(Request $request, $id)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $c = Addtocart::where(['user_id' => $user_id])->where(['active' => 1])->count();
            $res = Addtocart::where(['id' => $id])->delete();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function addtocart_update(Request $request, $Find_id)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $addtocart = Addtocart::where(['id' => $Find_id])->first();
            $data_product = Product::where(['id' => $addtocart->product_id])->first();
            $related_data_product = Product::where(['category_id' => $data_product->category_id])->get();
            $c = Addtocart::where(['user_id' => $user_id])->count();
            return view("front.addtocart_update", compact('data_product', 'data', 'related_data_product', 'c', 'addtocart'));
        } else {
            return redirect('/login');
        }
    }

    public function addtocart_update_submit(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $cdate = date('d-M-Y');
            $addtocart = Addtocart::find($request->id);
            $qty = $request->qty;
            $price = $request->price;
            $total_price = $qty * $price;
            $addtocart->product_id = $request->product_id;
            $addtocart->user_id = $user_id;
            $addtocart->dop = $cdate;
            $addtocart->qty = $request->qty;
            $addtocart->total_price = $total_price;
            $addtocart->save();
            return redirect('/shopcart');
        } else {
            return redirect('/login');
        }
    }

    public function shopcart(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $data = User::find($user_id);
            $c = Addtocart::where(['user_id' => $user_id])->where(['active' => 1])->count();
            $subtotal = Addtocart::where(['user_id' => $user_id])->where(['active' => 1])->sum('total_price');
            $data_addtocart_product = Addtocart::join('products', 'addtocarts.product_id', '=', 'products.id')
                ->where(['addtocarts.user_id' => $user_id])
                ->where(['addtocarts.active' => 1])
                ->get(['addtocarts.qty', 'addtocarts.id', 'addtocarts.total_price', 'products.name', 'products.image', 'products.price']);
            return view("user.shopcart", compact('data', 'c', 'data_addtocart_product', 'subtotal'));
        } else {
            return redirect('/login');
        }
    }
    public function checkout(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $sn = 1;
            $i = 1;
            $j = 1;
            $p = 1;
            $a = 1;
            $data = User::find($user_id);
            $c = Addtocart::where(['user_id' => $user_id])->where(['active' => 1])->count();
            $subtotal = Addtocart::where(['user_id' => $user_id])->sum('total_price');
            $data_addtocart_product = Addtocart::join('products', 'addtocarts.product_id', '=', 'products.id')
                ->where(['addtocarts.user_id' => $user_id])
                ->where(['addtocarts.active' => 1])
                ->get(['addtocarts.qty', 'addtocarts.id', 'addtocarts.total_price', 'addtocarts.product_id', 'addtocarts.total_price', 'products.name', 'products.image', 'products.price']);
            return view("user.checkout", compact('data', 'c', 'data_addtocart_product', 'subtotal', 'p', 'i', 'sn', 'j', 'a'));
        } else {
            return redirect('/login');
        }
    }

    public function order_info(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $user_id = session()->get('USER_ID');
            $order_id = Order_info::select('id')->orderby('id', 'desc')->first();
            $mydata = Addtocart::where(['user_id' => $user_id])
                ->where(['active' => 1])
                ->orderby('id', 'desc')->get();

            $i = 1;
            $j = 1;
            $p = 1;
            $a = 1;
            $dop = date('d-M-Y');
            $order_new = $order_id->id + 1;
            // return "hello";
            // return $request->input();
            foreach ($mydata as $item) {
                $addtocart_id = "addtocart_id" . $a++;
                $product_id = "product_id" . $i++;
                $qty = "qty" . $j++;
                $total_price = "total_price" . $p++;
                $order_info = new Order_info();
                $order_info->order_id = $order_new;
                $order_info->product_id = $request->$product_id;
                // return $request->$addtocart_id;
                $addtocart = Addtocart::where(['id' => $request->$addtocart_id])->first();
                $order_info->user_id = $user_id;
                $order_info->dop = $dop;
                $order_info->qty = $request->$qty;
                $order_info->price = $request->$total_price;
                $addtocart->active = 0;
                $order_info->save();
                $addtocart->save();
            }
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function shop(Request $request)
    {
        $data_category = Category::all();
        $data_product = Product::all();

        if ($request->session()->has('USER_LOGIN')) {
            $id = session()->get('USER_ID');
            $data_category = Category::all();
            $data_product = Product::all();
            $data = User::find($id);
            $c = Addtocart::where(['user_id' => $id])->where(['active' => 1])->count();
            return view("front.index", compact('data_category', 'data_product', 'data', 'c'));
        } else {
            $data_category = Category::all();
            $data_product = Product::all();
            return view("front.index", compact('data_category', 'data_product'));
        }
        return view("front.index", compact('data_category', 'data_product'));
    }
}