<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        DB::table('cotacao')->insert([
            'from' => 'GRU',
            'to' => 'BRC',
            'price' => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'GRU',
            'to' => 'SCL',
            'price' => '18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'GRU',
            'to' => 'ORL',
            'price' => '56',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'GRU',
            'to' => 'CDG',
            'price' => '75',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'SCL',
            'to' => 'ORL',
            'price' => '20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'BRC',
            'to' => 'SCL',
            'price' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cotacao')->insert([
            'from' => 'ORL',
            'to' => 'CDG',
            'price' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
