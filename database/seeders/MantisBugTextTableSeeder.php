<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantisBugTextTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mantis_bug_text_table')->insert([
            [
                'id' => 1,
                'description' => 'Après clic sur rapports, le système affiche une page blanche.',
                'steps_to_reproduce' => '-Etape 1\r\n-Etape 2\r\n-Etape 3',
                'additional_information' => '',
            ],

        ]);
    }
}
