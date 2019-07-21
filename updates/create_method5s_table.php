<?php namespace Mohsin\Selectable\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMethod5sTable extends Migration
{
    public function up()
    {
        Schema::create('mohsin_selectable_method5s', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('status_dropdown');
            $table->integer('status_radio');
            $table->integer('status_balloon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_selectable_method5s');
    }
}
