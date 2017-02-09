<?php

use Illuminate\Database\Seeder;

class RolesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\RoleUser::insert([
        	[
        		'user_id' => 1,
        		'role_id' => 1
        	],
        	[
        		'user_id' => 1,
        		'role_id' => 2
        	],
        	[
        		'user_id' => 1,
        		'role_id' => 3
        	],
        	[
        		'user_id' => 2,
        		'role_id' => 1
        	],
        ]);
    }
}
