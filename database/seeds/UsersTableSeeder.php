<?php

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
        $userCredentials = [
            'surname' => 'Dado',
            'other_names' => 'John Doe',
            'email' => 'admin@thrift.com',
            'user_role' => 'admin',
            'phone_number' => '2347038602624',
            'address' => 'Abuja',
            'password' => 'secret',
            'account_number' => '123457890',
            'user_type' => 'admin',
            'slug' => 'admin',
        ];

        $superAdmin = Sentinel::registerAndActivate($userCredentials, true);
	    $role = Sentinel::findRoleBySlug('admin');
	    $role->users()->attach($superAdmin);
    }
}
