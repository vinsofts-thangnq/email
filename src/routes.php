<?php

Route::get('email','Thangbeo\Email\EmailController@index');
Route::get('add','Thangbeo\Email\EmailController@add');
Route::post('creat','Thangbeo\Email\EmailController@store');
Route::get('edit/{id}','Thangbeo\Email\EmailController@edit');
Route::post('update/{id}','Thangbeo\Email\EmailController@update');
Route::get('delete/{id}','Thangbeo\Email\EmailController@delete');


