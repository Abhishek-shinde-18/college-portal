<!-- CURD-
C-CREATE
U-UPDATE
R-READ
D-DELETE -->

<?php

		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mydb');

		if($con)
		{
			echo "connection succesfull";
		}

		else{
			echo "not connected";
		}




