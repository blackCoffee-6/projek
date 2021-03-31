<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidangs')->insert([
            'name' => 'R&D'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'Produksi'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'Pemasaran'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'QC'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'Teknik'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'SCM'
        ]);
        DB::table('bidangs')->insert([
            'name' => 'Pengadaan'
        ]);
    }
}
