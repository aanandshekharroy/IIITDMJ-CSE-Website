<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyProjects extends Model
{
    //
    protected $table='faculty_projects';
    public function faculty(){
    	return $this->belongsTo('App\Faculty','fId','fId');
    }
}
