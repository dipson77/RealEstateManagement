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
                <li class="nav-item">
                    <a class="nav-link btn-outline-success" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-success" href="agent.php">Agent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-success" href="admit.php">Booking</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="property.php">Properties</a>
                </li>
               
            </ul>
           
        </div>
    </nav>

   

   

      <!-- welcome start -->
     <div id="carouselId" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/third.png" class="img-fluid" alt="First slide" style= "width: 1550px; height:auto; ">
                <div class="container">
              <div class="carousel-caption ">
                <h1>Find Your Dream Home</h1>
                <p></p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore more</a></p>
              </div>
            </div>
            </div>
            
        </div>
       
     </div>

     <form method="POST" action="search.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="ptype">
                                                <option value="">Property Type</option>
                                                <option value="residental">Residental</option>
                                                <option value="commercial">Commercial</option>
												<option value="apartment">Apartment</option>
												
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="price">
                                                <option value="">Price Limit</option>
												<option value="min-price">$10,000</option>
												<option value="">$50,000</option>
                                                <option value="max-price">$100,000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="location" placeholder="Enter City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-success w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
     <!-- Welcome Ends -->

     
        
        
    
     </div>

     


     <!-- Backend PHP start -->

    
   


     



     <div class="row">
            <div class="col-md-4">
                <h2>Apartment</h2>
                <img src="images/galaxyapartment.png" alt="web" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                <p><a class="btn-lg btn-primary" href="#" role="button">Price "$20,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class="btn btn-outline-success"> Buy Now</a>
            </div>
            <div class="col-md-4">
                <h2>Luxury</h2>
                <img src="images/house.png" alt="mobile" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                    <p><a class="btn-lg btn-primary" href="#" role="button">Price "$70,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class=" btn btn-outline-success"> Buy Now</a>
            </div>
            <div class="col-md-4">
                <h2>Poolside Apartment</h2>
                <img src="images/poolside.png" alt="mobile" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                <p><a class="btn-lg btn-primary" href="#" role="button">Price "$90,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class="btn btn-outline-success"> Buy Now</a>
            </div>
        </div>


        <!-- Bookings -->
        <div class="row">
            <div class="col-md-4">
                <h2>Modern Mansion</h2>
                <img src="images/villa.png" alt="web" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                <p><a class="btn-lg btn-primary" href="#" role="button">Price "$10,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class="btn btn-outline-success"> Buy Now</a>
            </div>
            <div class="col-md-4">
                <h2>Ultra Luxury</h2>
                <img src="images/ultra.png" alt="mobile" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                    <p><a class="btn-lg btn-primary" href="#" role="button">Price "$100,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class=" btn btn-outline-success"> Buy Now</a>
            </div>
            <div class="col-md-4">
                <h2>Duplex Apartment</h2>
                <img src="images/apart.png" alt="mobile" class="img-thumbnail" width="100%">
                <br><br>
                <p><a class="btn-lg btn-danger" href="#" role="button">For Sale</a></p>
                <p><a class="btn-lg btn-primary" href="#" role="button">Price "$80,000"</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                <a href="order.html" class="btn btn-outline-success"> Buy Now</a>
            </div>
        </div>

      <!-- welcome End -->
   
      <!-- Why us start -->
      
      <!-- why us End -->

      <!-- Content Start -->
      

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