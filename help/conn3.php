<?php

session_start();
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
mysqli_select_db($con,'pract');
  $name=$_POST['fname'];
 
  $msg=$_POST['lname'];
    
/*  $q="SELECT email FROM form1 WHERE email= '$email' limit 1";
    $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    header('location:Home.php');
  }

  else
  {*/
     $q="INSERT INTO form(fname,lname) VALUES ('$name','$msg')";
     $query=mysqli_query($con,$q);
   header('location:home.php');
/*  }*/
}



?>