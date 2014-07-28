<?php

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Connection;
use Jenssegers\Mongodb\Schema\Blueprint;
use Jenssegers\Mongodb\Model;
use \MangaData;

class CreateMangadbMongo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		if( !Moloquent::hasTable('mangadb') )
		{
			MangaData::create('mangadb', function(Blueprint $collection)
			{
				/*$collection->index('id');
				$collection->index('name');
				$collection->index('genre');*/
				$collection->index('i');
				$collection->index('a');
				$collection->index('h');
				$collection->index('im');
				$collection->index('ld');
				$collection->index('s');
				$collection->index('t');
				$collection->index('g');
				$collection->index('d');
				$collection->timestamps();

			});

			$this->command->info('Mangadb created!');
		}
		
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Moloquent::dropTable('mangadb');
	}

}
