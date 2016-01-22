<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateSessionsTable extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_sessions', function($table)
        {
            $table->string('color')->nullable()->add();
            $table->boolean('is_global')->add();
            $table->dropColumn('description');
            $table->text('descr')->add();
        });
    }

    public function down()
    {

    }
}