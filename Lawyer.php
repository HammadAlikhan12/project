<?php
session_start();
include '../Conn.php';
if($_SESSION["Admin"]==null)
{
header("Location:Admin_login.php");
}
$query="select * from lawyer";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<table id="example" class="display nowrap" style="width:50%">
        <thead>
            <tr>
            <th>Name</th>
        <th>Service</th>
        <th>About</th>
        <th>Case_done</th>
        <th>Contact_no</th>
        <th>Address</th>
        <th>City</th>
        <th>Experience</th>
        <th>Username</th>
        <th>Picture</th>
        <th>Action</th>
        
                
            </tr>
        </thead>
        <tbody>
            <?php
        while($row=mysqli_fetch_array($result))
{
  ?>
          <tr>
                <td><?php echo $row['Lawyer_name']?></td>
                <td><?php echo $row['Service_id']?></td>
                <td><?php echo $row['About']?></td>
                <td><?php echo $row['Case_done']?></td>
                <td><?php echo $row['Contact_no']?></td>
                <td><?php echo $row['Address']?></td>
                <td><?php echo $row['City_id']?></td>
                <td><?php echo $row['Experience']?></td>
                <td><?php echo $row['Username']?></td>
                <td><?php echo $row['img_name']?></td>
                <td>
                  <a href="Edit1.php?Lawyer_name=<?php echo $row['Lawyer_name']?>"class="btn btn-info btn-sm">Edit</a>
                  <a href="Delete1.php?Lawyer_name=<?php echo $row['Lawyer_name']?>"class="btn btn-danger btn-sm">Delete</a>
                </td>
                
               
            </tr>
            <?php
}
            ?>
        </tbody>
        <tfoot>


        </tfoot>
    </table>
    

</body>
</html>
