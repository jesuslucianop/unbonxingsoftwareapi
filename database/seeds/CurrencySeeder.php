<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')->insert([
            'currency' => Str::random(10),
            'acronym' => Str::random(10),
            'remember_token' => bcrypt('password'),
          
        ]);
    }
}
