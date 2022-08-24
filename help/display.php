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
	<div class="col-lg-12">
		<h1 class="text-center text-warning">Display Table Data</h1>

		<table class="table table-striped table-hover table-bordered text-center m-auto">
			<tr>
			<th> Id</th>
			<th> Username</th>
			<th> Password</th>
			<th> Delete</th>
			<th> Update</th>
		</tr>

		<?php
			include 'conn.php';
			$q="select * from curdtable";
			$query=mysqli_query($con,$q);

			while ($res=mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['username'];?></td>
					<td><?php echo $res['password'];?></td>
					<td><button class="btn btn-danger text-white">
						<a href="delete.php?id=<?php echo $res['id']?>">
					Delete</button> </td>
				<td><button class="btn btn-primary text-white">Update</button> </td>

				</tr>
				<?php
			}
           ?>
		</table>
		
	</div>
	
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>