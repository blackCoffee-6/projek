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
            'username' => 'Admin',
            'role' => 'Admin',
            'bidang_id' => NULL,
            'phone' => '0812345678',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admins'),
            'status' => 'active'
        ]);

        DB::table('users')->insert([
            'username' => 'Approval',
            'bidang_id' => NULL,
            'role' => 'Approval',
            'phone' => '0812345678',
            'email' => 'approval@approval.com',
            'password' => bcrypt('approval'),
            'status' => 'active'
        ]);
    }
}
