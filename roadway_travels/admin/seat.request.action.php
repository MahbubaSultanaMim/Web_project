<?php
//Database Connection
include ('../database/database.connect.php');

if(isset($_POST['confirm']))
{
    $id = $_POST['respective_id'];
    $status=1;

    $query = "UPDATE reservation SET status=1 WHERE id='$id';";
    $query_run = mysqli_query($connection,$query);

	if($query_run)
    {
        echo '<script> alert("Ticket Confirmed");</script>';
        echo "<script type='text/javascript'>
        document.location='../index.php'</script>";
    }
    else
    {
        echo '<script> alert("Error");</script>';
    }
    
}
elseif(isset($_POST['cancel']))
{
    $id = $_POST['respective_id'];

    $query = "DELETE FROM reservation WHERE id='$id';";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Ticket Cancelled");</script>';
        echo "<script type='text/javascript'>
        document.location='../index.php'</script>";
    }
    else
    {
        echo '<script> alert("Error");</script>';
    }
}
?>