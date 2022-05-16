<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::first();
        User::create([
            'name'=>'root6',
            'email'=>'default6@app.dev',
            'password'=>Hash::make('password'),
            'role_id'=>$role->id
        ]);
    }
}
