<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_projects', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('fId')->unsigned()->nullable(false);
            $table->foreign('fId')->references('fId')->on('faculty');
            $table->string('pName');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('funding_agency');
            $table->string('PI');
            $table->string('co_PI');
            $table->enum('status',['active','ongoing','delayed','completed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculty_projects', function (Blueprint $table) {
            //
            Schema::dropIfExists('faculty_projects');
        });
    }
}
