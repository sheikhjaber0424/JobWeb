<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// All Listings
Route::get('/',  [ListingController::class, 'index']  );




//show Create form
Route::get('/listings/create',  [ListingController::class, 'create']);

//Single Listing
Route::get('/listings/{id}',[ListingController::class,'show']);


/*Route::get('/hello', function () {
    return response('<h1>Hello World</h1>')
    ->header('content-type','text/plain');
});
Route::get('/posts/{id}', function ($id) {
    //ddd($id);
    return response('Post ' . $id);   
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
   return($request->name.' '. $request->city);
});
*/


