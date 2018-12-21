<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Contacts;
use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


//use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        $loginUser = session('user');

        $loginUser_email = $loginUser->user_name;


        $user_name = $loginUser->user_lastname.$loginUser->user_firstname ;

        if($input = Input::all()){

            $rules=[
              'password'=>'required|between:6,20|confirmed',
            ];

            $errorMessage =[
                'password.required'=>'新密码不能为空！',
                'password.between'=>'密码位数必须大于6小于20！',
                'password.confirmed'=>'新密码与确认密码不一致！',
            ];

            $validator = Validator::make($input,$rules,$errorMessage);//验证


            if($validator->passes()){

                $user = User::find($loginUser_email);

                $_password = Crypt::decrypt($user->user_password);

                if($_password == $input['oldPassword']){

                    $user->user_password = Crypt::encrypt($input['password']);
                    $user->update();

                    return redirect('admin/index');

                }else{
                    return back()->with('pwError','原密码不正确！');
                }

            }else{

                return back()->withErrors($validator);

                //dd($validator->errors()->all());

            }


        }else {

            return view('admin.index', compact('user_name'));

        }

    }
//
//    public function basic()
//    {
//        $stu = Contacts::with('reg_type',1);
//
//        dd($stu);
//
//        return view('admin.basic');
//
//    }

    public function reg_edu()
    {
        //$list = Contacts::where('reg_type',1)->get();

        $list = DB::table('contacts')->leftJoin('educational', 'contacts.edu_id', '=', 'educational.edu_id')
            ->where('reg_type', 1)
            ->get();
        //$list = json_decode(json_encode($list)); //it will return you stdclass object
        $list = json_decode(json_encode($list),true); //it will return you data in array

        return view('admin.reg_edu', compact('list'));

    }

    public function reg_master()
    {

//        $list = Contacts::where('reg_type',2)->get();

        $list = DB::table('contacts')->leftJoin('masters', 'contacts.master_id', '=', 'masters.master_id')
            ->where('reg_type', 2)
            ->get();
        //$list = json_decode(json_encode($list)); //it will return you stdclass object
        $list = json_decode(json_encode($list),true); //it will return you data in array


        return view('admin.reg_master', compact('list'));

    }

    public function reg_match()
    {

//        $list = Contacts::where('reg_type',3)->get();

        $list = DB::table('contacts')->leftJoin('competitions', 'contacts.comp_id', '=', 'competitions.competition_id')
            ->where('reg_type', 3)
            ->get();
        //$list = json_decode(json_encode($list)); //it will return you stdclass object
        $list = json_decode(json_encode($list),true); //it will return you data in array

        return view('admin.reg_match', compact('list'));

    }

    //修改后台用户密码
    public function password()
    {
        if($input = Input::all()){

            dd($input);


        }else{

            return view('admin.password');

        }

    }
}
