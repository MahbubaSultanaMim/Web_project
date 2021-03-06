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
     
  <div> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height: 70px;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" style="padding-right: 500px;">Roadway Travels</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ticket_booking/ticket_booking.php">Ticket Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="seat_available/seat.availability.php">Seat Availability</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin/index.php">Admin</a>
    </li>
  </ul>
</nav>

</div>


<br>
<div class="d-flex justify-content-center">
<form action="ticket.booking.submit.php" method="POST">

<div class="form-group">
    <label>Source</label>
    <select name="source" class="form-control" >
      <option>--Select Source--</option>
      <option value="Dhaka">Dhaka</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Sylhet">Sylhet</option>
      <option value="Chittagong">Chittagong</option>
</select>
</div>
<div class="form-group">
    <label >Destination</label>
    <select name="destination" class="form-control">
      <option>--Select Destination--</option>
      <option value="Dhaka">Dhaka</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Sylhet">Sylhet</option>
      <option value="Chittagong">Chittagong</option>
    </select>
</div>
<div class="form-group">
    <label >Coach</label>
    <select name="coach" class="form-control">
      <option>--Select Type--</option>
      <option value="Non AC">Non AC</option>
      <option value="AC">AC</option>
    </select>
</div>
<div class="form-group">
    <label >No. of Seats</label>
    <select name="no_of_seat" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
</div>
<div class="form-group">
  <label >Contact</label>
    <input type="text" name="contact" class="form-control">
  </div>
  <button type="submit" name="book" class="btn btn-success btn-block">Submit</button>
</form>  
</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>