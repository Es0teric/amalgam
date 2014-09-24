<html lang="en">
	<head>
		<title>{{ $title }}</title>	
	</head>
	
	<body>

		<div class="container">
		
			<h2>Login</h2>
			{{ Form::open(array('url' => 'login', 'method' => 'POST')) }}

				<!-- are there errors? -->
				<p>
					{{ $errors->first('email') }}
					<br>
					{{ $errors->first('pass') }}
				</p>

				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email') }}
				<br>
				{{ Form::label('password', "Password:") }}
				{{ Form::password('pass') }}
				<br>
				{{ Form::checkbox('remember_user') . ' Remember Me' }} 
				<br>
				{{ Form::submit('Login!') }}

			{{ Form::close() }}

		</div>
	</body>
	
</html>