<?php

use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=1; $i<=10; $i++) {
        DB::table('classifications')->insert( [
            'nome' => $faker->company(),
            'created_at' => \Carbon\Carbon::now(),
        ] );
    }
    }
}
