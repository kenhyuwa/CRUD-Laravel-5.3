<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
        	[
        		'nama_role' => 'manager',
        		'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        	],
        	[
        		'nama_role' => 'administrator',
        		'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        	],
        	[
        		'nama_role' => 'staff',
        		'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        	],
        ]);
    }
}
