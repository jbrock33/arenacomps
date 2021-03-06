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

Route::get('', ['as' => 'index', 'uses' => 'IndexController@getComps']);
Route::get('player/{player_id}', ['as' => 'player', 'uses' => 'IndexController@getPlayer']);
Route::get('stats', ['as' => 'stats', 'uses' => 'IndexController@getStats']);
Route::get('leaderboard', ['as' => 'leaderboard', 'uses' => 'IndexController@getLeaderboard']);
Route::get('comps', ['as' => 'comps', 'uses' => 'IndexController@getComps']);
Route::post('set-options', ['as' => 'set-options', 'uses' => 'IndexController@postSetOptions']);
Route::get('activity/{id?}', ['as' => 'activity', 'uses' => 'IndexController@getActivity']);
Route::get('comp/{id}', ['as' => 'comp', 'uses' => 'IndexController@getComp']);
Route::get('contact', ['as' => 'contact', 'uses' => 'IndexController@getContact']);
Route::get('faq', ['as' => 'faq', 'uses' => 'IndexController@getFaq']);
//Route::get('test', ['as' => 'test', 'uses' => 'IndexController@getTest']);
