<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class LinkBlogEvent extends Migration
{

    public function up()
    {
        Schema::table('rainlab_blog_posts', function ($table) {
            $table->integer('event_id');
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_posts', function ($table) {
            $table->dropColumn('event_id');
        });
    }
}
