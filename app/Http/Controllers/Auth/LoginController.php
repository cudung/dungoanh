<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function post_login(Request $request) {


        $email = $request->input('email');
        $password = md5($request->input('password'));
        echo $email;
        echo $password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            echo 123;
            return redirect()->intended('dashboard');
        }
    }

    public function rule() {
        $rule = [
            'email' => 'required',
            'password' => 'required'
        ];
        return $rule;
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
