<?php
include '../Conn.php';
session_start();
if($_SESSION["Lawyer_id"]==null)
{
header("Location:Lawyer_login.php");
}
$Lawyer_id=$_SESSION['Lawyer_id'];
$query="select * from lawyer where Lawyer_id='$Lawyer_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Lawyer</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

		<link rel="stylesheet" href="../law-master/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../law-master/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../law-master/assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="../law-master/assets/fonts/fontawesome/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="../law-master/assets/css/slick.css">
    <link rel="stylesheet" href=../law-master/assets/css/slick-theme.css">

    <link rel="stylesheet" href="../law-master/assets/css/helpers.css">
    <link rel="stylesheet" href="../law-master/assets/css/style.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" ><?php echo $row['Lawyer_name']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="Index1.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="About1.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact1.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="Appointment1.php">Appointment</a></li>
            <li class="nav-item"><a class="nav-link" href="Logout1.php">Logout</a></li>
          </ul>

        </div>
      </div>
    </nav>
    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(../law-master/assets/images/1900x1200_img_7.jpg)" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">

            <h2 class="heading mb-3">The Law Firm</h2>
            <div class="sub-heading"><p class="mb-5">A free template solely for your Law Firm</p>
            <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Free Consultation</a></p>
            </div>
            
          </div>  
        </div>
      </div>
    </section>
<section class="pb_section" data-section="contact" id="section-contact">
      <div class="container">

        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Get In Touch</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-8 pr-md-5 pr-sm-0 mb-4">
            <form action="#">
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control p-3 rounded-0" id="name">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control p-3 rounded-0" id="email">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control p-3 rounded-0" id="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <ul class="pb_contact_details_v1">
              <li>
                <span class="text-uppercase">Email</span>
                probootstrap@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Phone</span>
                +30 976 1382 9921
              </li>
              <li>
                <span class="text-uppercase">Fax</span>
                +30 976 1382 9922
              </li>
              <li>
                <span class="text-uppercase">Address</span>
                San Francisco, CA <br>
                4th Floor8 Lower  <br>
                San Francisco street, M1 50F
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </section>
    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2017 <a href="https://themewagon.com/themes/free-bootstrap-4-law-firm-template-download/">Law</a>. Designed by <a rel="nofollow" href="https://probootstrap.com/" target="_blank">ProBootstrap</a>
        <br/> Distributed by <a href="https://themewagon.com" target="_blank">Themewagon</a> Demo Images: <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>


    <script src="../law-master/assets/js/jquery.min.js"></script>
    
    <script src="../law-master/assets/js/popper.min.js"></script>
    <script src="../law-master/assets/js/bootstrap.min.js"></script>
    <script src="../law-master/assets/js/slick.min.js"></script>

    <script src="../law-master/assets/js/jquery.waypoints.min.js"></script>
    <script src="../law-master/assets/js/jquery.easing.1.3.js"></script>

    <script src="../law-master/assets/js/main.js"></script>
	</body>
</html>