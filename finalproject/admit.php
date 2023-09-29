<!doctype html>
<html lang="en">
  <head>
    <title>Gandaki Nirman Pvt. Ltd.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="" content="Gandaki Nirman Pvt. Ltd., about us, contact us, gallery, admit now">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: tomato;">
        <a class="navbar-brand" href="index.php">Gandaki Nirman Pvt. Ltd.</a>
        
        
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link btn-outline-success" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-success" href="agent.php">Agent</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn-outline-success" href="admit.php">Booking</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="property.php">Properties</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="admit.php" class="btn btn-outline-success my-2 my-sm-0" >Booking Open</a>
            </form>
        </div>
    </nav>
   
     

      <!-- Content Start -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="fname"> First Name:</label>
                      <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" aria-describedby="helpId" required>
                     
                    </div>

                    <div class="form-group">
                      <label for="lname">Last Name:</label>
                      <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" aria-describedby="helpId" required>
                      
                    </div>

                    <div class="form-group">
                      <label for="gender">Gender:</label>
                      <select class="Form-control" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                      </select>

            
                      
                    </div>
                    <!-- DOB -->
                    <div class="form-group">
                      <label for="dob">DOB</label>
                      <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" aria-describedby="helpId" required>
                     
                    </div>
                    <div class="form-group">
                      <label for="address">Address:</label>
                      <input type="address" name="address" id="address" class="form-control" placeholder="Address" aria-describedby="helpId" required>
                      
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone:</label>
                      <input type="number" name="phone" id="phone" class="form-control" placeholder="+977-98----------" aria-describedby="helpId" required>
                      
                    </div>

                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" aria-describedby="helpId" required>
                    
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <select class="Form-control" name="subject" id="subject" required>
                          <option value="Rent Apartments">Rent Apartments</option>
                          <option value="Sell House">Sell House</option>
                          <option value="Decoration">Decoration</option>
                          <option value="Register Properties">Register Properties</option>
                        </select>

                      </div>
                      <!-- submit b4 form  -->
                    <button type="submit" class="btn btn-success btn-lg" name="submit">Submit Form</button>
                    <!-- Reset b4 form -->
                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                    <hr>
                </form>

                <?php
                include 'admin/connection.php';
                if(isset($_POST['submit']))
                {
                    $a=$_POST['fname'];
                    $b=$_POST['lname'];
                    $c=$_POST['gender'];
                    $d=$_POST['dob'];
                    $e=$_POST['address'];
                    $f=$_POST['phone'];
                    $g=$_POST['email'];
                    $h=$_POST['subject'];
                    $query="insert into reservation(first_name, last_name, gender, dob, address, phone, email, subject)values('$a','$b','$c','$d','$e','$f','$g','$h')";
                    $run=mysqli_query($conn,$query);
                    if($run)
                    {
                        echo "<script>alert('Reservation Successfull!')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Error Found, Try Again!')</script>";
                    }
                }
                ?>
         </div>

      </div>
  </div>

      <!-- Content End -->

      <!-- Footer Start -->

      <div class="container-fluid" style="padding: 20px; background-color: brown; color: gold;">
        <div class="container">
            <div class="row">
                
            <div class="col-md-4">
                <h3 Contact Us></h3>
                <p>Gandaki Nirman Pvt. Ltd.</p>
                <p>Bharatpur, Chitwan</p>
                <p>Nepal</p>
                <p>Managing Director <br>
                    Rose Shrestha</p>
                <p> phone:+977 9807249428</p>
                <p>Info: gandakiestate@gmail.com</p>

               


            </div>
            <div class="col-md-4">
                <h3>Google Map</h3>
                <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.364072644708!2d84.45493381506137!3d27.675140282805327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e5c6a13310a5%3A0x9436d48444c28ffc!2sISMT%20College%20Chitwan!5e0!3m2!1sen!2snp!4v1671157710415!5m2!1sen!2snp" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </p>
            </div>
            <div class="col-md-4">
                <h3>Social Media Link</h3>
                <h1>
                <a href="https://www.facebook.com"> <ion-icon name="logo-facebook"></ion-icon></a>
               
                <a  href="https://instagram.com"> <ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://linkedin.com"> <ion-icon name="logo-linkedin"></ion-icon></a>
                
                </h1>
              

            </div>

            </div>
            <p class="text-center">All right reserved © Gandaki Nirman Pvt. Ltd.. </p>
        </div>
        
      </div>
      <!-- footer End -->
     
</body>
</html>