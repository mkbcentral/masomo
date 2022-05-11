<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'admin'],
            ['name'=>'Student'],
            ['name'=>'Teacher'],
            ['name'=>'Promotor'],
            ['name'=>'Gouvement'],
        ];
        Role::insert($data);
    }
}
