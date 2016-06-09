<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;
use App\ContactUs;
class ExtrasController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        parent::__construct();
    }
    public function about_us()
    {
        //
        return view('aboutus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facilities()
    {
        //
        return view('facilities');
    }
    public function gallery(){
        $pics=Gallery::orderBy('created_at')->get();
        return view('gallery')->with('images',$pics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact_us()
    {
        //
        return view('contactus');
    }
    public function post_contact_us(Request $request)
    {
        //

        $contact_us=new ContactUs;
        // ('first_name');
        //     $table->string('last_name');
        //     $table->string('phone');
        //     $table->string('email');
        //     $table->string('message');
        $contact_us->first_name=$request->input('first_name');
        $contact_us->last_name=$request->input('last_name');
        $contact_us->phone=$request->input('phone');
        $contact_us->email=$request->input('email');
        $contact_us->message=$request->input('message');
        $contact_us->save();
        return view('contactus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
