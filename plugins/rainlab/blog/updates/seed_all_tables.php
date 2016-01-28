<?php namespace RainLab\Blog\Updates;

use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Post;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {
        //
        // @todo
        //
        // Add a Welcome post or something
        //

        Category::create([
            'name' => trans('rainlab.blog::lang.categories.uncategorized'),
            'slug' => 'uncategorized',
        ]);
        
        Post::create([
            'title'         => 'First post!',
            'slug'          => 'first-post',
            'author'        => 'Default Author',
            'excerpt'       => 'This is the short description of this blog post',
            'content'       => 'Dit is content   allemaal op 1 regels zonder HTMLS',
            'content_html'  => '<p>Dit is content</p><p>Met paragrafen</p>',
            'published_at'  => '2016-01-28 00:00:00',
            'published'     => true
        ]);
        
        Post::create([
            'title'         => 'Second post!',
            'slug'          => 'second-post',
            'author'        => 'Default Author',
            'excerpt'       => 'This is the short description of this blog post',
            'content'       => 'Dit is content   allemaal op 1 regels zonder HTMLS',
            'content_html'  => '<p>Dit is content</p><p>Met paragrafen</p>',
            'published_at'  => '2016-01-28 00:00:00',
            'published'     => true
        ]);
    }

}
