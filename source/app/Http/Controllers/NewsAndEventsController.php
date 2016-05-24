<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NewsEvents;
use App\Notice;

class NewsAndEventsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        //
        $newsData=NewsEvents::orderBy('created_at','DESC')->paginate(20);

        $notices=NewsAndEventsController::getNotices();
        //return $notices;
        return view('events_news_list')->with(['newsData'=>$newsData,'notices'=>$notices]);
    }

    public function getNotices() {
        $notices = Notice::orderBy('created_at','DESC')->get();

        return $notices;
    }
    public function show($id)
    {
        //

        $detail=NewsEvents::where('id',$id)->first();
        $notices=NewsAndEventsController::getNotices();
        return view('news_details')->with(['detail'=>$detail,'notices'=>$notices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
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
