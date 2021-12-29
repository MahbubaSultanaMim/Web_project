<?php
//Database Connection
include ('../database/database.connect.php');

if(isset($_POST['book']))
{
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $coach = $_POST['coach'];
    $no_of_seat = $_POST['no_of_seat'];
    $contact = $_POST['contact'];
    $status=0;

    $query = "INSERT INTO reservation (no_of_seats,contact,status,source,destination,coach) VALUES ('$no_of_seat','$contact','$status','$source','$destination','$coach');";

    $query_run = mysqli_query($connection,$query);

	if($query_run)
    {
        echo '<script> alert("Booking Submitted");</script>';
        echo "<script type='text/javascript'>
        document.location='../index.php'</script>";
    }
    else
    {
        echo '<script> alert("Booking Not Submitted");</script>';
    }
    
}
?>