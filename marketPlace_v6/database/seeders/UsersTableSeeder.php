<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;

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
        User::factory(40)->create();
    }
}
