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
mysqli_select_db($con,'logininfo');
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['message'];
    
  // $q="SELECT email FROM mails WHERE email= '$email'";
  //   $result=mysqli_query($con,$q);
  // $num=mysqli_num_rows($result);
  // if($num==1)
  // {
  //   header('location:ContactUs.php');
  // }

  // else
  // {
    $q="INSERT INTO contact(name,email,msg) VALUES ('$name','$email','$msg')";
-  $query=mysqli_query($con,$q);
   header('location:ContactUs.php');
  // }
}



?>