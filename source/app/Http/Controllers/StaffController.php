<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Staff;

class StaffController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        parent::__construct();;
    }
    public function index()
    {
         
        $staffData=Staff::all();

        return view('staff')->with(['staffData'=>$staffData]);
    }
}
