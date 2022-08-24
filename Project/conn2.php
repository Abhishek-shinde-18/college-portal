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



if (isset($_POST['done'])) 
{
mysqli_select_db($con,'logininfo');
  $uname=$_POST['UPI_Name'];
  $bacc=$_POST['BANK_ACC'];
  $ifsc=$_POST['IFSC_code'];
  $mno=$_POST['Mobile_Number'];
  $email=$_POST['Email_Id'];
  $tid=$_POST['Trans_ID'];
  $uid=$_POST['UPI_ID'];
  $date=$_POST['day'];
  $mono=$_POST['MobileNumber'];
  $eno=$_POST['Enrollment_no'];
  $branch=$_POST['Branch'];
  $cat=$_POST['Category'];
  $fee=$_POST['TOTAL_FEE'];



 $q="SELECT Email_Id FROM form WHERE Email_Id= '$email' limit 1";
    $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    header('location:filled.php');
  }

  else
  {
    $q="INSERT INTO form(UPI_Name,BANK_ACC,IFSC_code,Mobile_Number,Email_Id,Trans_ID,UPI_ID,day,MobileNumber,Enrollment_no,Branch,Category,TOTAL_FEE) VALUES ('$uname','$bacc','$ifsc','$mno','$email','$tid','$uid','$date','$mono','$eno','$branch','$cat','$fee')";
-  $query=mysqli_query($con,$q);
   header('location:admission.php');
}


}

?>