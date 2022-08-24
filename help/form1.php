<html>
<head>
<title>Student Admission Form</title>
</head>
 <link rel="stylesheet" type="text/css" href="style2.css">
<body background="bg1.jpg" style="background-repeat: no-repeat; background-size: 100% 100%">
<h3>STUDENT ADMISSION FORM(2020-2021)</h3>

 
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
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
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
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">MALE</option>
               <option value = "3">FEMALE</option>
               <option value = "4">OTHER</option>
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
<select id = "myList">
               <option value = "1">select.....</option>
               <option value = "2">Computer Engg.</option>
               <option value = "3">Mechanical Engg.</option>
               <option value = "4">Civil Engg</option>
               <option value = "3">Production Engg.</option>
               <option value = "4">Instrumentation Engg.</option>
               <option value = "3">Electronics Engg.</option>
               <option value = "4">Electrical Engg</option>
               <option value = "4">Computer Tech.</option>
             </select>
</td>
</tr>

<!----- Transaction ID ---------------------------------------------------------->
<tr>
<td>Transaction ID*</td>
<td><input type="text" name="ID" maxlength="30" />
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
<td>Adhar No.*</td>
<td><input type="text" name="Adhar_no" maxlength="11" />
(12 digit number)
</td>
</tr>
 
 <tr>
<td>NAD ID.*</td>
<td><input type="text" name="Nad_no" maxlength="11" />
</td>
</tr>
 
 <tr>
<td>Birth Place.*</td>
<td><input type="text" name="Birth_place" maxlength="30" />
</td>
</tr>
 
 <tr>
<td>NATIONALITY*</td>
<td>
<select id = "myList">
               <option value = "1">Indian</option>
               <option value = "2">Other</option>
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
<td><input type="text" name="Acc_no" maxlength="15" />
</td>
</tr>

 <tr>
<td>Age of student*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">19</option>
               <option value = "2">18</option>
               <option value = "2">17</option>
               <option value = "2">16</option>
               <option value = "2">15</option>
             </select>
</td>
</tr>

 <tr>
<td>Facility Taken*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">Scholarship</option>
               <option value = "2">Freeship</option>
               <option value = "2">TFWS</option>
             </select>
</td>
</tr>

<tr>
<td>Scholarship Id*</td>
<td><input type="text" name="Acc_no" maxlength="15" />
</td>
</tr>

<tr>
<td>Blood Group*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">A+</option>
               <option value = "3">A-</option>
               <option value = "4">B+</option>
               <option value = "5">B-</option>
               <option value = "6">AB+</option>
               <option value = "7">AB-</option>
               <option value = "8">O+</option>
               <option value = "9">O-</option>
             </select>
</td>
</tr>

<tr>
<td>Previous Class attend*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">F.Y IN GPAN</option>
               <option value = "3">S.Y IN GPAN</option>
               <option value = "4">OTHER</option>
             </select>
</td>
</tr>

<tr>
<td>Previous class Result*</td>
<td>
<select id = "myList">
               <option value = "1">Select..</option>
               <option value = "2">pass</option>
               <option value = "3">First class</option>
               <option value = "4">First class with distinction</option>
               <option value = "5">second class</option>
             </select>
</td>
</tr>


 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>