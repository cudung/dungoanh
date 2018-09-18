<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    public function get_user_info($login_id, $password) {
        return DB::table('account')->where('login_id', $login_id)->where('password',$password)->value('id');
    }
}