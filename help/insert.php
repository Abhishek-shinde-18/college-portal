<?php

include 'conn.php';


if(isset($_POST['done']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$q="INSERT INTO curdtable(username, password
) VALUES ('$username','$password')";
	$query=mysqli_query($con,$q);

}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>



<div class="col-lg-6 m-auto">
	<form method="post">

		<div class="card">
			<div class="card-header bg-dark text-white">
				<h1 class="text-center"> Insert Opertaion</h1>
			</div>
			<label> Username</label>
			<br>
			<input type="text" name="username" class="form-control">
			<br>
			<label> Password</label>
			<br>
			<input type="text" name="password" class="form-control">

			<button type="submit" class="btn btn-success" name="done"> Submit</button>
		</div>
		
	</form>
	
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>