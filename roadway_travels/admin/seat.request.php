<?php 

//Database Connection
include ('../database/database.connect.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- icon FONT AWESOME -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <title>Road Way</title>
    <style type="text/css">
      a,.nav-item:hover
      {
        font-size: 20px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
   

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height: 70px;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link"  style="padding-right: 500px;" >Roadway Travels</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../ticket_booking/ticket_booking.php">Ticket Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="seat_available/seat.availability.php">Seat Availability</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Admin</a>
    </li>
  </ul>
</nav>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" style="color: red;font-size: 25px;font-weight: bold;">Seat Requests</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="seat.confirm.php">Seat Confirmed</a>
    </li>
  </ul>
</nav>


<?php

$query = "SELECT * FROM reservation WHERE status=0;";
$query_run = mysqli_query($connection,$query);
?>


<br>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table id="datatableid" class="table table-bordered table-hover">
<thead class="bg-success">
<tr>
<th scope="col" class="d-none">ID</th>
<th scope="col" style="text-align: center;">ID</th>
<th scope="col"style="text-align: center;">Source</th>
<th scope="col" style="text-align: center;">Destination</th>
<th scope="col" style="text-align: center;">Coach</th>
<th scope="col" style="text-align: center;">No. of Seat</th>
<th scope="col" style="text-align: center;">Contact</th>
<th scope="col" style="text-align: center;">Action</th>
</tr>
</thead>
<?php
if($query_run)
{
foreach($query_run as $row)
{
?>
<tbody>
<tr>
<td style="text-align: center;"> <?php echo $row['id']; ?> </td>
<td style="text-align: center;"> <?php echo $row['source']; ?> </td>
<td style="text-align: center;"> <?php echo $row['destination']; ?> </td>
<td style="text-align: center;"> <?php echo $row['coach']; ?> </td>
<td style="text-align: center;"> <?php echo $row['no_of_seats']; ?> </td>
<td style="text-align: center;"> <?php echo $row['contact']; ?> </td>
<td style="text-align: center;">
<form action="seat.request.action.php" method="POST">
<input type="text" name="respective_id" hidden="hidden" value="<?php echo $row['id']; ?>">
<button class="btn btn-success" name="confirm">Confirm</button>
<button class="btn btn-danger" name="cancel">Cancel</button>
</form>
</td>
</tr>
</tbody>

<?php
}
}
else
{
echo "No Record Found";
}
?>

</table>

</div>
<br><br><br>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>