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
        // \App\Models\User::factory(5)->create();

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
         
         Listing::create([
            'title' =>'Laravel Developer',
            'tags' =>'Laravel, Vue.js',         
            'company' =>'Uni Industries',
            'location' =>'Las Vegas',
            'email' =>'Uni@gmail.com',
            'website' =>'https://www.Uni.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 

         ]);
         Listing::create([
            'title' =>'Web Developer',
            'tags' =>'Laravel, React, api',         
            'company' =>'Gasp Industries',
            'location' =>'New York, NY',
            'email' =>'Gasp@gmail.com',
            'website' =>'https://www.Gasp.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 

         ]);
         Listing::create([
            'title' =>'Full-Stack Developer',
            'tags' =>'Laravel, api',         
            'company' =>'brand Industries',
            'location' =>'Alaska, USA',
            'email' =>'brand@gmail.com',
            'website' =>'https://www.brand.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 

         ]);
         Listing::create([
            'title' =>'Frontend Developer',
            'tags' =>'React, api',         
            'company' =>'bash Industries',
            'location' =>'California, USA',
            'email' =>'bash@gmail.com',
            'website' =>'https://www.bash.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste' 

         ]);
   
    }
}
 