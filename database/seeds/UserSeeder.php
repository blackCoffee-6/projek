<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'role' => 'admin',
            'bidang_id' => '8',
            'phone' => '0812345678',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admins')
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'role' => 'staff',
            'bidang_id' => '5',
            'phone' => '0898765432',
            'email' => 'user@user.com',
            'password' => bcrypt('users')
        ]);

        DB::table('users')->insert([
            'username' => 'Approval',
            'role' => 'approval',
            'bidang_id' => '9',
            'phone' => '0812345678',
            'email' => 'approval@approval.com',
            'password' => bcrypt('aprrovals')
        ]);
    }
}
