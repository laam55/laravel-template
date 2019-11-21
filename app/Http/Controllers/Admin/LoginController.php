<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Input;
use Validator;
use Session;

class LoginController extends Controller
{   
    //Login page
    function index(){

        if(Auth::check()){
            return redirect()->route('admin.index');
        }
        $input = Input::except('_token','btn-submit');
        if(!empty($input)){

            $validator = Validator::make($input,
            [
                'username'=>'required','password'=>'required'
            ], 
            [
                'username.required'=>'Hãy nhập tài khoản',
                'password.required'=>'Hãy nhập mật khẩu'
            ]);
            if($validator->fails()){
                return redirect()->route('admin.login')->withErrors($validator);
            }else{
                if(Auth::attempt($input)){
                    Session::flash('thongbao','Đăng nhập thành công');
                    return redirect()->route('admin.index');
                }else{
                    return view('admin.account.login')->with(['message'=>'Sai thông tin đăng nhập']);
                }
            }
        }

        return view('admin.account.login');
    }
    //Logout page
    public function logout($value='')
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
