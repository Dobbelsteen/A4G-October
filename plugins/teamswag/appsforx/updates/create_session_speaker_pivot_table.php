<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSessionSpeakerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamswag_appsforx_se_sp', function($table) {
            $table->engine = 'InnoDB';
            $table->integer('speaker_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->primary(['session_id', 'speaker_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teamswag_appsforx_se_sp');
    }
}
