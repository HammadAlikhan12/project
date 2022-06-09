<?php
include '../Conn.php';
$query="select * from client";
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
</head>
<body>
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Description</th>
        <th>City</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
        while($row=mysqli_fetch_array($result))
{
         echo'   <tr>
                <th>'.$row['Client_name'].'</th>
                <th>'.$row['Email'].'</th>
                <th>'.$row['Phone'].'</th>
                <th>'.$row['Address'].'</th>
                <th>'.$row['Client_description'].'</th>
                <th>'.$row['City_id'].'</th>
               
            </tr>';
}
            ?>
        </tbody>
        <tfoot>


        </tfoot>
    </table>

</body>
</html>
