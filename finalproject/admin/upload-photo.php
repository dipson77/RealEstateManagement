<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Main Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:darkblue;">
       <a class="navbar-brand" href="main.php">Dashboard</a>
       <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
           aria-expanded="false" aria-label="Toggle navigation"></button>
       <div class="collapse navbar-collapse" id="collapsibleNavId">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               
               
           </ul>
           <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
           </ul>
           
           
       </div>
   </nav>
   <!-- navbar end -->
   <!-- dashboard start -->
   <div class="container-fluid " style="padding:30px" >
    <div class="row">

    <div class="col-md-4" style="background-color: lightblue" >
        <h2 class="display-4"   >Dashboard</h2>
        <a href="add-post.php" class="btn-btn-danger btn-block btn-lg">Add New Post</a>
        <a href="view-post.php" class="btn-btn-danger btn-block btn-lg">View All Post</a>
        <a href="view-booking.php" class="btn-btn-danger btn-block btn-lg">View Booking</a>
        <a href="upload-photo.php" class="btn-btn-danger btn-block btn-lg">Update Properties</a>

        
    </div>
       <div class="col-md-8">
        
       <h2 class="display-4" >UPload Image</h2>

       <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="select"> Select Image</label>
          <input type="file" class="form-control-file" name="image" id="image" placeholder="Upload Image" aria-describedby="fileHelpId">
          
        </div>

        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
       </form>
       <?php
       if(isset($_POST['submit']))
       {
        $image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file("$image_tmp","../img//$image_name");
        echo "File uploaded successfully","<br>";
        echo "<img src='../img/$image_name' widths= 300px'>";



       }
       
       
       ?>

       </div> 
       
    

    </div>
    
   </div>
   <!-- dashboard end -->

  </body>
</html>
<?php
}
?>