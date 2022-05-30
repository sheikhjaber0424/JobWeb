<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public  function index() {    
      // dd(request());
        return view('listings.index',[
            'listings' => Listing ::latest()->filter(request(['tag','search']))->get() 
        ]);
    }
 
    //show single listing
    public function show($id)
    {
        return view('listings.show', [
            'listing' => Listing::find($id)
        ]);

    }

    public function create()
    {
        return view('listings.create');
    }
}
