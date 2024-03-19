<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            ['name' => 'AFC North'],
            ['name' => 'AFC South'],
            ['name' => 'AFC East'],
            ['name' => 'AFC West'],
            ['name' => 'NFC North'],
            ['name' => 'NFC South'],
            ['name' => 'NFC East'],
            ['name' => 'NFC West']
        ]);
    }
    
}
