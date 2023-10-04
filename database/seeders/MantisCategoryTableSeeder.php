<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantisCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mantis_category_table')->insert([
            [
                'id' => 1,
                'project_id' => 0,
                'user_id' => 0,
                'name' => 'General',
                'status' => 0,
            ],
            [
                'id' => 2,
                'project_id' => 0,
                'user_id' => 0,
                'name' => 'Bug',
                'status' => 0,
            ],
            [
                'id' => 3,
                'project_id' => 0,
                'user_id' => 0,
                'name' => 'Amélioration',
                'status' => 0,
            ],
            [
                'id' => 4,
                'project_id' => 0,
                'user_id' => 0,
                'name' => 'Mise en page',
                'status' => 0,
            ],
        ]);
    }
}
