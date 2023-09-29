<?php
include 'connection.php';
if(isset($_GET['submit']))
{
    $a=$_GET['id1'];
    $b=$_GET['title1'];
    $c=$_GET['content1'];
    $d=$_GET['image1'];
    $query="update post set title='$b', content='$c', image='$d' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-post.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";

    }

}

?>