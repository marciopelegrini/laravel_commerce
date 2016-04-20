<?php

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-04-19
 * Time: 13:24
 */

use Illuminate\Database\Seeder;
use CodeCommerce\User;

class UserTableSeed extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        factory('CodeCommerce\User')->create([
            'name' => 'Marcio',
            'email' => 'marcio.pelegrini@gmail.com',
            'password' => Hash::make('mar68012')
        ]);

        factory('CodeCommerce\User', 10)->create();
    }
}