<?php
include 'connection.php';
if(isset($_GET['submit']))
{
    $a=$_GET['pid1'];
    $b=$_GET['title1'];
    $c=$_GET['content1'];
    $d=$_GET['ptype1'];
    $e=$_GET['location1'];
    $f=$_GET['price1'];
    $g=$_GET['image1'];
    $query="update property set title='$b', content='$c',ptype='$d', location='$e', price='$f',  image='$g' where pid='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:property-view.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";

    }

}

?>