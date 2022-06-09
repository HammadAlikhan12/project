<?php
session_start();
include '../Conn.php';
if($_SESSION["Admin"]==null)
{
header("Location:Admin_login.php");
}
$query_select="select * from city";
$result_data = mysqli_query($conn,$query_select);

?>
<?php
if(isset($_POST['Update_client']))
{
$Client_id=$_POST['Client_id'];
$Client_name = $_POST['Client_name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];
$Client_description = $_POST['Client_description'];
$City_id= $_POST['City_id'];


$query_update="update client set Client_name='$Client_name',Email='$Email',Phone='$Phone',Address='$Address',Client_description='$Client_description',City_id='$City_id' where Client_id='$Client_id'";
$result_update=mysqli_query($conn,$query_update);
if($result_update)
{
  $_SESSION['status']=" Data updated Successfully";
  $_SESSION['status_code']=" success";
header('Location:Client.php');
}
else
{
  $_SESSION['status']="Data not Updated";
  $_SESSION['status_code']= "error";
header('Location:Edit.php');

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>
    Admin
  </title>
  <!-- <script src="../assets/js/sweet.js"></script> -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script> 
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

		<link rel="stylesheet" href="../law-master/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../law-master/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../law-master/assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="../law-master/assets/fonts/fontawesome/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="../law-master/assets/css/slick.css">
    <link rel="stylesheet" href="../law-master/assets/css/slick-theme.css">

    <link rel="stylesheet" href="../law-master/assets/css/helpers.css">
    <link rel="stylesheet" href="../law-master/assets/css/style.css">

    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: black;
  color: white;
  padding: 35px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: grey;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 35px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: black}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: black;
}
</style>

</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
 <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="Home.php"><?php echo $_SESSION['Admin']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="Lawyer.php">Lawyer</a></li>
            <li class="nav-item"><a class="nav-link" href="Client.php">Client</a></li>
            <li class="nav-item"><a class="nav-link" href="Appointment.php">Appointment</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="Practice_areas.php">Profile</a> -->
            <li><div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="Home.php">Profile</a>
    <a href="Admin_login.php">Login</a>
    <a href="Logout.php">Logout</a>
  </div>
</div>
          </li>
            
          </ul>
        </div>
    </div>
 </nav>
    <!-- END nav -->
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

    <section>
    <div class="page-header min-vh-100">
        
        <div class="col-xl-4 col-md-5 col-md-4 d-flex ">
            <div class="col 12">
               
                <div class="card-body col 6">
                  <form action="Edit.php" method="post">
                      <?php
                      if(isset($_GET['Client_name']))
                      {
                        $Client_name=$_GET['Client_name'];
                        $query= "select * from client where Client_name='$Client_name' LIMIT 1";
                        $result=mysqli_query($conn,$query);

                        if(mysqli_num_rows($result)>0)
                        {
                            foreach($result as $row)
                            {
                                ?>
                                <div class="input-group input-group-outline mb-3">
                      
                      <input type="hidden" name="Client_id" value="<?php echo $row['Client_id']?>" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3 col 6">
                     
                      <input type="text" name="Client_name" value="<?php echo $row['Client_name']?>" placeholder="Name"class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3 col 6" >
                      <input type="email" name="Email" value="<?php echo $row['Email']?>" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3  col 6">
                      
                      <input type="number" name="Phone" value="<?php echo $row['Phone']?>" placeholder="Phone" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3 col 6">
                      
                      <input type="text" name="Address" value="<?php echo $row['Address']?>" placeholder="Address" class="form-control">
                    </div>
                    
                    <div class="input-group input-group-outline mb-3  col 6">
                    
                      <input type="text" name="Client_description" value="<?php echo $row['Client_description']?>" placeholder="Description" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3 col 6">
                      <label class="form-label"></label>
                     <select name="City_id"value="<?php echo $row['city']?>" >
                       <option>-----Select City-----</option>
                       <?php
                        while($row=mysqli_fetch_array($result_data))
                        {
                          echo '<option value="'.$row['City_id'].'">'.$row['City_name'].'</option>';
                        }
                       ?>
                     </select>
                    </div>
                    
                    
                                <?php
                            }
                        }
                        else
                        {
                            echo '<h4>No Record Found.!</h4>';
                        }
                      }
                      
                      ?>
                  
                    
                    <div class="text-center">
                      <input type="submit" name="Update_client" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Update"/>
                    </div>
                    
                  </form>
                </div>
            </div>
         </div>
      </div>
    </section>
    
    
    

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
