<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public run() {
        // $this->call(UserTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ClassificationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        }
}
