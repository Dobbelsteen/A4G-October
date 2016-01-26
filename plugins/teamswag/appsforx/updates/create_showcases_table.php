<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_showcases', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('priority');
            $table->string('name', 255);
            $table->string('description', 1024)->nullable();
            $table->string('team_name');
            $table->string('team_members');
            $table->string('datasets')->nullable();
            $table->string('url_presentation')->nullable();
            $table->string('url_website')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_showcases');
    }
}