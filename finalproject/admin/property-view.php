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
        <a href="add-property.php" class="btn-btn-danger btn-block btn-lg">Add Property</a>
        <a href="property-view.php" class="btn-btn-danger btn-block btn-lg">View Properties</a>
        <a href="view-booking.php" class="btn-btn-danger btn-block btn-lg">View Booking</a>
        <a href="upload-photo.php" class="btn-btn-danger btn-block btn-lg">Update Properties</a>

        
    </div>
       <div class="col-md-8">
        
       <h2 class="display-4" >View All Properties</h2>
       <table class="table table-dark table-hover table-bodered">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Property Type</th>
                <th>Location</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
        include 'connection.php';
        $query="select * from property";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
        {
            $a=$row['pid'];
            $b=$row['title'];
            $c=$row['content'];
            $d=$row['ptype'];
            $e=$row['location'];
            $f=$row['price'];
            $g=$row['image'];
        
        
        
        ?>
        <tbody>
           
            <tr>
                <td scope="row"><?php echo $a;?></td>
                <td><?php echo $b; ?></td>
                <td><?php echo $c; ?></td>
                <td><?php echo $d; ?></td>
                <td><?php echo $e; ?></td>
                <td><?php echo $f; ?></td>
                
                <td><img src="../images/<?php echo $g; ?>" width="100px"; ></td>
                <td> <a  class= "btn btn-primary" href="property-edit.php?pid=<?php echo $a; ?>&title=<?php echo $b; ?>&content=<?php echo $c;?> &ptype=<?php echo $d; ?> &location=<?php echo $e; ?> &price=<?php echo $f; ?>&image=<?php echo $g; ?>">Edit</a> </td>
                <td> <a  class= "btn btn-danger" href="property-delete.php?Del=<?php echo 
                $a; ?>">Delete</a> </td>

                
            </tr>
        </tbody>
        <?php
        }
        
        ?>

       
       </table>

      
       </div> 
       
    </div>
    
   </div>
   <!-- dashboard end -->

  </body>
</html>
<?php
}
?>