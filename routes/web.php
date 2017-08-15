
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'Welcome@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/iklan', 'IklanController@index')->name('home');

Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\LoginController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{provider}', 'Auth\LoginController@handleProviderCallback');

Route::get('/category/{slug}', 'Category@slugcategory');
Route::get('/{slug}','Book@detailbook');