<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Appel au controller nommé Kali ( Phase de test ) */

Route::get('/Test', 'Kali@sayHello'); 

Route::get('/Test2', 'Kali@sayHello2'); 

Route::get('/Test3', 'Kali@index'); 
 


/* Exemples d'appel d'une view depuis un dossier */

Route::get('/Form', function () {
    return view('Dashboard.Form.form');
});





/* LOG CONTROLLER */

Route::get('/Log','logController@log');

Route::get('/profile','logController@profile');




Route::get('Dashboard/{id}/Item', 'PostController@Item');
Route::get('Dashboard/{id}/Item2', 'PostController@Item2');
Route::get('Dashboard/{id}/Item3', 'PostController@Item3');
Route::get('Dashboard/{id}/Item4', 'PostController@Item4');
Route::get('Dashboard/{id}/Item5', 'PostController@Item5');
Route::get('Dashboard/{id}/Item6', 'PostController@Item6');
Route::get('Dashboard/{id}/Item7', 'PostController@Item7');
Route::get('Dashboard/{id}/Item8', 'PostController@Item8');
Route::get('Dashboard/{id}/Item9', 'PostController@Item9');
Route::get('Dashboard/{id}/Item10', 'PostController@Item10');
Route::get('Dashboard/{id}/Item11', 'PostController@Item11');
Route::get('Dashboard/{id}/Item12', 'PostController@Item12');
Route::get('Dashboard/{id}/Item13', 'PostController@Item13');
Route::get('Dashboard/{id}/Item14', 'PostController@Item14');
Route::get('Dashboard/{id}/Item15', 'PostController@Item15');


Route::resource('Dashboard', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
