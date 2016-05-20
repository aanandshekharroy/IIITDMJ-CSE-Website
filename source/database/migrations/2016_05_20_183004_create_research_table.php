
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            //
            $table->increments('rId');
            $table->integer('rgId')->unsigned()->nullable(false);
            $table->string('title');
            $table->longText('content');
            $table->string('guide');
            $table->foreign('rgId')->references('rgId')->on('research-group');
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
        Schema::table('research', function (Blueprint $table) {
            //
            Schema::dropIfExists('research');
        });
    }
}
