<html lang="en">
	<head>
		<title>{{ $title }}</title>	
		<link rel="stylesheet" type="text/css" href="/assets/build/css/global/app.css">
	</head>
	
	<body>
	<!--
		<div class="cards">
		  <div class="card">
		    <div class="card-image">
		      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
		    </div>
		    <div class="card-header">
		      First Card
		    </div>
		    <div class="card-copy">
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
		    </div>
		    <div class="card-stats">
		      <ul>
		        <li>98<span>Items</span></li>
		        <li>298<span>Things</span></li>
		        <li>923<span>Objects</span></li>
		      </ul>
		    </div>
		  </div>
		  </div>
	-->


		<div id="container">

			<div class="login_container"> 

				<h2>Login</h2>

				{{ Form::open(array('url' => 'login', 'method' => 'POST')) }}

					<!-- are there errors? -->
					<p>
						{{ $errors->first('email') }}
						{{ $errors->first('pass') }}
					</p>
					<div class="email">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email') }}
					</div>
					
					<div class="pass">
						{{ Form::label('password', "Password:") }}
						{{ Form::password('pass', array('id' => 'pass')) }}
					</div>

					<div class="remember">
						{{ Form::checkbox('remember_user') . ' Remember Me' }} 
					</div>

					<div class="submit">
						{{ Form::submit('Login!') }}
					</div>

				{{ Form::close() }}

			</div> <!-- end login form -->

		</div>
	</body>
	
</html>