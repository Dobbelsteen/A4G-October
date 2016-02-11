<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdatePostsTable extends Migration
{

    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
                $table->string('author')->nullable()->add();
        });
        
    }

    public function down()
    {
    
    }
}