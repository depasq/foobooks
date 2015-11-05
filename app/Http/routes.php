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

Route::get('/', function () {
    return view('welcome');
});

//implicit routing
#Route::controller('/books', 'BookController');

#Explicit Routes
Route::get('/books', 'BookController@getIndex');
Route::get('books/show/{title?}', 'BookController@getShow');
Route::get('books/create', 'BookController@getCreate');
Route::get('books/create', 'BookController@postCreate');

//
// Route::get('practice', function () {
//
//     echo config('app.url');
// });


Route::get('/practice', function () {

    $data = array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';
});

Route::get('/practice2', function () {

    $random = new Random();
    return $random->getRandomString(8);

});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//explicit routing
// Route::get('/books', 'BookController@getIndex');
// Route::get('/books/show/{title}', 'BookController@getShow');
// Route::get('books/create', 'BookController@getCreate');
// Route::get('books/create', 'BookController@postCreate');

//Routing test * note never do all of this html coding in routes *
// Route::get('/books/create', function () {
//     $view = '<form method="POST" action="/books/create">';
//     $view .= csrf_field();
//     $view .= '<input type="text" name="title">';
//     $view .= '<input type="submit">';
//     $view .= '<form>';
//
//     return $view;
// });
// Route::post('/books/create', function () {
//     return 'Process the creation of a new book: '.$_POST['title'];
// });
