<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  \DB::table('users')->insert(
              [
                  'name' => 'Administador',
                  'email' => 'admin@admin.com',
                  'email_verified_at' => now(),
                  'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                  'remember_token' => 'okkokokoko',
              ]
              );*/
        ///factory(\App\Models\User::class, 40)->create();
        User::factory(40)->create()->each(function($user){
            
            $user->store()->save(Store::factory(\App\Models\Store::class)->make());
        });
       /* HasFactory::factory(\App\Models\User::class,40)->create()->each(function($user){
            $user->store()->save(HasFactory::factory(\App\Models\Store::class)->make());
        });*/
    }
}
