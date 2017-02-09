<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::insert([
        	[
        		'nama' => 'onphpid',
	        	'jenis_kelamin' => 'laki-laki',
	        	'alamat' => 'magetan',
	        	'no_telp' => '085728778877',
	        	'user_id' => 1
        	],
        	[
        		'nama' => 'john doe',
	        	'jenis_kelamin' => 'laki-laki',
	        	'alamat' => 'solo',
	        	'no_telp' => '085728778899',
	        	'user_id' => 2
        	]
        ]);
    }
}
