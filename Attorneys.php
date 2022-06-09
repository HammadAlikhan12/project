<?php
include '../Conn.php';

$query_select1="select * from service";
$result_data1 = mysqli_query($conn,$query_select1);

$query_select="select * from city";
$result_data = mysqli_query($conn,$query_select);

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

		<title>Law &mdash; Free Multi-Purpose One Page Bootstrap 4 Theme by ProBootstrap.com</title>
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
        <!-- <a class="navbar-brand" href="/">Law</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
 
          <li class="nav-item"><a class="nav-link" href="Index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#section-why-us">Why</a></li> -->
            <li class="nav-item"><a class="nav-link" href="Practice_areas.php">Practicing Areas</a></li>
            <li class="nav-item"><a class="nav-link" href="Attorneys.php">Attorneys</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
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
    <section class="pb_section bg-light bg-image with-overlay" data-section="attorneys" id="section-attorneys" style="background-image: url(../law-master/assets/images/1900x1200_img_2.jpg)">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Attorneys</h2>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <?php
          $query="select * from lawyer ";
          $result=mysqli_query($conn,$query);
          while($rows=mysqli_fetch_array($result))
          {
            ?>
          <div class="col-md">
            <div class="card text-center pb_card_v1 mb-4">
              <img class="card-img-top rounded-circle w-50 mx-auto" src="../Lawyer/img/<?php echo $rows['img_name']?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title mt-0 mb-2"><?php echo $rows['Lawyer_name']?></h4>
                <h6 class="card-subtitle mb-2"><?php echo $rows['Service_id']?></h6>
                <p><a href="View_Page.php " class="btn " style="background:black;color:white">View Page</a></p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          
        </div>
      </div>
    </section>
    <!-- <section class="pb_section pb_testimonial_v1" data-section="testimonials" id="section-testimonials">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Happy Customers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-sm-12 mb-5">
            <div class="single-item-no-arrow pb_slide_v1">
              <div>
                <?php
                $query="select * from lawyer";
                $result1=mysqli_query($conn,$query);
                while($rows=mysqli_fetch_array($result1))
                {
                  ?>
                <div class="media">
                  <img class="d-flex img-fluid rounded-circle mb-sm-5" src="../Lawyer/img/<?php echo $rows['img_name']?>" alt="Generic placeholder image">
                  <div class="media-body pl-md-5 pl-sm-0">
                    <blockquote>
                      <p><?php echo $rows['About']?></p>
                      <p class="pb_author"><cite class="text-uppercase"><?php echo $rows['Lawyer_name']?></cite> <?php echo $rows['City_id']?></p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div>
                <?php
                }
                ?>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section> -->
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