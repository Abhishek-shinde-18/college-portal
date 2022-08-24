<html>
<head>
<title>Student Fee Receipt Form</title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<body background="img/bg1.jpg" style="background-repeat: no-repeat; background-size: 100% 100%">
<h3>STUDENT FEE RECEIPT FORM(2020-2021)</h3>
<div class="mt-3 mb-3">
<marquee style="border: 1px solid red;font-weight: bold;color: red;padding: 2px 5px;">
<b> NOTE :- </b>--(1)--Fill The form Carefully Because Their No Option For Edit Your Response.---(2)--- Ones You Start Filling Form Complete It.---(3)---Fill All Option Is Compalsury 
</marquee>
</div>
<form method="post" action="conn2.php"> 
<table align="center" cellpadding = "10">
 
<!----- UPI Name ---------------------------------------------------------->
<tr>
<td>UPI Information-Name*</td>
<td><input type="text" name="UPI_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- BANK ---------------------------------------------------------->
<tr>
<td>His/Her Bank Acc.No*</td>
<td><input type="text" name="BANK_ACC" maxlength="30"/>
</td>
</tr>
  
<!----- IFSC ---------------------------------------------------------->
<tr>
<td>Above Bank IFSC CODE*</td>
<td><input type="text" name="IFSC_code" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER(self)*</td>
<td>
<input type="tel" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID*</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Transaction ID ---------------------------------------------------------->
<tr>
<td>Online Fee Paid Transaction ID*</td>
<td><input type="text" name="Trans_ID" maxlength="30" />
</td>
</tr>
 
<!----- UPI ID ---------------------------------------------------------->
<tr>
<td>UPI ID*</td>
<td><input type="text" name="UPI_ID" maxlength="6" />
</td>
</tr>
 
<!----- DATE ---------------------------------------------------------->
<tr>
<td>Enter Date of fee paid*</td>
<td><input type="date" name="day" maxlength="30" />
</td>
</tr>
 
<!----- NAME ---------------------------------------------------------->
<tr>
<td>Name of Student*</td>
<td><input type="text" name="NAME" maxlength="30" /></td>
</tr>
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Working/parents Mobile No.*</td>
<td>
<input type="tel" name="MobileNumber" maxlength="10" />
(10 digit number)
</td>
</tr>

<tr>
<td>Enrollment No.*</td>
<td><input type="text" name="Enrollment_no" maxlength="11" />
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>Branch Name*</td>
<td>
<select id = "myList" class="Branch">
               <option value = "1">select.....</option>
               <option value = "Computer Engg.">Computer Engg.</option>
               <option value = "Mechanical Engg.">Mechanical Engg.</option>
               <option value = "Civil Engg">Civil Engg</option>
               <option value = "Production Engg.">Production Engg.</option>
               <option value = "Instrumentation Engg.">Instrumentation Engg.</option>
               <option value = "E&TC Engg.">E&TC Engg.</option>
               <option value = "Electrical Engg">Electrical Engg</option>
               <option value = "Computer Tech">Computer Tech.</option>
             </select>
</td>
</tr>

 
<!----- Caste ---------------------------------------------------------->
<tr>
<td>Category*</td>
<td>
<select id = "myList" class="Category">
               <option value = "1">Select..</option>
               <option value = "OPEN">OPEN</option>
               <option value = "SC">SC</option>
               <option value = "ST">ST</option>
               <option value = "0BC">0BC</option>
               <option value = "SBC">SBC</option>
             
             </select>
</td>
</tr>

<!----- TOTAL FEE ---------------------------------------------------------->
<tr>
<td>TOTAL FEE* <br>OPEN/minority-8900<br>OBC/EBC-5900<br>VJNT&SC,ST-2900</td>
<td>
<select id = "myList" class="TOTAL_FEE">
               <option value = "1">Select..</option>
               <option value = "5900">5900</option>
               <option value = "2900">2900</option>
               <option value = "8900">8900</option>
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
 
</body>
</html>