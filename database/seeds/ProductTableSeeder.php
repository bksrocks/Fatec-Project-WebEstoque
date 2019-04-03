<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classificationsIDs = DB::table('classifications')->select('id')->get();
        $providersIDs = DB::table('providers')->select('id')->get();
        $faker = Faker\Factory::create();
        for($i=1; $i<=40; $i++) {
            DB::table('products')->insert( [
                'descricao' => $faker->text(100),
                'qtd' => $faker->randomNumber(),
                'prc_venda' => $faker->randomFloat(2, 100, 200),
                'prc_compra' => $faker->randomFloat(2, 100, 200),
                'classifications_id' => rand(1, 100),
                'providers_id' => rand(1, 10),
                'created_at' => Carbon\Carbon::now(),
                ] );
            }
    }
}
