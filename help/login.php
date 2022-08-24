<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<form method="post" action="validation.php" >
				<h2 class="text-center text-success"> Sign In </h2>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary" name="done">Log In</button>
			</form>
			
		</div>

		<div class="col-lg-6">
			<form method="post" action="registration.php">
				<h2 class="text-center text-success"> Registration</h2>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<button type="submit" name="done" class="btn btn-primary">Register</button>
			</form>
		</div>
		
	</div>
	
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>