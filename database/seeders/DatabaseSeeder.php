<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('divisis')->insert(array(
            array(
                'nama_divisi' => 'Finance'
            ),
            array(
                'nama_divisi' => 'Procurement'
            )
        ,
            array(
                'nama_divisi' => 'Warehouse'
            )
        ,
            array(
                'nama_divisi' => 'Logistik'
            )
        ));
    }
}
