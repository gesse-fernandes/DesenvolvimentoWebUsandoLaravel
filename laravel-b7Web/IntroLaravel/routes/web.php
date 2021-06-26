<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController');


Route::prefix('/config')->group(function(){
    Route::get('/','Admin\ConfigController@index');
    Route::post('/','Admin\ConfigController@index');
    Route::get('info','Admin\ConfigController@info');
    Route::get('permissoes','Admin\ConfigController@permissoes');
});

Route::fallback(function(){
    return view('404');
});
Route::prefix('/tarefas')->group(function(){
    Route::get('/','TarefasController@list')->name('tarefas.list');

    Route::get('add', 'TarefasController@add')->name('tarefas.add');
    Route::post('add', 'TarefasController@addAction');

    Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit');
    Route::post('edit/{id}', 'TarefasController@editAction');

    Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del');

    Route::get('marcar/{id}', 'TarefasController@done')->name('tarefas.done');

});

/*
Route::get('/config',function(){
    $link = route('info');
    echo "Link". $link;
    return redirect()->route('permissoes');
   return view('config');
});
Route::get('/config/info',function(){
    return "configurações info";
})->name('info');
Route::get('config/permissoes',function(){
    return "configuracoes permission";
})->name('permissoes');*/

//Auth::routes();


