<?php

use Illuminate\Database\Seeder;

class KendaraansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Kendaraan::truncate();
    	\App\Kendaraan::insert([
    		[
                'nama_kendaraan'  => 'mobil',
                'jenis_kendaraan' => 'roda empat',
                'buatan'          => 'jepang',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'user_id'         => 1
    		],
    		[
                'nama_kendaraan'  => 'motor',
                'jenis_kendaraan' => 'roda dua',
                'buatan'          => 'china',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'user_id'         => 2
    		],
    		[
                'nama_kendaraan'  => 'sepeda',
                'jenis_kendaraan' => 'roda dua',
                'buatan'          => 'china',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'user_id'         => 1
    		],
    	]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
