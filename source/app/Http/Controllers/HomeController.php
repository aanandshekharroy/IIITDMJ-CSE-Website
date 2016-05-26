<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Research;
use App\NewsEvents;
use App\Notice;
use App\Student;
class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research=Research::orderBy('created_at','DESC')->get();
        $newsData=NewsEvents::orderBy('created_at','DESC')->get();
        $notices=HomeController::getNotices();
        $students=Student::orderBy('name','ASC')->get();
        //$student
        return view('welcome')->with(['research'=>$research ,
            'newsData'=>$newsData, 
            'notices'=>$notices
            ,'students'=>$students]);
    }

    public function getNotices() {
        $notices = Notice::orderBy('created_at','DESC')->get();

        return $notices;
    }
}
