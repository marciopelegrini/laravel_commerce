<?php

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-04-19
 * Time: 13:24
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
use Faker\Factory as Faker;

class CategoryTableSeed extends Seeder
{
    public function run(){
        DB::table('categories')->truncate();
        factory('CodeCommerce\Category',15)->create();
    }

}