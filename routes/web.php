<?php


Route::get('/', 'ClientController@index');
Route::post('/addClient', 'ClientController@addClient');
Route::post('/searchName', 'ClientController@searchName');
Route::post('/searchSurame', 'ClientController@searchSurname');
Route::post('/searchPhone', 'ClientController@searchPhone');
Route::get('/delClient/{id}', 'ClientController@delClient');
Route::post('/editClient/', 'ClientController@editClient');
