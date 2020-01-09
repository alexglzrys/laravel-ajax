<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fabricar 50 productos falsos en la base de datos
        factory(Product::class, 50)->create();
    }
}
