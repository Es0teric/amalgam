<?php

class SentryUserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if(Schema::hasTable('users'))
		{

			//seed table with ghost's info
			Sentry::createUser(array(
				'email' => 'ghost@amalgam.dev',
				'password' => 'ghost123',
				'activated' => true,
				'permissions' => array(
					'user.create' => 1,
					'user.delete' => 1,
					'user.view' => 1,
					'user.update' => 1
				)
			));

			//seed table with kyuu's user info
			Sentry::createUser(array(
				'email' => 'kyuu@amalgam.dev',
				'password' => 'apu123',
				'activated' => true,
				'permissions' => array(
					'user.create' => 1,
					'user.delete' => 1,
					'user.view' => 1,
					'user.update' => 1
				)
			));

			//display success info
			$this->command->info('User table seeded!');

		}
		else
		{
			//user table doesnt exist
			$this->command->error('Please migrate sentry2 first!');
		}
	}

}
