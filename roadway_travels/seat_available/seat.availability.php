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
      <a class="nav-link" href="#" style="padding-right: 500px;"  >Roadway Travels</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../ticket_booking/ticket_booking.php">Ticket Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="seat_available/seat.availability.php">Seat Availability</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="../admin/index.php">Admin</a>
    </li>
  </ul>
</nav>
<br>
<h4 style="text-align: center;">Bus Seat Plan</h4>


<?php
$query = "SELECT * FROM bus_seat WHERE bus_id=1;";
$query_run = mysqli_query($connection,$query);

?>



<div style="margin-left: 540px;">
<table>
<?php
if($query_run)
{
$count=0;
foreach($query_run as $row)
{
  if($row['status']==1){
  ?>
<tr>
  <form action="seat.plan.book.php" method="POST">
<input type="text" name="seat_id" hidden="" value="<?php echo $row['id']; ?>">
<span>&nbsp<button class="btn btn-success" name="deselect" style="width: 50px;height: 50px;line-height: 5px;"><?php echo $row['seat_number']; ?>
  
</button>
&nbsp
</span>
</form>
</tr>
  <?php
}
else{
?>
<tr>
  <form action="seat.plan.book.php" method="POST">
<input type="text" name="seat_id" hidden="" value="<?php echo $row['id']; ?>">
<span>&nbsp<button class="btn btn-danger" name="select" style="width: 50px;height: 50px;line-height: 5px;"><?php echo $row['seat_number']; ?>
  
</button>
&nbsp
</span>
</form>
</tr>
<?php
}
if($count>2){
?>
<br>
<?php
  $count=-1;

}

$count=$count+1;
}


}

?>
</table>
</div>




<br><br><br>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>