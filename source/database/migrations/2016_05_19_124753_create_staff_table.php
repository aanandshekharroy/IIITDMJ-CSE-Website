<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('designation');
            $table->string('department');
            $table->string('contact');
            $table->string('picture')->default('/assets/img/staff/default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            Schema::dropIfExists('staff');
        });
    }
}
