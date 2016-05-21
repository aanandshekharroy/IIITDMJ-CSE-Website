<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //
    protected $table="research";
    public function faculty(){
    	return $this->belongsTo('App\Faculty','fId','fId');
    }
    public function student(){
    	return $this->belongsTo('App\Student','sId','sId');
    }
    public function researchGroup(){
    	return $this->belongsTo('App\ResearchGroup','rgId','rgId');
    }
}
