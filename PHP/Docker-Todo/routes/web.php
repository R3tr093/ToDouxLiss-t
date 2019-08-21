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

Route::resource('Dashboard', 'PostController');