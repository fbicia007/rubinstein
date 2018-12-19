<?php

namespace App\Http\Controllers;

use App\Http\Model\Competition;
use App\Http\Model\Educational;
use App\Http\Model\Lecturer;
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

    public function lecturers()
    {
        $lecturer = Lecturer::all();

        return view('home.lecturers', compact('lecturer'));
    }

    public function lecturerDetails()
    {
        $lecturer = Lecturer::all();

        return view('home.lecturerDetails', compact('lecturer'));
    }

    public function masterClasses()
    {
        return view('home.masterClasses');
    }

    public function masterClassDetails()
    {
        return view('home.masterClassDetails');
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

    public function educationalDetails()
    {
        return view('home.educationalDetails');
    }

    public function competitions()
    {
        $competitions = Competition::all();

        return view('home.competitions', compact('competitions'));
    }

    public function competitionDetails()
    {
        return view('home.competitionDetails');
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
