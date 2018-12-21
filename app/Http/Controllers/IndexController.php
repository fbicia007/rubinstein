<?php

namespace App\Http\Controllers;

use App\Http\Model\Competition;
use App\Http\Model\Contacts;
use App\Http\Model\Educational;
use App\Http\Model\Lecturer;
use App\Http\Model\Locations;
use App\Http\Model\Masters;
use App\Http\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index()
    {
//        $db = DB::connection()->getPdo();
//        dd($db);
        return view('home.index');
    }

    public function infos()
    {
        return view('home.infos');
    }

    public function contact()
    {

        if(Input::all()){

            $input = Input::except('_token');

            $add = Contacts::create($input);

            if($add){

                return back()->with('errors','非常感谢您的问询，我们将很快与您取得联系!');

            }else{

                return back()->with('errors','提交错误！');

            }



        }
        return view('home.contact');
    }
    public function imprint()
    {
        return view('home.imprint');
    }
    public function dp()
    {
        return view('home.dp');
    }

    public function lecturers()
    {
        $lecturer = Lecturer::all();

        return view('home.lecturers', compact('lecturer'));
    }

    public function lecturerDetails($lecturerId)
    {
        $lecturer = Lecturer::find($lecturerId);

        return view('home.lecturerDetails', compact('lecturer'));
    }

    public function masterClasses()
    {
        $masters = Masters::all();

        return view('home.masterClasses', compact('masters'));
    }

    public function masterClassDetails($masterId)
    {

        if(Input::all()){

            $input = Input::except('_token');

            $add = Contacts::create($input);

            if($add){

                return back()->with('errors','报名已发送成功，我们将很快与您取得联系!');

            }else{

                return back()->with('errors','提交错误！');

            }



        }

        $master = Masters::find($masterId);

        return view('home.masterClassDetails', compact('master'));
    }

    public function news()
    {
        $news = News::all();

        return view('home.news', compact('news'));
    }

    public function educationalSystem()
    {
        $educational = Educational::all();

        return view('home.educational', compact('educational'));
    }

    public function educationalDetails($eduId)
    {
        $educational = Educational::all();
        $edu = Educational::find($eduId);

        return view('home.educationalDetails',compact('edu','educational'));
    }

    public function competitions()
    {
        $competitions = Competition::all();

        return view('home.competitions', compact('competitions'));
    }

    public function competitionDetails($comp_id)
    {

        if(Input::all()){

            $input = Input::except('_token');

            $add = Contacts::create($input);

            if($add){

                return back()->with('errors','报名已发送成功，我们将很快与您取得联系!');

            }else{

                return back()->with('errors','提交错误！');

            }



        }

        $comp = Competition::find($comp_id);
        return view('home.competitionDetails',compact('comp'));
    }

    public function registration()
    {
        if(Input::all()){

            $input = Input::except('_token');

            $add = Contacts::create($input);

            if($add){

                return back()->with('errors','报名已发送成功，我们将很快与您取得联系!');

            }else{

                return back()->with('errors','提交错误！');

            }



        }
        return view('home.registration');
    }

    public function location($locId)
    {
        $location = Locations::find($locId);

        return view('home.location', compact('location'));
    }
}
