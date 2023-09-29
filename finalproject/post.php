<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Gandaki Nirman Pvt. Ltd.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Introduction of Gandaki Nirman Pvt. Ltd., Services, Contact, Online Order, Online Payment">
    <meta name="keywords" content="Gandaki Nirman Pvt. Ltd., Services, Contact, Online Order, Online Payment">
    <meta name="author" content="Dipson Bhujel">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:orangered;">
        <a class="navbar-brand" href="index.php">Gandaki Nirman Pvt. Ltd.</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="admit.php" class="btn btn-outline-success my-2 my-sm-0" >Booking Open</a>
            </form>
            
        </div>
    </nav>
    <!-- navbar end -->
    
    <!-- welcome start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">News and Events</h1>
            <hr class="my-2">
        </div>
    </div>
    <!-- welcome end -->
    <!-- content start -->
    <div class="container" style="padding: 40px;">
        <div class="row">
        <?php
        include 'admin/connection.php';
        if(isset($_GET['id']))
        {
        $postid=$_GET['id'];
        $query="select * from post where id='$postid'";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
                {
                    $b=$row['title'];
                    $c=$row['content'];
                    $d=$row['image'];
        ?>
            <div class="col-md-9">
                <h2><?php echo $b; ?></h2>
                <p>
                <?php echo $c; ?>
                </p>
                <img src="images/<?php echo $d; ?>" alt="photo" class="img-thumbnail">
                
            </div>
            <div class="col-md-3">
                <img src="images/first.png" alt="add" class="img-thumbnail">
                <img src="images/second.png" alt="add" class="img-thumbnail">
                <img src="images/third.png" alt="add" class="img-thumbnail">
                

            </div>
        </div>
    </div>
    <?php
        }
    }
        ?>
    <!-- content end -->
    <!-- footer start -->
    <div class="container-fluid" style="padding: 20px; background-color: brown; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contact us:</h3>
                    <p>Gandaki Nirman Pvt. Ltd. <br>
                    Bharatpur, Chitwan <br>
                    Nepal</p>

                    <p>Managing Director <br>
                    Rose Shrestha</p>
                </div>
                <div class="col-md-4">
                    <h3>Google map:</h3>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.364072644708!2d84.45493381506137!3d27.675140282805327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e5c6a13310a5%3A0x9436d48444c28ffc!2sISMT%20College%20Chitwan!5e0!3m2!1sne!2snp!4v1671157623120!5m2!1sne!2snp" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Social media link:</h3>
                    <h1>
                        <a href="https://www.facebook.com/ISMTCollegeChitwan"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
                    </h1>
                    
                </div>
            </div>
            <p class="text-center">All right reserved ©  Gandaki Nirman Pvt. Ltd.</p>
        </div>
    </div>
    <!-- footer end -->
  </body>
</html>