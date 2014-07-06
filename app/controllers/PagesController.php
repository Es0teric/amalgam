<?php

class PagesController extends BaseController {

	public function showLogin()
	{
		View::share('title', 'Login Page');
		return View::make('login', array('content'  => 'test content'));
	}

}