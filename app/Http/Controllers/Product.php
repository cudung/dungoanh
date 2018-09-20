<?php
/**
 * Created by PhpStorm.
 * User: quang_dung
 * Date: 9/20/2018
 * Time: 10:33 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_model;

class Product extends Controller
{
    public function add_product(Product_model $product_model) {
        $menu = $product_model->get_data_menu();
        foreach($menu as $key => $value) {
            $data[$value->d_id]['d_name'] = $value->d_name;
            $data[$value->d_id]['category'][$value->c_id] = $value->c_name;
        }
        return view('add_product', compact('data'));
    }

}