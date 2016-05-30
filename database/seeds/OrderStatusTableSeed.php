<?php

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-04-19
 * Time: 13:24
 */

use Illuminate\Database\Seeder;

class OrderStatusTableSeed extends Seeder
{
    public function run()
    {
        DB::table('order_status')->truncate();

        \CodeCommerce\OrderStatus::create([
            'name' => "Aguardando pagamento",
        ]);
        \CodeCommerce\OrderStatus::create([

            'name' => "Em análise",
        ]);
        \CodeCommerce\OrderStatus::create([
            
            'name' => "Paga",
        ]);
    }
}