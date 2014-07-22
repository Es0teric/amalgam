<html lang="en">
	<head>
		<meta charset="utf-8" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="description" content="Amalgam, point blank">
	  	<meta name="author" content="G. Leo">
		<title>{{ $title }}</title>	
		<link rel="stylesheet" type="text/css" href="/assets/build/css/global/app.css">
	</head>
	
	<body>

		@if(Session::has('logout_message'))
			<div class="logout_success">
				{{ Session::get('logout_message') }}
			</div>
		@endif

		<div id="container">

			<div class="login_container"> 
			
				{{ Form::open(array('url' => 'login', 'method' => 'POST')) }}

					<!-- are there errors? -->
					<p>
						{{ $errors->first('email') }}
						{{ $errors->first('pass') }}
					</p>

					<div class="email">
						<div class="icon-holder">
							<i class="fa fa-user fa-lg"></i>
						</div>
						{{ Form::text( 'email', null, array( 'placeholder' => 'your email' ) ) }}
					</div>
					
					<div class="pass">
						<div class="icon-holder">
							<i class="fa fa-key fa-lg"></i>
						</div> 
						{{ Form::password( 'pass', array( 'id' => 'pass', 'placeholder' => 'password' ) ) }}
					</div>

					<div class="remember">
						{{ Form::checkbox( 'remember_user' ) . ' Remember Me' }} 
					</div>

					<div class="submit">
						{{ Form::submit( 'Login!' ) }}
					</div>

				{{ Form::close() }}

			</div> <!-- end login form -->

		</div>
	</body>
	
</html>