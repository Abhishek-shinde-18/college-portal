<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="stylesheet" type="text/css" href="style.css">
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



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/college2.png" alt="Los Angeles" width="100%" height="700">
      <div class="carousel-caption text-primery">
        <h3><u>Welcome to Government Polytechnic, Ahmednagar</u></h3>
        <p>............................................................................................................</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/college.png" alt="Chicago" width="100%" height="700">
      <div class="carousel-caption">
        <h3>Annual get-together</h3>
        <p>Tranditional Day, Fish Pond Game, Gathering</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/Principal.png" alt="New York" width="100%" height="700">
      <div class="carousel-caption text-body">
        <h2><u>Prinicipal's Message</u></h2>
        <p><b>Government Polytechnic Ahmednagar, established in 1990 and affiliated to MSBTE ,have recently in 2014 celebrated silver jubilee. The institute is spread over 19 acres in the heart of historical city of Ahmednagar.The institute has eight branches and excellent infrastructure, well equipped departments, training and placement cell , class rooms, girls’ and boys’ hostel. The institute has a team of highly qualified, experienced and dedicated faculties and non-teaching staff devoted to achieve excellence in every activity of the institute. Apart from regular curriculum, the institute takes care of co-curricular and extra-curricular activities to build its student ‘a complete engineer’. The positive efforts taken by institute will help to achieve the vision of the institute and make our students globally competitive, employable engineers.</b></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

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







 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>