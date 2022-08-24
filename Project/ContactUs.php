<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="stylesheet" type="text/css" href="style.css">

   <style>
	    body{
	    	background-image: url(img/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 50px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>


  </head>
<body>
	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand ml-3 pl-3" href="#"><img src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto mr-4 pl-4 pr-4">
      <li class="nav-item mr-4 pl-4 pr-4">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
 
      <!-- Dropdown -->
    <li class="nav-item dropdown mr-4 pl-4 pr-4">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Departments
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item" href="civil.php">Civil Engineering</a>
        <a class="dropdown-item" href="mech.php">Mechanical Engineering</a>
        <a class="dropdown-item" href="comp.php">Computer Technology</a>
        <a class="dropdown-item" href="comp1.php">Computer Engineering</a>
        <a class="dropdown-item" href="elec.php">Electrical Engineering</a>
        <a class="dropdown-item" href="e&tc.php">Electronics and Telecommunication</a>
        <a class="dropdown-item" href="inst.php">Instrumentation Engineering</a>
         <a class="dropdown-item" href="prod.php">Production Engineering</a>
      </div>
    </li>  
     <li class="nav-item mr-4 pl-4 pr-4">
        <a class="nav-link" href="Admission.php">Admission</a>
     </li>
      <li class="nav-item mr-4 pl-4 pr-4">
        <a class="nav-link" href="ContactUs.php">Contact</a>
      </li> 
      <li class="nav-item  pl-4">
        <a class="nav-link" href="Logout.php">Logout</a>
      </li>  
    </ul>
  </div>  
</nav>





<div class="container contact-form">
	<h1>Contact Us</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
        <img src="img/logo.png" class="bg-secondary">
       	<address> Namanga Rd, Bhavani Nagar, Ahmednagar, Maharashtra 414001</address>
       	<p>Email:- gpan021@email.com</p>
       	<p>Phone:- +91- 2314657980</p>
        <button type="button" class="btn btn-dark"><a href="https://goo.gl/maps/4YbEYbBjUYXvJqW78">View on map</a></button>
      
       </div>

       <div class="col-md-6">
        <form method="post" action="conn4.php" >
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control" name="name">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control" name="email">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7" name="message"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block" name="done">Send</button>
         </div>
        </form>
       </div>

    </div>
</div>
<br><br><br>

<!-- Footer Section -->


 
<div class="main_footer">
  <div class="container">
    <div class="row pl-3">
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ml-5 mr-5">
        <div class="footer_box">
          <h2>Quick Link</h2>
          <hr>
          <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="admission.php">admission</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ml-5 mr-5">
        <div class="footer_box">
          <h2>Related Links</h2>
          <hr>
          <ul>
            <li><a href="https://msbte.org.in/">MSBTE</a></li>
            <li><a href="http://www.dtemaharashtra.gov.in/index.html">DTE Maharashtra</a></li>
            <li><a href="http://msbte.engg-info.website/msbte-model-answer-paper-summer-winter">Question Paper</a></li>
            <li><a href="https://mahadbtmahait.gov.in/login/login">Scholarships</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ml-5">
        <div class="footer_box">
          <h2>Get In Touch</h2>
          <hr>
          <div class="footer_address">
            <h6><a href="https://goo.gl/maps/4YbEYbBjUYXvJqW78"><i class="fa fa-map-marker"></i>Namanga Rd, Bhavani Nagar, Ahmednagar, Maharashtra 414001</a></h6>
            <h6><a href=""><i class="fa fa-phone"></i>+91- 2314657980</a></h6>
            <h6><a href=""><i class="fa fa-envelope"></i>gpan021@email.com</a></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer_bottom pl-5">
  <div class="container pl-5 mr-5">
    <div class="row pl-5 ml-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12 pl-5 ml-5">
        <p class="pl-5 ml-4">Copyright &copy; 2020 <a href="Home.php">GPAN.com</a> All Rights Reserved.</p>
      </div>
    </div>
  </div>
</div>
 
 <!-- footer ended -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>
