<?php

class PagesController extends BaseController {

	/**
	 * Shows login page
	 * @return View\Login
	 */
	public function showLogin()
	{
		View::share('title', 'Login Page');
		return View::make('login', array('content'  => 'test content'));
	}

	/**
	 * Process login data and redirect to dashboard on success
	 * @return Routing\Redirector redirects user based on credentials
	 */
	public function doLogin()
	{
		//process login
		//var_dump(Input::all());

		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'pass' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) 
		{
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('pass')); // send back the input (not the password) so that we can repopulate the form
		} 
		else 
		{
			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('pass')
			);

			//for "remember me" checkbox
			$remember = false;

			//if checkbox is checked, name wont equal null
			if(Input::get('remember_user') !== NULL)
			{
				$remember = true;
			}

			// attempt to do the login
			if (Sentry::authenticate($userdata, $remember)) 
			{

				// validation successful!
				// redirect them to the dashboard section
				return Redirect::to('dashboard');
				// for now we'll just echo success (even though echoing in a controller is bad)
				//echo 'SUCCESS!';

			} 
			else 
			{	 	
				// validation not successful, send back to form	
				return Redirect::to('login')->with('flash_message', 'Login failed!');

			}
		}
	}

}