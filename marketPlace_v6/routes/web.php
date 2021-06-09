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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/model', function () {
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
    /*$user = \App\Models\User::find(43);
    $user->update([
        'name'=>'e rapaz',
        
    ]);*/
    //$user = \App\Models\User::find(4);
    //$loja = \App\Models\Store::find(1);

    //dd($user->store()->count());
    //dd($loja->products());
    //return $loja->products;

    /*$user = \App\Models\User::find(10);
    $store = $user->store()->create(
        [
            'name'=>'Loja teste',
            'description'=>'Loja teste de gessex',
            'mobile_phone'=>'xx-xxxxx',
            'phone'=>'xx-xxxxx',
            'slug'=>'loja-teste',
        ]);
        dd($store);*/

    /*$a = User::create([
        'name' => 'a',
        'email' => 'b',
        'email_verified_at' => now(),
        'password' => bcrypt('123'),
        'remember_token' => Str::random(10),
        ]);
    dd($a);*/
    /*$user = \App\Models\User::find(41);
      $store=$user->store()->create(
            [
                'name' => 'Loja teste',
                'description' => 'Loja teste de gessex',
                'mobile_phone' => 'xx-xxxxx',
                'phone' => 'xx-xxxxx',
                'slug' => 'loja-teste',
            ]
        );*/
    /*$store = \App\Models\Store::find(42);
       $prod =  $store->products()->create([
            'name'=>'test',
            'description'=>'ok',
            'body'=>'bode',
            'price'=>10.20,
            'slug'=>'test-ok',
        ]);*/
    //dd($prod);
    //dd($store);
    /* \App\Models\Category::create([
            'name'=>'Games',
            'description'=>null,
            'slug'=>'games',
        ]);
    \App\Models\Category::create([
        'name' => 'node',
        'description' => null,
        'slug' => 'kkk',
    ]);
    return \App\Models\Category::all();*/
    $prod = \App\Models\Product::find(57);

    // dd($prod->categories()->attach([1]));
    // dd($prod->categories()->detach([1]));
    //dd($prod->categories()->sync([2]));
    return $prod->categories;
});

Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::prefix('stores')->name('stores.')->group(function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');


    });
    Route::resource('products', 'ProductsController');
});
