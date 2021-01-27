<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
    //return view('welcome');
//});
/*Route::get('/', 'WelcomeController@index');
Route::get('contact','WelcomeController@contact');
Route::get('about', 'AboutController@index');
//Route::get('contact','WelcomeController@contact');
Route::get('despre', 'PagesController@despre');
Route::get('despre', 'PagesController@despre');
Route::get('/', 'PagesController@index');
*/

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function(){
Route::get('/', 'ProductController@index');
Route::resource('products', 'TaskController');


Route::resource('products', 'ProductController');
});

Route::get('/', 'ProductsController@index'); //afisare pagina de start
Route::get('cart', 'ProductsController@cart'); //cos
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');//adaug in cos
Route::patch('update-cart', 'ProductsController@update'); //modific cos
Route::delete('remove-from-cart', 'ProductsController@remove');//sterg din cos
?>





