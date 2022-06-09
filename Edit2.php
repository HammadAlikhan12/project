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
<?php
    $query="select * from appointment";
    $result=mysqli_query($conn,$query);
    ?>
<?php
if(isset($_POST['Update_appointment']))
{
$Appointment_id=$_POST['Appointment_id'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Your_name = $_POST['Your_name'];
$Last_name = $_POST['Last_name'];
$Address = $_POST['Address'];
$City_id = $_POST['City_id'];
$Your_contact_no = $_POST['Your_contact_no'];
$Date = $_POST['Date'];
$About= $_POST['About'];

$query_update1="update appointment set Name='$Name',Email='$Email',Your_name='$Your_name',Last_name='$Last_name',Address='$Address',City_id='$City_id',Your_contact_no='$Your_contact_no',Date='$Date',About='$About' where Appointment_id='$Appointment_id'";
$result_update=mysqli_query($conn,$query_update1);
if($result_update)
{
header('Location:Appointment1.php');
}

}

$query_select="select * from city";
$result_data = mysqli_query($conn,$query_select);
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
    Material Dashboard 2 by Creative Tim
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
    <a class="navbar-brand" href="Home.php"><?php echo $row['Lawyer_name']?></a>
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
               
            <div class="card-body">
              <form action='Edit2.php' method='post'>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <?php
                      if(isset($_GET['Appointment_id']))
                      {
                        $Appointment_id=$_GET['Appointment_id'];
                        $query= "select * from appointment where Appointment_id='$Appointment_id' LIMIT 1";
                        $result=mysqli_query($conn,$query);

                        if(mysqli_num_rows($result)>0)
                        {
                            foreach($result as $row)
                            {
                                ?>
                      
                        
                        <input type="hidden" id="input-username" name='Appointment_id'  value='<?php echo $row['Appointment_id']?>'class="form-control form-control-alternative"  >
                      
                    
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Lawyer_name</label>
                        <input type="text" id="input-username" name='Name'value='<?php echo $row['Name']?>' class="form-control form-control-alternative" placeholder="Username" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name='Email'value='<?php echo $row['Email']?>' class="form-control form-control-alternative" placeholder="@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name='Your_name'value='<?php echo $row['Your_name']?>' class="form-control form-control-alternative" placeholder="First name" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name='Last_name'value='<?php echo $row['Last_name']?>' class="form-control form-control-alternative" placeholder="Last name" >
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name='Address'value='<?php echo $row['Address']?>' class="form-control form-control-alternative" placeholder="Home Address"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">City</label>
                        <select name="City_id" value='<?php echo $row['city']?>'>
                       <option>-----Select City-----</option>
                       <?php
                        while($row=mysqli_fetch_array($result_data))
                        {
                          echo '<option value="'.$row['City_id'].'">'.$row['City_name'].'</option>';
                        }
                       ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Contact_no</label>
                        <input type="text" id="input-city" name='Your_contact_no' value='<?php echo $row['Your_contact_no']?>'class="form-control form-control-alternative" placeholder="0000-000000-0">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Date</label>
                        <input type="date"  name='Date' value='<?php echo $row['Date']?>'class="form-control form-control-alternative" placeholder="Date">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" name='About' value='<?php echo $row['About']?>'class="form-control form-control-alternative" placeholder="A few words about you ..."></textarea>
                  </div>
                  <div class="text-center">
                      <input type="submit" name="Update_appointment" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" style="background:#2A1915;color:white" value="Update"/>
                    </div>
                </div>
              </form>
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
