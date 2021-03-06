<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Models\Store::all();
        foreach($stores as $store)
        {
            $store->products()->save(Product::factory(\App\Models\Product::class)->make());
        }
    }
}
