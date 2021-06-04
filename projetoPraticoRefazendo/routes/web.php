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

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=> 'site.login', 'uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::get('/login/cadastrar',['as'=>'site.login.cadastrar','uses'=> 'Site\UsuarioController@index']);

Route::post('/login/adicionar',['as'=>'site.login.adicionar','uses'=>'Site\UsuarioController@adicionar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);
Route::group(['middleware' => 'auth'],function(){
    Route::get('/admin/produtos',['as'=>'admin.produtos','uses'=>'Admin\ProdutoController@index']);
    Route::get('/admin/produtos/adicionar',['as'=>'admin.produtos.adicionar','uses'=>'Admin\ProdutoController@adicionar']);
    Route::post('admin/produtos/salvar',['as'=>'admin.produtos.salvar','uses'=>'Admin\ProdutoController@salvar']);

    Route::get('admin/produtos/editar/{id}',['as'=>'admin.produtos.editar','uses'=>'Admin\ProdutoController@editar']);
});
