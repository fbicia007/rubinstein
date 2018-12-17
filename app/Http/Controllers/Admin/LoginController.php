<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;


class LoginController extends CommonController
{
    public function login()
    {

        if($input = Input::all()){

            //$user = User::all();


            //$user = User::where('user_name',$input['email'])->get();

            $user = User::find($input['email']);

            if(!$user){
                return back()->with('msg','用户名或密码错误');
            }

            //dd($user);

            //echo $user->user_password;

            if($input['email']==$user->user_name && Crypt::decrypt($user->user_password)==$input['password']){
            //if(Crypt::decrypt($user->user_password)==$input['password']){

                session(['user'=>$user]);

                //dd(session('user'));

                return redirect('admin/index');

            }else{
                return back()->with('msg','用户名或密码错误');
            }

        }else{


            return view('admin.login');
        }

    }

    public function code()
    {
        //验证码
        //$code = new \Test;
//        $code->test();


    }

    //测试密码加密
    public function crypt()
    {
        $str = '123456';
        echo $str2 = Crypt::encrypt($str);
        echo '<br/>';
        echo Crypt::decrypt($str2);


    }

    //backend logout
    public function logout()
    {
        session(['user'=>null]);

        return redirect('admin/login');


    }
}
