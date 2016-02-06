<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Default Routes
Route::get('/user/login', function () {
    return view('user.user');
});
//Pass parameters through URL
Route::get('/myfriends/{myUserId}/{is_close_friend}', function ($id,$is_close_friend) {
    return "My User  Id --> ".$id. " is_close_friend -->".$is_close_friend;
});


//Define Named Routes
Route::get('/friends','FriendController@getIndex');
//abc
//FriendController@showSelectedFriend
Route::get('/friend/get/{id}',[
	'as'=>'MyFriend',
	'uses'=>'FriendController@showSelectedFriend'	
]);


Route::post('/myFriend',[
	'as'=>'MyProfile',
	'uses'=>'FriendController@getIndex'	
]);


/**
 * Define Item Related routes in here
 */
Route::get('/items','ItemsController@index');


Route::get('/item/add','ItemsController@addItems');

Route::post('/item/save','ItemsController@store');



