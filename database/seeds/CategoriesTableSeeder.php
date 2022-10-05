<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = 9;
        $item = array(
            "food",
            "necessities",
            "transportation",
            "social",
            "hobby",
            "rent",
            "utility",
            "communication",
            "other"
        );
        
        for ($i = 0; $i < $number; $i++) {
            DB::table('categories')->insert(
            [
            'id' => $i+1,
            'item' => $item[$i],
            ]);
        }
        
        /*
        for ($i = 0; $i < $number; $i++)
        
        DB::table('categories')->insert(
        [
            'id' => '1',
            'item' => "food",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '2',
            'item' => "necessities",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '3',
            'item' => "transportation",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '4',
            'item' => "social",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '5',
            'item' => "hobby",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '6',
            'item' => "rent",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '7',
            'item' => "utility",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '8',
            'item' => "communication",
        ]);
        
        DB::table('categories')->insert(
        [
            'id' => '9',
            'item' => "other",
        ]);
        */
    }
}
