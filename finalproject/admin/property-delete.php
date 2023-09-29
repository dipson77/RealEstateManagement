<?php
include 'connection.php';
if(isset($_GET['Del']))
{
    $delid=$_GET['Del'];
    $query="delete from property where pid='$delid'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:property-view.php");

    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}


?>