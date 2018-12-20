<?php

namespace App\Http\Controllers;

use App\Http\Model\Competition;
use App\Http\Model\Educational;
use App\Http\Model\Lecturer;
use App\Http\Model\Masters;
use App\Http\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $edu = Educational::find($eduId);

        return view('home.educationalDetails',compact('edu'));
    }

    public function competitions()
    {
        $competitions = Competition::all();

        return view('home.competitions', compact('competitions'));
    }

    public function competitionDetails($comp_id)
    {
        $comp = Competition::find($comp_id);
        return view('home.competitionDetails',compact('comp'));
    }

    public function registration()
    {
        return view('home.registration');
    }

    public function location()
    {
        return view('home.location');
    }
}
