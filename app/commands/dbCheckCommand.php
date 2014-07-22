<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Database;

class dbCheckCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'check:mangadb';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Checks database if sentry2 and other dependencies are installed (v0.1)';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		if(Schema::hasTable('users'))
		{
			$this->info('Sentry2 installed!');
		}
		else
		{
			$this->error('Sentry2 not installed, please run migration and seeding');
		}

		if(Schema::hasTable('invitations'))
		{
			$this->info('invitations package installed!');
		}
		else
		{
			$this->info('invitaions package not installed but can do without for now...');
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('example', InputArgument::OPTIONAL, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
