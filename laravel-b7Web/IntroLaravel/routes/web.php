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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/config')->group(function(){
    Route::get('/',function(){
        return view('config');
    });
    Route::get('info',function(){
        echo "Configurações INFO 2";
    });
    Route::get('permissoes',function(){
        echo "Configuracoes permissoes 2";
    });
});

Route::fallback(function(){
    return view('404');
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
