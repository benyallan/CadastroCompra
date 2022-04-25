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

            ['permission'=>'client.index'],
            ['permission'=>'client.store'],
            ['permission'=>'client.update'],
            ['permission'=>'client.show'],

            ['permission'=>'product.index'],
            ['permission'=>'product.store'],
            ['permission'=>'product.update'],
            ['permission'=>'product.show'],

            ['permission'=>'order.index'],
            ['permission'=>'order.store'],
            ['permission'=>'order.update'],
            ['permission'=>'order.show']
        ];
        DB::table('permissions')->insert($permissions);
    }
}
