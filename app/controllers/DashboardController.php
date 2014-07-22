<?php

class DashboardController extends BaseController {

	/*protected $layout = '';*/

	/**
	 * Invoked on page init
	 */
	public function __construct()
	{
		//construct
	}

	/**
	 * Shows dashboard view
	 * @return [type]
	 */
	public function showDashboard()
	{
		//return dashboard view
		if(Sentry::check())
		{
			return View::make('dashboard');
		}
		else
		{
			Redirect::to('login')->with('message', 'Login failed, man!');
		}
	}

}