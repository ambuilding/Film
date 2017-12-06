<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films/search/{query}', function ($query) {
	return App\Film::search($query)->get();
    //return App\Film::search($query)->get()->first();
});
