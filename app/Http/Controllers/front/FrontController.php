<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data_category = Category::all();
        $data_product = Product::all();
        return view("front.index", compact('data_category', 'data_product'));
    }

    public function product_details($id)
    {
        $data_product = Product::where(['id' => $id])->first();
        return view("front.product_details", compact('data_product'));
    }
}