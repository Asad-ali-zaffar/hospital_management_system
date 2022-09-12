<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
Role,
User,
Permission
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::insert([
        ['name'=>'user','email'=>'user@gmail.com','password'=>'password'],
        ['name'=>'editor','email'=>'editor@gmail.com','password'=>'password'],
        ['name'=>'doctor','email'=>'doctor@gmail.com','password'=>'password'],
       ]);
       Role::insert([
        ['name'=>'Editor','slug'=>'editor'],
        ['name'=>'doctor','slug'=>'doctor'],
       ]);
       Permission::insert([
        ['name'=>'Add post','slug'=>'create-post'],
        ['name'=>'Delete Post','slug'=>'delete-post'],
       ]);
    }
}
