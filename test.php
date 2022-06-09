<?php
include '../Conn.php';

$query_select1="select * from service";
$result_data1 = mysqli_query($conn,$query_select1);

$query_select="select * from city";
$result_data = mysqli_query($conn,$query_select);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->
</head>

<body>
    <header>
        <div class="top-sec">
            <div class="container">
                <div class="row">
                    <div class="top-use-sec">
                        <ol>
                            <li><i class="far fa-map-marker-alt"></i> Marthandam</li>
                            <li><i class="fal fa-envelope"></i>sales@smarteyeapps.com</li>
                            <li><i class="fal fa-clock"></i> Mon-sat (8am-7pm) Sunday Closed</li>
                        </ol>
                        <div class="top-social">
                            <ul>
                                <li><i class="fab fa-facebook-f"></i></li>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-google"></i></li>
                                <li><i class="fab fa-skype"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo">
                            <h1>Lawyers</h1>
                        </div>

                        <div class="menu-toggle"></div>
                        <div class="my-nav-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="Index.php">Home</a></li>
                                    <li><a href="About.php">About Us</a></li>
                                    <li><a href="Attorneys.php">Services</a></li>
                                    <li><a href="Practice_areas.php">Blog</a></li>
                                    <li><a href="Contact.php">Contact us</a></li>
                                    <li><a href="Logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="slider">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="head-content">
                        <h2>BIGGEST AND STRONGEST FIRM WITH LEGAL <span>S</span>OLUTION</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                          Laborum accusamus inventore, sint impedit rerum numquam sed maxime quisquam veniam beatae minus.</p>
                          <div class="btn-01">
                              <a href="#"><span>Contact us</span></a>
                              <a href="#"><span>Follow us</span></a>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-effect">
            <div class="social-media">
                <ol>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-google"></i></li>
                    <li><i class="fab fa-skype"></i></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="heading-items">
                    <h2>KEY FEATURES</h2>
                    <!-- <span><i class="far fa-gavel"></i></span> -->
                </div>

                <div class="card-feautures-main d-flex">
                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>Best Attorneys</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/attorney.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>Fight For Justice</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/fight.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>30 Years Experience</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/experience.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>Low Cost For Case</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/lowcost.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>Intelligent Lawyers</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/lawyer.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-feautures-sup">
                        <div class="feautures-content">
                            <div class="content-head">
                                <h2>Best Case strategy</h2>
                            </div>
                            <div class="inner-items">
                                <div class="feauters-icon-box">
                                    <img src="assets/images/icons/casestrategy.png" >
                                </div>
                                <div class="text-box">
                                   <p>You can place Industrial content here or place Industrial content here or place kind of details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="bg-06">
        <div class="container">
            <div class="row">
               <div class="text-main d-flex">
                   <div class="sub-main">
                       <div class="image-card">
                           <img src="assets//images/1.png">
                       </div>
                   </div>
                   <div class="sub-main">
                       
                   </div>
               </div> 
            </div>
        </div>
    </section> -->
    
    <section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="heading-items">
                    <h2>Meet Our Experts</h2>
                    <!-- <span><i class="far fa-gavel"></i></span> -->
                </div>

                <div class="main-team-card d-flex">
                <?php
          $query="select * from lawyer ";
          $result=mysqli_query($conn,$query);
          while($rows=mysqli_fetch_array($result))
          {
            ?>
                    <div class="team-setup">
                        <div class="team-items">
                            <div class="team-user">
                                <img src="../Lawyer/img/<?php echo $rows['img_name']?>">
                                <div class="team-user-social">
                                <ol>
                                <a href="#"><li><i class="fab fa-facebook-f"></i></li></a>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-google"></i></li>
                                    <li><i class="fab fa-skype"></i></li>
                                </ol>
                            </div>
                            </div>
                            
                            <div class="team-name">
                                <h2><?php echo $rows['Lawyer_name']?></h2>
                                <b><?php echo $rows['Service_id']?></b>
                                <p><a href="View_Page.php" class="btn btn-outline-primary">View Page</a></p>
                            </div>
                            
                        </div>
                    </div>
                    <?php
          }
          ?>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="bg-03">
        <div class="container">
            <div class="row">
                <div class="counsolting-main d-flex">
                    <div class="consolting-sup">
                        <div class="consolting-contant">
                            <div class="heading">
                                <h3>Free Consulting</h3>
                                <b>Call us +91 9751791203 or fill out the form.</b>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quas animi amet quia
                                   asperiores voluptatum deleniti reprehenderit aperiam autem totam. Consectetur totam iusto atque, doloremque nesciunt ad assumenda ex corporis!</p>
                            </div>
                        </div>
                    </div>

                    <div class="consolting-sup">
                        <div class="consolting-contant">
                            <div class="form-consolting">
                                <div class="form-dived d-flex">
                                    <div class="form-text">
                                        <div class="form-group">
                                            <input class="form-control" type="name" role="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-text">
                                        <div class="form-group mr-0">
                                            <input class="form-control" type="email" role="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-text">
                                        <div class="form-group">
                                            <input class="form-control" type="phone" role="phone" placeholder="Mobile Number">
                                        </div>
                                    </div>

                                    <div class="form-text">
                                        <div class="form-group mr-0">
                                            <input class="form-control" type="text" role="text" placeholder="Place">
                                        </div>
                                    </div>

                                    <div class="form-mesage">
                                        <div class="form-group">
                                            <textarea name="textarea" cols="60" rows="5" class="form-control" placeholder="Case Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-04">
        <div class="container">
            <div class="row">
                <div class="heading-items">
                    <h2>Latest News</h2>
                    <!-- <span><i class="far fa-gavel"></i></span> -->
                </div>

                <div class="blog-main-card d-flex">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-02.jpg">
                        </div>
                        <div class="blog-content-date">
                            june
                            <span> 8</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>

                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-01.jpg">
                        </div>
                        <div class="blog-content-date">
                            july
                            <span> 10</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>

                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-03.jpg">
                        </div>
                        <div class="blog-content-date">
                            july
                            <span> 21</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>

                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-04.jpg">
                        </div>
                        <div class="blog-content-date">
                            july
                            <span> 29</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>

                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-05.jpg">
                        </div>
                        <div class="blog-content-date">
                            july
                            <span> 26</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>

                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/img-06.jpg">
                        </div>
                        <div class="blog-content-date">
                            july
                            <span> 22</span>
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Capitalize on low hanging fruit to identify ballpark</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium 
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-05">
        <div class="container">
            <div class="row">
                <div class="send-main">
                    <div class="content-sen">
                        <h2>DON'T MISS OUT</h2>
                        <p>Tech updates, news, events etc. are now just a click away. 
                          Sign-up and see how we bring relevant information to your inbox.</p>
                    </div>
                    <div class="end-buttons">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" aria-label="" id="" placeholder="Enter Your Email">
                                <div class="input-group-append">
                                    <button class="btn sendbutton" id="" type="button">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>

                        <p>We don’t spam or share your email with others. We ensure complete confidentiality of your data and are 
                            committed to serving information that is personalized and relevant to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="footer-content">
                        <h2>About Lawyers</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime adipisci veniam 
                           voluptatum voluptatem sed ex error beatae, asperiores dignissimos?</p>
                           <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-google"></i></li>
                            <li><i class="fab fa-skype"></i></li>
                           </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="footer-content">
                        <h2>Quick Links</h2>
                        <ol>
                            <li><a href="Index.php"><i class="fal fa-angle-double-right"></i>Home</a></li>
                            <li><a href="About.php"><i class="fal fa-angle-double-right"></i>About Us</a></li>
                            <li><a href="Attorneys.php"><i class="fal fa-angle-double-right"></i>Services</a></li>
                            <li><a href="Practice_areas.php"><i class="fal fa-angle-double-right"></i>Blog</a></li>
                            <li><a href="Contact.php"><i class="fal fa-angle-double-right"></i>Contact Us</a></li>
                            <li><a href="Logout.php"><i class="fal fa-angle-double-right"></i>Logout</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="footer-content">
                        <h2>Services</h2>
                        <ol>
                            <li><a href="Index.php"><i class="fal fa-angle-double-right"></i>Home</a></li>
                            <li><a href="About.php"><i class="fal fa-angle-double-right"></i>About Us</a></li>
                            <li><a href="Attorneys.php"><i class="fal fa-angle-double-right"></i>Services</a></li>
                            <li><a href="Practice_areas.php"><i class="fal fa-angle-double-right"></i>Blog</a></li>
                            <li><a href="Contact.php"><i class="fal fa-angle-double-right"></i>Contact Us</a></li>
                            <li><a href="Logout.php"><i class="fal fa-angle-double-right"></i>Logout</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="footer-content">
                        <h2>News Letters</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="form-group">
                            <input class="form-control" role="" name="email" type="email" placeholder="Enter Your Email">
                            <i class="fal fa-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="copy-right-card">
                    © 2020 Smarteye Technology. All Rights Reserved | Privacy Policy
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>