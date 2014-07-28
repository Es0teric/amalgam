<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Jenssegers\Mongodb\Connection;
use Jenssegers\Mongodb\Schema\Blueprint;

class MangaTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		//MangaData::collection()->push();
		var_dump(MangaData::first());

		if(MangaData::first() == null)
		{
			
			foreach(range(1, 10) as $index)
			{

				$data = new MangaData;

				$data['id'] = $index;
				$data['name'] = $faker->name;
				$data['genre'] = $faker->name;

				$data->save();

				//var_dump($data);
			}

			$this->command->info('Mongo Seeded!');
		}

	}

}