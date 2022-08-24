<?php

session_start();
header('location:LogIn.php');
$con=mysqli_connect('localhost','root');

if($con)
{
  echo "connection successful";
}

else
{
  echo "not connected";
}


 
if(isset($_POST['done']))
{
mysqli_select_db($con,'logininfo');
  $email=$_POST['email'];
  $pass=$_POST['password'];

    
/*  $q="SELECT email FROM mails WHERE email= '$email' limit 1";
    $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    header('location:Home.php');
  }

  else
  {*/
    $q="INSERT INTO mails(email,password) VALUES ('$email','$pass')";
-  $query=mysqli_query($con,$q);
   header('location:Home.php');
/*  }*/
}



?>