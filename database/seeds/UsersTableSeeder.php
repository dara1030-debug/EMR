<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'first_name' => 'Anne',
            'last_name' => 'Abdulazis',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Female',
        ]);
    }
}
