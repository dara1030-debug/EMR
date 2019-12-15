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

        User::create([
            'role_id' => 2,
            'first_name' => 'Doky Carl',
            'last_name' => 'Schawrznerger',
            'email' => 'doctor@doctor.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
        ]);

        User::create([
            'role_id' => 3,
            'first_name' => 'Nars',
            'last_name' => 'Musky',
            'email' => 'nurse@nurse.com',
            'password' => bcrypt('password'),
            'gender' => 'Female',
        ]);
    }
}
