<?php

namespace Database\Seeders;

use App\Models\Listing;
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
         \App\Models\User::factory(5)->create();

         Listing::create([
            'title' =>'Laravel Senior Developer',
            'tags' =>'Laravel, javascript',         
            'company' =>'Acme, Corp',
            'location' =>'Boston, MA',
            'email' =>'qwe@gmail.com',
            'website' =>'https://www.acme.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 
                             


         ]);

         Listing::create([
            'title' =>'Full-Stack Developer',
            'tags' =>'Laravel, api',         
            'company' =>'Stark Industries',
            'location' =>'New York, NY',
            'email' =>'iui@gmail.com',
            'website' =>'https://www.starkin.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 
                             


         ]);
    }
}
