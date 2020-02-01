<?php



Route::get('/georgie', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('clientwelcome');
});

Auth::routes();

Route::get('/vue/{vue_capture}', function () {
    return view('vue.index');
})->where('vue_capture', '[\/\w\.-]*');


Route::post('/create', 'ProductController@store')->name('create');
Route::get('/getproducts', 'ProductController@index');
Route::get('/editproducts/{product}/show', 'ProductController@show')->name('{product}');
Route::get('/viewproduct/{product}/show', 'ProductController@show')->name('view{product}');
Route::patch('/editproducts/{product}/', 'ProductController@update')->name('profile.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/remove/{product}', 'ProductController@destroy');


