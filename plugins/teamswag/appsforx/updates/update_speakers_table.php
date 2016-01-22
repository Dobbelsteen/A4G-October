<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateSpeakersTable extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_speakers', function($table)
        {
            $table->string('website')->nullable()->add();
        });
    }

    public function down()
    {

    }
}