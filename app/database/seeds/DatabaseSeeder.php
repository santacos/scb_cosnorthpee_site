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
		DB::table('depts')->delete();
		DB::table('positions')->delete();
		DB::table('locations')->delete();

//USER
		User::create(array(	'username' => 'testMan',
							'email' => 'test_man@hotmail.com',
							'password' => '123321',
							'firstname' => 'Test',
							'lastname' => 'Man',
							'mobilephonenumber' => '012343210',
							'confirmation_code' => 'X8d7SCk0dW4M13dS',
							'confirmed' => true,
							'status' => 0,
							'facebook_uid' => '1234567890'));

		User::create(array(	'username' => 'testMan2',
							'email' => 'test_man2@hotmail.com',
							'password' => '112233',
							'firstname' => 'Test2',
							'lastname' => 'Man2',
							'mobilephonenumber' => '024686420',
							'confirmation_code' => 'AABBCCDDeeffgghh',
							'confirmed' => false,
							'status' => 4,
							'facebook_uid' => '1122334455'));
		User::create(array(	'username' => 'testMan3',
							'email' => 'test_man3@hotmail.com',
							'password' => '333333',
							'firstname' => 'Test3',
							'lastname' => 'Man3',
							'mobilephonenumber' => '033333333',
							'confirmation_code' => 'threethree',
							'confirmed' => false,
							'status' => 1,
							'facebook_uid' => '3333333333333'));
		User::create(array(	'username' => 'testMan4',
							'email' => 'test_man4@hotmail.com',
							'password' => '444444',
							'firstname' => 'Test4',
							'lastname' => 'Man4',
							'mobilephonenumber' => '044444444',
							'confirmation_code' => 'fourfour',
							'confirmed' => true,
							'status' => 2,
							'facebook_uid' => '444444444444'));

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

//DEPT
		/*Dept::create(array(	'name' => 'department1',
							'employee_hrbp_user_id' => User::first(13),
							'employee_recruiter_user_id' => User::first(15)
							));
		Dept::create(array(	'name' => 'department2',
							'employee_hrbp_user_id' => 0,
							'employee_recruiter_user_id' => 3
							));
		Dept::create(array(	'name' => 'department3',
							'employee_hrbp_user_id' => 1,
							'employee_recruiter_user_id' => 3
							));
		Dept::create(array(	'name' => 'department4',
							'employee_hrbp_user_id' => 1,
							'employee_recruiter_user_id' => 2
							));*/

//POSITION
		Position::create(array(	'name' => 'position1'
							));
		Position::create(array(	'name' => 'position2'
							));
		Position::create(array(	'name' => 'position3'
							));
		Position::create(array(	'name' => 'position4'
							));
		Position::create(array(	'name' => 'position5'
							));

//LOCATION
		Location::create(array(	'name' => 'location1'
							));
		Location::create(array(	'name' => 'location2'
							));
		Location::create(array(	'name' => 'location3'
							));
		Location::create(array(	'name' => 'location4'
							));
		Location::create(array(	'name' => 'location5'
							));
		Location::create(array(	'name' => 'location6'
							));
		Location::create(array(	'name' => 'location7'
							));
		Location::create(array(	'name' => 'location8'
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