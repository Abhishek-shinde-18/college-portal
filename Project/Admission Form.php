<!DOCTYPE html>
<html lang="en">
<title>Student Admission Form</title>
</head>
 <link rel="stylesheet" type="text/css" href="style2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<body background="img/bg1.jpg" style="background-repeat: no-repeat; background-size: 100% 100%">
<h3>STUDENT ADMISSION FORM(2020-2021)</h3>
<div class="mt-3 mb-3">
<marquee style="border: 1px solid red;font-weight: bold;color: red;padding: 2px 5px;">
<b> NOTE :- </b>--(1)--Fill The form Carefully Because Their No Option For Edit Your Response.---(2)--- Ones You Start Filling Form Complete It.---(3)---Fill All Option Is Compalsury 
</marquee>
</div>
<form method="post" action="conn1.php">
<table align="center" cellpadding = "10">

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME*</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME*</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH*</td>
 
<td>
  <input type="date" name="Birthday_day">
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID*</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER*</td>
<td>
<input type="tel" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER*</td>
<td>
<select id ="myList" name="gender">
               <option value = "1">Select..</option>
               <option value = "MALE">MALE</option>
               <option value = "FEMALE">FEMALE</option>
               <option value = "OTHER">OTHER</option>
             </select>
</td>
</tr>

 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS* <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY*</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE*</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE*</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY*</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>Branch Name*</td>
<td>
<select id = "myList" name="Branch">
               <option value = "1">select.....</option>
               <option value = "Computer Engg.">Computer Engg.</option>
               <option value = "Mechanical Engg.">Mechanical Engg.</option>
               <option value = "Civil Engg">Civil Engg</option>
               <option value = "Production Engg.">Production Engg.</option>
               <option value = "Instrumentation Engg">Instrumentation Engg.</option>
               <option value = "E&TC Engg">E&TC Engg.</option>
               <option value = "Electrical Engg">Electrical Engg</option>
               <option value = "Computer Tech.">Computer Tech.</option>
             </select>
</td>
</tr>

<!----- Transaction ID ---------------------------------------------------------->
<tr>
<td>Transaction ID*</td>
<td><input type="text" name="Trans_ID" maxlength="30" />
</td>
</tr>

<!----- UPI ID ---------------------------------------------------------->
<tr>
<td>UPI ID*</td>
<td><input type="text" name="UPI_ID" maxlength="6" />
</td>
</tr>

<tr>
<td>Enrollment No.*</td>
<td><input type="text" name="Enrollment_no" maxlength="11" />
(10 digit number)
</td>
</tr>
 

 <tr>
<td>Aadhar No.*</td>
<td><input type="text" name="Aadhar_no" maxlength="12" />
(12 digit number)
</td>
</tr>
 
 <tr>
<td>NAD ID.*</td>
<td><input type="text" name="Nad_no" maxlength="10" />
</td>
</tr>
 
 <tr>
<td>Birth Place.*</td>
<td><input type="text" name="Birth_place" maxlength="30" />
</td>
</tr>
 
 <tr>
<td>Nationality*</td>
<td>
<select id = "myList" name="Nationality">
               <option value = "Indian">Indian</option>
               <option value = "Other">Other</option>
             </select>
</td>
</tr>

 <tr>
<td>Bank Name.*</td>
<td><input type="text" name="Bank_name" maxlength="30" />
</td>
</tr>

 <tr>
<td>Bank Acc. No.*</td>
<td><input type="text" name="Acc_no" maxlength="10" />
</td>
</tr>

 <tr>
<td>Age of student*</td>
<td>
<select id = "myList" name="Age">
               <option value = "1">Select..</option>
               <option value = "19">19</option>
               <option value = "18">18</option>
               <option value = "17">17</option>
               <option value = "16">16</option>
               <option value = "15">15</option>
             </select>
</td>
</tr>

 <tr>
<td>Facility Taken*</td>
<td>
<select id = "myList" name="Facility">
               <option value = "1">Select..</option>
               <option value = "Scholarship">Scholarship</option>
               <option value = "Freeship">Freeship</option>
               <option value = "TFWS">TFWS</option>
             </select>
</td>
</tr>

<tr>
<td>Scholarship Id*</td>
<td><input type="text" name="Scho_ID" maxlength="12" />
</td>
</tr>

<tr>
<td>Blood Group*</td>
<td>
<select id = "myList" name="Blood">
               <option value = "1">Select..</option>
               <option value = "A+">A+</option>
               <option value = "A-">A-</option>
               <option value = "B+">B+</option>
               <option value = "B-">B-</option>
               <option value = "AB+">AB+</option>
               <option value = "AB-">AB-</option>
               <option value = "O+">O+</option>
                <option value = "O-">O-</option>
</select>
</td>
</tr>

<tr>
<td>Previous Class attend*</td>
<td>
<select id = "myList" name="Pclass">
               <option value = "1">Select..</option>
               <option value = "F.Y IN GPAN">F.Y IN GPAN</option>
               <option value = "S.Y IN GPAN">S.Y IN GPAN</option>
               <option value = "OTHER">OTHER</option>
</select>
</td>
</tr>

<tr>
<td>Previous class Result*</td>
<td>
<select id ="myList" name="Presult">
               <option value = "1">Select..</option>
               <option value = "pass">pass</option>
               <option value = "First class">First class</option>
               <option value = "First class with distinction">First class with distinction</option>
               <option value = "second class">second class</option>
</select>
</td>
</tr>

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" class="bg-dark text-primary mt-3" name="done">
</td>
</tr>
</table>
</form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>