<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include '../Conn.php';
if(isset($_POST['btn_law_reg']))
{
  $Lawyer_name=$_POST['Lawyer_name'];
  $service=$_POST['service'];
  $About=$_POST['About'];
  $Case_done=$_POST['Case_done'];
  $Contact_no=$_POST['Contact_no'];
  $Address=$_POST['Address'];
  $city=$_POST['city'];
  $Experience=$_POST['Experience'];
  $username=$_POST['Username'];
  $Pass=$_POST['Pass'];
  $Confirm_Password =$_POST['Confirm_Password'];
  $hash_password=password_hash($Pass,PASSWORD_DEFAULT);
  $img_name=$_FILES['img']['name'];
  //tempoprary path
  $img_path = $_FILES['img']['tmp_name'];
if($Pass == $Confirm_Password)
{
  $query="insert into lawyer values(null,'$Lawyer_name','$service','$About','$Case_done','$Contact_no','$Address','$city','$Experience','$username','$hash_password','$img_name')";
  $result=mysqli_query($conn,$query);
  move_uploaded_file($img_path,'img/'.$img_name);
  if($result)
  {
    header('Location:Lawyer_login.php');
  }
  else
  {
    echo 'invalid';
  }
}
else
  {
    $_SESSION['status'] = "Password and Confirm Password does not match";
    header('Location:Register_Lawyer.php');
  }
}

$query_select1="select * from service";
$result_data1 = mysqli_query($conn,$query_select1);

$query_select="select * from city";
$result_data = mysqli_query($conn,$query_select);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Lawyer
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

  <script src="../assets/js/sweet.js"></script>
</head>

<body class="">
  
        <!-- Navbar -->
        
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <center><h4 class="font-weight-bolder">Sign Up</h4></center>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="Register_Lawyer.php" method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-outline mb-3">
                      <input type="hidden" name="Lawyer_id" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="Lawyer_name" placeholder="Name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <select name="service">
                       <option>-----Select Service-----</option>
                       <?php
                        while($row=mysqli_fetch_array($result_data1))
                        {
                          echo '<option value="'.$row['Service_id'].'">'.$row['Service_name'].'</option>';
                        }
                       ?>
                      
                      
                     </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="About" placeholder="About" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="number" name="Case_done" placeholder="Case_done" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="phone" name="Contact_no" placeholder="Contact_no" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="address" name="Address" placeholder="Address" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <select name="city">
                       <option>-----Select City-----</option>
                       <?php
                        while($row=mysqli_fetch_array($result_data))
                        {
                          echo '<option value="'.$row['City_id'].'">'.$row['City_name'].'</option>';
                        }
                       ?>
                      
                      
                     </select>
                    </div>
                    
                    <div class="input-group input-group-outline mb-3">
                      <input type="number" name="Experience" placeholder="Experience" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="Username" placeholder="Username" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="file" name="img"placeholder="Picture" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="pass" name="Pass" placeholder="Pass" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="pass" name="Confirm_Password" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="btn_law_reg" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Sign up"/>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="Register_Lawyer.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
    if(isset($_SESSION['status'])&& $_SESSION['status']!='')
    {
      ?>
      <script>
swal({
  title: "<?php echo $_SESSION['status'];?>",
  // text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "OK. Done!",
});

      </script>
      <?php
      unset($_SESSION['status']);
    }
    
    ?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>