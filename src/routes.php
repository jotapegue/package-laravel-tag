<?php

Route::get('tags', 'Jotapegue\Tags\Controllers\TagsController@index')->name('tags.index');
Route::get('tags/create', 'Jotapegue\Tags\Controllers\TagsController@create')->name('tags.create');
Route::post('tags/store', 'Jotapegue\Tags\Controllers\TagsController@store')->name('tags.store');
Route::get('tags/edit/{id}', 'Jotapegue\Tags\Controllers\TagsController@edit')->name('tags.edit');
Route::get('tags/show/{id}', 'Jotapegue\Tags\Controllers\TagsController@show')->name('tags.show');
Route::put('tags/update/{id}', 'Jotapegue\Tags\Controllers\TagsController@update')->name('tags.update');
Route::delete('tags/destroy/{id}', 'Jotapegue\Tags\Controllers\TagsController@destroy')->name('tags.destroy');
