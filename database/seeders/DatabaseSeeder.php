<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(5)->create();
        // Listing::factory(6)->create();

        Listing::create([
            'title'=>'laravel_1',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

        Listing::create([
            'title'=>'laravel_2',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

        Listing::create([
            'title'=>'laravel_3',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

        Listing::create([
            'title'=>'laravel_4',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

        Listing::create([
            'title'=>'laravel_5',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

        Listing::create([
            'title'=>'laravel_6',
            'tags'=>'html,css',
            'company'=>'Acme corp',
            'loction'=>'gaza',
            'email'=>'seit111@emil.com',
            'website'=>'/www.netflix.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequunturLorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nulla nesciunt fugiat eum amet consequuntur  '
        ]);

    }
}
