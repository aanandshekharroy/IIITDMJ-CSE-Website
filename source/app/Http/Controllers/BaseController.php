<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Faculty;
use App\ResearchGroup;
class BaseController extends Controller
{
    //
    public function __construct(){
    	$researchGroup=ResearchGroup::orderBy('name')->get();
        $faculty=Faculty::orderBy('name')->get();
        view()->share(['researchGroup'=>$researchGroup,'faculty'=>$faculty]);
    }
}
