    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rizs Hotel</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
        <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

        <style>
            *{
                
            font-family: 'Poppins', sans-serif;
                }
            .h-font{
                font-family: 'Merienda', cursive;
            }
            .custom-bg{
                background-color:#2ec1ac;

            }
            .custom-bg:hover{
                background-color:#279e8c;

            }
        </style>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Rizs Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact us</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
                </li>
                
            
                </li>
                
            </ul>
            <div class="d-flex">
                
            
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
    Login
    </button>
    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#RegisterModal">
    Register
    </button>
            </div>
            </div>
        </div>
        </nav>
            <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form>
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                <i class="bi bi-person-circle"></i>Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
        <button type="submit" class="btn btn-primary">Login</button>

                </div>
                  </form>
        
            </div>
        </div>
        </div>
         <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form>
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                <i class="bi bi-person-circle"></i>User Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="Name" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="exampleInputPhone">
        </div>
        <div class="mb-3">
            <label for="exampleInputdate" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="exampleInputdate">
        </div>
        <div class="mb-3">
            <label for="exampleInputaddress" class="form-label">Address</label>
            <input type="address" class="form-control" id="exampleInputaddress">
        </div>

                <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
                  </form>
        
            </div>
        </div>
        </div>
 <!--carousel-->
            <div class="container-fluid px-lg-4 mt-4">
            <swiper-container class="mySwiper"space-between="30" effect="fade" navigation="true" loop="true" autoplay="true">
        <swiper-slide>
        <img src="images/carousel/IMG_15372.png" />
        </swiper-slide>
        <swiper-slide> 
        <img src="images/carousel/IMG_40905.png" />
        </swiper-slide>
        <swiper-slide>
        <img src="images/carousel/IMG_55677.png" />
        </swiper-slide>
        <swiper-slide>
        <img src="images/carousel/IMG_62045.png" />
        </swiper-slide>
        <swiper-slide>
        <img src="images/carousel/IMG_93127.png" />
        </swiper-slide>
        <swiper-slide>
        <img src="images/carousel/IMG_99736.png" />
        </swiper-slide>
        
    </swiper-container>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
            </div>
        <!--check availability form-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">
                        Check Booking Availability
                    </h5>
                        <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                            <label for="exampleInputdate" class="form-label">Check-In</label>
                <input type="date" class="form-control" id="exampleInputdate">
                
        </div>
        <div class="col-lg-3 mb-3">
                            <label for="exampleInputdate" class="form-label">Check-out</label>
                <input type="date" class="form-control" id="exampleInputdate">
                
        </div>
        <div class="col-lg-3 mb-3">
        <label for="exampleInputselect" class="form-label">Adult</label>
            <select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <option value="3">Four</option>
    <option value="3">Five</option>
    <option value="3">Six</option>
    <option value="3">Seven</option>
    <option value="3">Eight</option>
    </select>
        </div>
        <div class="col-lg-2 mb-3">
        <label for="exampleInputselect" class="form-label">Children</label>
            <select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <option value="3">Four</option>
    <option value="3">Five</option>
    <option value="3">Six</option>
    <option value="3">Seven</option>
    </select>
            </div>
            <div class="col-lg-1 mb-3">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
                    
                        </form>
                </div>
            </div>
        </div>
<!---our rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="width: 350px; margin:auto;">
                <img src="Images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6> A$200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 sofas
                    </span>
                     </div>
                     <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Tv
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heater
                    </span>

                     </div>
                     <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        
                    
                     </div>
                  <a href="#" class="btn btn-primary">Book Now</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="width: 350px; margin:auto;">
                <img src="Images/rooms/IMG_39782.png" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6> A$200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 sofas
                    </span>
                     </div>
                     <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Tv
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heater
                    </span>

                     </div>
                     <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        
                    
                     </div>
                  <a href="#" class="btn btn-primary">Book Now</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="width: 350px; margin:auto;">
                <img src="Images/rooms/IMG_11892.png" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6> A$200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 sofas
                    </span>
                     </div>
                     <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Tv
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heater
                    </span>

                     </div>
                     <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        
                    
                     </div>
                  <a href="#" class="btn btn-primary">Book Now</a>
                </div>
              </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
        </div>
    </div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13237.959666565894!2d151.1404003!3d-33.9542452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b75550c96bf5%3A0x5017d681632c8b0!2sRockdale%20NSW%202216!5e0!3m2!1sen!2sau!4v1691480871792!5m2!1sen!2sau" width="600" height="450" style="border:0;"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-lg-4">
            <div class="bg-white"></div>
            <h5>Call Us</h5>
            <i class="bi bi-phone"></i>
            <a href="tel: +6145037808" class="d-inline-block mb-2 text-decoration-none text-dark">+6145037808</a>
            <div class="bg-white"></div> <br> <br>
            <h5>Follow us</h5>
            <i class="bi bi-twitter"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Twitter</a><br>
            <i class="bi bi-facebook"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Facebook</a><br>
            <i class="bi bi-tiktok"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Tiktok</a><br>
            <i class="bi bi-instagram"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Instragram</a><br>



            
        </div>
    </div>
</div>
<div class="container-fluid bg-white mt-5">
<div class="row">
<div class="col-lg-4 p-4">
<h3 class="h-font fw-bold fs-3 mb-2">RIZS Hotel</h3>
<p>Let The Rizs hotel take you to the ends of the earth. Discover distinctive resorts in the
     world’s rarest escapes through Rizs Hotel, where immersive experiences and unspoiled natural splendor forge lasting connections. </p>
</div>
<div class="col-lg-4 p-4">
    <h5 class="mb-3">Links</h5>
    <a href="index.php" class="text-decoration-none text-dark">Home</a> <br>
    <a href="#" class="text-decoration-none text-dark">Rooms</a><br>
    <a href="contactus.php" class="text-decoration-none text-dark">Contact Us</a><br>
    <a href="about.php" class="text-decoration-none text-dark">About</a><br>

</div>
<div class="col-lg-4 p-4">
    <h5 class="mb-3"> Follow Us</h5>
    <i class="bi bi-twitter"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Twitter</a><br>
            <i class="bi bi-facebook"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Facebook</a><br>
            <i class="bi bi-tiktok"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Tiktok</a><br>
            <i class="bi bi-instagram"></i>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Instragram</a><br>




</div>
</div>
</div>







        


      
            

        


       

            






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    </body>
    </html>