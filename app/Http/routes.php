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

Route::get('/', ['as' => 'root', function () {
  return view('index');
}]);

Route::get('contact', ['as' => 'contact', function()
{
  return view('contact');
}]);

Route::get('intro', ['as' => 'intro', function()
{
  return view('introduce');
}]);

Route::get('duadon', ['as' => 'duadon', function()
{
  return view('service');
}]);

Route::get('gallery', ['as' => 'gallery', function()
{
  return view('gallery');
}]);
Route::get('commingsoon', ['as' => 'commingsoon', function()
{
  return view('constructed_page');
}]);
