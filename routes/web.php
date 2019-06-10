<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mensagens', 'MensagensController@index');
Route::get('/atividades', 'AtividadeController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::group(['middleware' => 'auth'], function(){aq vai as routes}) igual o de baixo
Route::middleware(['auth'])->group(function () {
    Route::get('/mensagens/create', 'MensagensController@create');
    Route::post('/mensagens', 'MensagensController@store');
    Route::get('/mensagens/{id}', 'MensagensController@show');
    Route::get('/mensagens/{id}/edit', 'MensagensController@edit');
    Route::put('/mensagens/{id}', 'MensagensController@update');
    Route::get('/mensagens/{id}/delete','MensagensController@delete');
    Route::delete('/mensagens/{id}', 'MensagensController@destroy');

    Route::get('/atividades/create', 'AtividadeController@create');
    Route::post('/atividades', 'AtividadeController@store');
    Route::get('/atividades/{id}', 'AtividadeController@show');
    Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
    Route::put('/atividades/{id}', 'AtividadeController@update');
    Route::get('/atividades/{id}/delete','AtividadeController@delete');
    Route::delete('/atividades/{id}', 'AtividadeController@destroy');
});
Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
});
