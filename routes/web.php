<?php

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

use Illuminate\Support\Facades\DB;
use App\Petition;
Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function (){

    $title = 'Our Mentors';
    $body = ['aa','teteh','bapak','ibu'];
    return View('home', compact('title', 'body'));
});

Route::get('hello/{nama}',function ($nama){
    return 'Hello '.$nama;
});

// -- //
///
// -- Show all petitiondata
Route::get('petitions','PetitionController@index');

// -- post a new petition
Route::get('petitions/create','PetitionController@create');
Route::post('petitions','PetitionController@store');

// -- update existing petition data
Route::get('petitions/{id}/edit','PetitionController@edit');
Route::put('petitions/{id}','PetitionController@update');

// -- delete existing petition data
//Route::delete('petitions/{id}, ''''');
Route::delete('petitions/{id}','PetitionController@destroy');
//show
Route::get('petitions/{id}','PetitionController@show');


// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mypetitions', function(){
    return \Illuminate\Support\Facades\Auth::user()->petitions;
})->middleware('auth');

Route::get('petition/{id}/comments',function ($id){
    $petition = \App\Petition::find($id);
    $comments = $petition->comments;
    return $comments;
});

