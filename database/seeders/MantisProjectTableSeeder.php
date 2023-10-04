<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantisProjectTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mantis_project_table')->insert([
            [
                'id' => 1,
                'name' => 'Projet 1 CLI',
                'status' => 10,
                'enabled' => 1,
                'view_state' => 50,
                'access_min' => 10,
                'file_path' => '',
                'description' => 'Description du projet 1 CLI',
                'category_id' => 1,
                'inherit_global' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Projet 2 CLI',
                'status' => 10,
                'enabled' => 1,
                'view_state' => 50,
                'access_min' => 10,
                'file_path' => '',
                'description' => 'Description du projet 2 CLI',
                'category_id' => 1,
                'inherit_global' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Projet 3 CLI',
                'status' => 10,
                'enabled' => 1,
                'view_state' => 50,
                'access_min' => 10,
                'file_path' => '',
                'description' => 'Description du projet 3 CLI',
                'category_id' => 1,
                'inherit_global' => 1,
            ],
        ]);
    }
}
