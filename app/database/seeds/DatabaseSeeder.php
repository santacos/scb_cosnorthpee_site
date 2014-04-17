<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AllTableSeeder');
	}

}

class AllTableSeeder extends Seeder {
	public function run(){

		DB::table('users')->delete();
		DB::table('coperate_titles')->delete();
//USER
		/*User::create(array(	'username' => 'testMan',
							'email' => 'test_man@hotmail.com',
							'password' => '123321',
							'firstname' => 'Test',
							'lastname' => 'Man',
							'mobilephonenumber' => '012343210',
							'confirmation_code' => 'X8d7SCk0dW4M13dS',
							'confirmed' => true,
							'status' => 0,
							'facebook_uid' => '1234567890'));*/

		/*User::create(array(	'username' => 'testMan2',
							'email' => 'test_man2@hotmail.com',
							'password' => '112233',
							'firstname' => 'Test2',
							'lastname' => 'Man2',
							'mobilephonenumber' => '024686420',
							'confirmation_code' => 'AABBCCDDeeffgghh',
							'confirmed' => false,
							'status' => 4,
							'facebook_uid' => '1122334455'));*/
//COPERATE TITLE
		CoperateTitle::create(array(	'name' => 'officer1',
							'SLA' => 30
							));
		CoperateTitle::create(array(	'name' => 'officer2',
							'SLA' => 45
							));
		CoperateTitle::create(array(	'name' => 'officer3',
							'SLA' => 60
							));
/*
		::create(array(	'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',));
*/
	}
}