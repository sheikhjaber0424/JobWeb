<?php 

namespace App\Models;

class ListingModel{
    public static function all(){
        return  [
            [ 
                'id' => '1',
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse libero sequi provident assumenda cumque expedita, quo non maiores vero voluptas neque similique error amet, sunt autem fugiat placeat delectus?'
            ],
            [
                'id' => '2',
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse libero sequi provident assumenda cumque expedita, quo non maiores vero voluptas neque similique error amet, sunt autem fugiat placeat delectus?'
            ]

            ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id)
            {
                return $listing;
            }
        }
    }
}