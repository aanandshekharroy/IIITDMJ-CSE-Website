
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            //
            $table->increments('sId');
            $table->string('name');
            $table->enum('programme', ['M.tech', 'Phd','B.tech']);
            $table->string('research_area');
            $table->string('email');
            $table->integer('fId')->unsigned()->nullable(false);
            $table->foreign('fId')->references('fId')->on('faculty');
            $table->date('completion_date');
            $table->string('picture')->default('/assets/img/students/default.jpg');
            $table->string('webpage');
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
        Schema::table('students', function (Blueprint $table) {
            //
            Schema::dropIfExists('students');
        });
    }
}
