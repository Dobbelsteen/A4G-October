<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_locations');
    }
}