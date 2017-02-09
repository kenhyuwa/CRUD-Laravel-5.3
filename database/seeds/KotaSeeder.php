<?php

use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kota::insert([
        	[
        		'nama_kota' => 'magetan'
        	],
        	[
        		'nama_kota' => 'surakarta'
        	],
        	[
        		'nama_kota' => 'yogyakarta'
        	]
        ]);
    }
}
