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

Route::get('/','Wap\IndexController@index');

Route::group(['namespace' => 'Player'],function($router){
    Route::get('register','AuthController@register')->name('player.register');
    Route::post('register','AuthController@register')->name('player.register.post');
    Route::get('login','AuthController@login')->name('player.login');
    Route::post('login','AuthController@login')->name('player.login.post');
    Route::get('logout','AuthController@logout')->name('player.logout');
});

Route::group(['prefix' => 'm','namespace' => 'Wap'],function($router){
    Route::get('login', 'LoginController@showLoginForm')->name('wap.login');
    Route::any('logout', 'LoginController@logout')->name('wap.logout');
    Route::post('login', 'LoginController@postLogin')->name('wap.login.post');
	Route::get('/','IndexController@index')->name('wap.index');
	Route::get('/activity_list','IndexController@activity_list')->name('wap.activity_list');
    Route::get('activity_detail/{id}', 'IndexController@activity_detail')->name('wap.activity_detail');
    Route::get('nav', 'IndexController@nav')->name('wap.nav');
    
    Route::get('playGame', 'IndexController@playGame')->name('wap.playGame');

    Route::get('activate-provider', 'IndexController@activateProvider');
    Route::get('balance', 'IndexController@balance');
    Route::get('loading',function(){
        return view('player.game.loading');
    })->name('game.loading');
    
});


Route::group(['prefix' => 'admin','namespace' => 'Admin'],function($router){

});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
