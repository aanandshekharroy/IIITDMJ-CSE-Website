<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
       'name', 'programme','research-area','guide','completion-date','picture',
    ];
    public function research(){
    	return $this->hasOne('App\Research','sId','sId');
    }
}
