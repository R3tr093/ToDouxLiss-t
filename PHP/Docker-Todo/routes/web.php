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

Route::get('/TODO', function () {
    return view('Dashboard.TODO.todo');
});

Route::get('/Project', function () {
    return view('Dashboard.Project.project');
});




/* LOG CONTROLLER */

Route::get('/Log','logController@log');

Route::get('/profile','logController@profile');

Route::resource('posts', 'PostController');