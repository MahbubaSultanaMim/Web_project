<?php
//Database Connection
include ('../database/database.connect.php');

if(isset($_POST['deselect']))
{
    $id = $_POST['seat_id'];


    $query = "UPDATE bus_seat SET status=0 WHERE id='$id';";
    $query_run = mysqli_query($connection,$query);

	if($query_run)
    {
        echo "<script type='text/javascript'>
        document.location='seat.availability.php'</script>";
    }
    else
    {
        echo '<script> alert("Error");</script>';
    }
    
}
elseif(isset($_POST['select']))
{
    $id = $_POST['seat_id'];


    $query = "UPDATE bus_seat SET status=1 WHERE id='$id';";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo "<script type='text/javascript'>
        document.location='seat.availability.php'</script>";
    }
    else
    {
        echo '<script> alert("Error");</script>';
    }
}
?>