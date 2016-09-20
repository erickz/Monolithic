<?php

class UsersTableSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$rows = array(
			[
				'api_token' => str_random(60),
				'email'			=> 'teste@teste.com'
				'name'			=> 'Testador',
				'password'	=> 'teste',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]
		);

			\DB::table('users')->insert($rows);
	}
}
