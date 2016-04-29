<?php

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-04-19
 * Time: 13:24
 */

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    public function run(){
        DB::table('products')->truncate();
        factory('CodeCommerce\Product',40)->create();
    }
}