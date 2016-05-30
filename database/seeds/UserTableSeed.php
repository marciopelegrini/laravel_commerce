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
            'password' => Hash::make('123'),
            'is_admin' => 1,
            'cep' => "17013230",
            'address' => "Rua teste",
            'number' => "200",
            'district' => "Redentor",
            'city' => "Bauru",
            'state' => "SP",
        ]);

        factory('CodeCommerce\User')->create([
            'name' => 'Juca',
            'email' => 'juca@gmail.com',
            'password' => Hash::make('123'),
            'is_admin' => 0,
            'cep' => "45690000",
            'address' => "Rua teste",
            'number' => "200",
            'district' => "Centro",
            'city' => "Arealva",
            'state' => "RJ",
        ]);

        factory('CodeCommerce\User', 3)->create();
    }
}