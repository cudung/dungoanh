<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_model;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product_model $model)
    {
        $product = $model->get_product();
        echo '<pre>';print_r($product);
        return view('home');
    }

    public function product()
    {

        return view('products');
    }
}
