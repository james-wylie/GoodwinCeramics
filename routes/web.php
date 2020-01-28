<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/vue/{vue_capture}', function () {
    return view('vue.index');
})->where('vue_capture', '[\/\w\.-]*');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getproducts', 'ProductController@index');
Route::get('/editproducts/{product}', 'ProductController@show')->name('{product}');
