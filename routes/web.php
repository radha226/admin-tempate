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

Route::get('/', function () {
	$plugins = [
			'js' => ['jvectormap','gdp-data','flot','animateNumber','sparkline','skycons','main'],
			'css'	=> []
	];
    return view('pages.dashboard',$plugins);
});
Route::get('profile', function () {
    return view('pages.profile');
});

Route::group(['middleware'=>'auth','prefix'=>'myprefix'],function(){

	Route::get('/newlayout', function(){
		return view('mypage');
	});

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
