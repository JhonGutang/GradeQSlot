<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    public function run()
    {
        // Define the documents you want to create
        DB::table('documents')->insert([
            ['name' => 'TOR'],
            ['name' => 'DIPLOMA'],
            ['name' => 'OTHERS'],
            ['name' => 'FORM 137'],
            ['name' => 'GOOD MORAL'],
        ]);
    }
}
