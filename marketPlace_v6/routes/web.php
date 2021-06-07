<?php

use App\Models\User;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/model',function(){
    //$products = \App\Models\Product::all();
    // return $products;
    //$user = new \App\Models\User();
    //$user = \App\Models\User::find(1);
    //$user->name = 'User teste editado';
    //$user->email = 'teste@gmail.com';
    //$user->save();
    //$user->password = bcrypt('12345678');
    // return \App\Models\User::all();
    //return \App\Models\User::find(3);
    //return \App\Models\User::where('name','LIKE', '%Mr%')->get();
    /*$user = \App\Models\User::create([
    'name' =>'gessex',
    'email'=>'gesse@gmail.com',
    'password'=>bcrypt('123'),
 ]);*/
    //dd($user);
    $user = \App\Models\User::find(43);
    $user->update([
        'name'=>'e rapaz',
        
    ]);
  //  dd($user);
 return \App\Models\User::all();
});


