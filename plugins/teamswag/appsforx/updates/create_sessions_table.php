<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSessionsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_sessions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->dateTime('start_time');
            $table->string('duration');
            $table->text('description');
            $table->enum('niveau', ['Beginner', 'Intermediate', 'Advanced', 'Expert']);
            $table->enum('type', ['Workshop', 'Panel', 'Keynote', 'Hackathon']);
            $table->integer('location_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->timestamps();
            $table->string('slug')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_sessions');
    }
}