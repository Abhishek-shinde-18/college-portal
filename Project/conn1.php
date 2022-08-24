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
  $fname=$_POST['First_Name'];
  $lname=$_POST['Last_Name'];
  $dob=$_POST['Birthday_day'];
  $email=$_POST['Email_Id'];
  $Mobile_Number=$_POST['Mobile_Number'];
  $gender=$_POST['gender'];
  $addr=$_POST['Address'];
  $city=$_POST['City'];
  $pcode=$_POST['Pin_Code'];
  $state=$_POST['State'];
  $country=$_POST['Country'];
  $branch=$_POST['Branch'];
  $tid=$_POST['Trans_ID'];
  $uid=$_POST['UPI_ID'];
  $eno=$_POST['Enrollment_no'];
  $Aadhar_no=$_POST['Aadhar_no'];
  $Nad_no=$_POST['Nad_no'];
  $bplace=$_POST['Birth_place'];
  $nation=$_POST['Nationality'];
  $bname=$_POST['Bank_name'];
  $Acc_no=$_POST['Acc_no'];
  $age=$_POST['Age'];
  $faci=$_POST['Facility'];
  $Scho_ID=$_POST['Scho_ID'];
  $blood=$_POST['Blood'];
  $pclass=$_POST['Pclass'];
  $presult=$_POST['Presult'];



 $q="SELECT email FROM formdemo WHERE email= '$email' limit 1";
    $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    header('location:filled.php');
  }

  else
  {
    $q="INSERT INTO formdemo(fname,lname,dob,email,mno,gender,addr,city,pcode,state,country,branch,tid,uid,eno,aano,nno,bplace,nation,bname,acno,age,faci,sid,blood,pclass,presult) VALUES ('$fname','$lname','$dob','$email','$Mobile_Number','$gender','$addr','$city','$pcode','$state','$country','$branch','$tid','$uid','$eno','$Aadhar_no','$Nad_no','$bplace','$nation','$bname','$Acc_no','$age','$faci','$Scho_ID','$blood','$pclass','$presult')";
-  $query=mysqli_query($con,$q);
   header('location:admission.php');
}


}

?>