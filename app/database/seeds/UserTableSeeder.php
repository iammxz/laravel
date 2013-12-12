<?php

	Class UserTableSeeder extends Seeder 
	{
		public function run()
		{
			DB::table('users')->delete();

			User::create(
				array(
					'username'=>'hello',
					'password'=> Hash::make('test')
				)
			);

			User::create(
				array(
					'username'=>'tester',
					'password'=> Hash::make('hello')
				)
			);			
		}
	}