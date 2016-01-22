<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_speakers', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('priority');
            $table->string('name', 255);
            $table->string('description', 1024)->nullable();
            $table->string('twitter');
            $table->string('linkedIn');
            $table->string('function')->nullable();
            $table->string('organisation')->nullable();
            $table->timestamps();
        });

        Schema::create('teamswag_appsforx_events', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_events');
        Schema::dropIfExists('teamswag_appsforx_speakers');
    }
}
