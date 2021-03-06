<?php
/**
 * Created by PhpStorm.
 * User: quang_dung
 * Date: 9/19/2018
 * Time: 3:10 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product_model extends Model
{
    private $_table = 'department';
    public function get_product() {
        $product = DB::table($this->_table)
                    ->leftJoin('category', 'department.id', '=', 'category.department_id')
                    ->leftJoin('product', 'product.category_id', '=', 'category.id')
                    ->leftJoin('product_img', 'product.id', '=', 'product_img.product_id')
                    ->select('department.name as d_name', 'category.name as c_name', 'product_img.url', 'product.*')
                    ->get()
                    ->toArray();
        return $product;
    }

    public function get_data_menu() {
        $menu = DB::table($this->_table)
                    ->leftJoin('category', 'department.id', '=', 'category.department_id' )
                    ->where('category.active', 1)
                    ->where('department.active', 1)
                    ->select('department.name as d_name', 'department.id as d_id', 'category.id as c_id', 'category.name as c_name')
                    ->get()
                    ->toArray();
        return $menu;
    }
}