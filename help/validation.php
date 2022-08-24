<?php
session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root');

if($con)
{
	echo "connection successful";
}

else
{
	echo "not connected";
}


//select database

if(isset($_POST['done']))
{
mysqli_select_db($con,'sessionpract');
  $name=$_POST['username'];
  $pass=$_POST['password'];


  $q="select * from signin where username='$name' && password='$pass'";
  	$result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
  	$_SESSION['username']=$name;
    echo $name;
    //$qy="insert into signin(username,password) values ('$name','$pass')";
    //$query=mysqli_query($con,$qy);
    header('location:home.php');
  }

  else{
    header('location:login.php');
  }
}