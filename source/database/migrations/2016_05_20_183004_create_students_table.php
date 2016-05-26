
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
            $table->string('research-area');
            $table->string('email');
            $table->integer('fId')->unsigned()->nullable(false);
            $table->foreign('fId')->references('fId')->on('faculty');
            $table->date('completion-date');
            $table->string('picture');
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
