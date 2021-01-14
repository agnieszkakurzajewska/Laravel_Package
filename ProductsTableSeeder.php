<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Recruitment\Products\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $product1 = new Product;
        $product1->id = 1;
        $product1->name = 'Produkt 1';
        $product1->amount = '4';
        $product1->save();

        $product2 = new Product;
        $product2->id = 2;
        $product2->name = 'Produkt 2';
        $product2->amount = '12';
        $product2->save();

        $product3 = new Product;
        $product3->id = 3;
        $product3->name = 'Produkt 5';
        $product3->amount = '0';
        $product3->save();

        $product4 = new Product;
        $product4->id = 4;
        $product4->name = 'Produkt 7';
        $product4->amount = '6';
        $product4->save();

        $product5 = new Product;
        $product5->id = 5;
        $product5->name = 'Produkt 8';
        $product5->amount = '2';
        $product5->save();
    }
}
