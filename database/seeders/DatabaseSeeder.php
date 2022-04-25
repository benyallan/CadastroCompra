<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(['super' => true]);
        User::factory(9)->create();
        Order::factory(10)->create();
        $this->call([PermissionSeeder::class,]);
    }
}
