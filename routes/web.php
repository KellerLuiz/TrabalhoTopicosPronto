<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mensagens', 'MensagensController@index');
Route::get('/mensagens/create', 'MensagensController@create');
Route::post('/mensagens', 'MensagensController@store');
Route::get('/mensagens/{id}', 'MensagensController@show');
Route::get('/mensagens/{id}/edit', 'MensagensController@edit');
Route::put('/mensagens/{id}', 'MensagensController@update');
Route::delete('/mensagens/{id}', 'MensagensController@destroy');
Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');