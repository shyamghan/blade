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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/pages/typography', function () {
    return view('pages.typography', ['page' => 'typography']);
});
Route::get('/pages/helper-classes', function () {
    return view('pages.helper-classes', ['page' => 'helper-classes']);
});
Route::get('/pages/widgets/cards/basic', function () {
    return view('pages.widgets.cards.basic', ['widgets' => 'basic']);
});
Route::get('/pages/widgets/cards/colored', function () {
    return view('pages.widgets.cards.colored', ['widgets' => 'colored']);
});
Route::get('/pages/widgets/cards/no-header', function () {
    return view('pages.widgets.cards.no-header', ['widgets' => 'no-header']);
});
Route::get('/pages/examples/sign-in', function () {
    return view('pages.examples.sign-in');
});
Route::get('/pages/examples/sign-up', function () {
    return view('pages.examples.sign-up');
});
Route::get('/logout', function(){

	  Auth::logout();
  return redirect('login');
});

Route::get('profile','HomeController@uploadfile');
Route::post('/store','HomeController@store');