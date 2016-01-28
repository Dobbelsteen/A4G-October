<?php namespace RainLab\Blog\Updates;

use Teamswag\Appsforx\Models\Showcase;
use October\Rain\Database\Updates\Seeder;

class SeedTables extends Seeder
{

    public function run()
    {
        //
        // @todo
        //
        // Add a Welcome post or something
        //
        
        Showcase::create([
            'priority'      => 1,
            'name'          => 'First showcase',
            'description'   => 'Showcase description goes here',
            'team_name'     => 'Team SWAG',
            'team_members'  => 'Swagger, Lmao and Roflcopter',
            'datasets'      => 'Toerisme, economie',
            'url_presentation'  => 'www.google.be',
            'url_website'       => 'www.bing.com'
        ]);
        
        Showcase::create([
            'priority'      => 2,
            'name'          => 'Second showcase',
            'description'   => 'Second Showcase description goes here',
            'team_name'     => 'Team SWAGhetti',
            'team_members'  => 'Swaggergheitto, Lmao and Roflcopter',
            'datasets'      => 'Toerismeghetti, economieghetti',
            'url_presentation'  => 'www.google.be',
            'url_website'       => 'www.bing.com'
        ]);
        
        Showcase::create([
            'priority'      => 3,
            'name'          => 'Third showcase',
            'description'   => 'Third obvious Showcase description goes here',
            'team_name'     => 'Team SWAGaroni',
            'team_members'  => 'Swaggeroni, Lmao and Roflcopter',
            'datasets'      => 'Toerismeoni, economieoni',
            'url_presentation'  => 'www.google.be',
            'url_website'       => 'www.bing.com'
        ]);

    }

}
