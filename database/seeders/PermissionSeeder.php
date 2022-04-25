<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['permission'=>'user.index'],
            ['permission'=>'user.store'],
            ['permission'=>'user.update'],
            ['permission'=>'user.show'],
            ['permission'=>'user.delete'],
            ['permission'=>'user.deleteAll'],

            ['permission'=>'client.index'],
            ['permission'=>'client.store'],
            ['permission'=>'client.update'],
            ['permission'=>'client.show'],
            ['permission'=>'client.delete'],
            ['permission'=>'client.deleteAll'],

            ['permission'=>'product.index'],
            ['permission'=>'product.store'],
            ['permission'=>'product.update'],
            ['permission'=>'product.show'],
            ['permission'=>'product.delete'],
            ['permission'=>'product.deleteAll'],

            ['permission'=>'order.index'],
            ['permission'=>'order.store'],
            ['permission'=>'order.update'],
            ['permission'=>'order.show'],
            ['permission'=>'order.delete'],
            ['permission'=>'order.deleteAll']
        ];
        DB::table('permissions')->insert($permissions);
    }
}
