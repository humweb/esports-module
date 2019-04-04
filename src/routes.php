<?php
/**
 * Games
 */
Route::get('admin/games', [
    'as' => 'admin.get.games.index',
    'uses' => 'Admin\GamesController@getIndex'
]);

Route::get('admin/games/create', [
    'as' => 'admin.get.games.create',
    'uses' => 'Admin\GamesController@getCreate'
]);
Route::post('admin/games/create', [
    'as' => 'admin.post.games.create',
    'uses' => 'Admin\GamesController@postCreate'
]);

Route::get('admin/games/edit/{id}', [
    'as' => 'admin.get.games.edit',
    'uses' => 'Admin\GamesController@getEdit'
]);
Route::post('admin/games/edit/{id}', [
    'as' => 'admin.post.games.edit',
    'uses' => 'Admin\GamesController@postEdit'
]);

Route::any('admin/games/delete/{id}', [
    'as' => 'admin.post.games.delete',
    'uses' => 'Admin\GamesController@postDelete'
]);

/**
 * Maps
 */
Route::get('admin/maps', [
    'as' => 'admin.get.maps.index',
    'uses' => 'Admin\MapsController@getIndex'
]);

Route::get('admin/maps/create', [
    'as' => 'admin.get.maps.create',
    'uses' => 'Admin\MapsController@getCreate'
]);
Route::post('admin/maps/create', [
    'as' => 'admin.post.maps.create',
    'uses' => 'Admin\MapsController@postCreate'
]);

Route::get('admin/maps/edit/{id}', [
    'as' => 'admin.get.maps.edit',
    'uses' => 'Admin\MapsController@getEdit'
]);
Route::post('admin/maps/edit/{id}', [
    'as' => 'admin.post.maps.edit',
    'uses' => 'Admin\MapsController@postEdit'
]);

Route::any('admin/maps/delete/{id}', [
    'as' => 'admin.post.maps.delete',
    'uses' => 'Admin\MapsController@postDelete'
]);