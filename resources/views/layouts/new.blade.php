<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unique Identification System</title>
        <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Icon CDN-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
      <section id="nav-bar">
             
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="images/uid logo.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="{{url('/')}}">HOME </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/service')}}">SERVICES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/testimonial')}}">TESTIMONIALS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{url('/contact')}}">CONTACT US</a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
                  </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{url('/register')}}">Get Started</a>
                  </li>
                  <li class="nav-item">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </li>
              </ul>
            </div>
          </nav>
@yield('content')
    
        <!---------------FOOTER SECTION------------------------>
        <section id="footer">
                   
            <!--<img src="images/wave 1.png" alt="" class="footer-img">-->
            <div class="container">
              <div class="row">
                <div class="col-md-4 footer-box">
                 <img src="images/uid logo.jpg">
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam et possimus aspernatur quisquam. Repellendus dolorem est excepturi nulla qui quia! Ullam temporibus modi iste minima natus sed repudiandae explicabo tempore.</p>
                </div>
                <div class="col-md-4 footer-box">
                 <h4>CONTACT US</h4>
                 <p><i class="fa fa-map-marker"></i>SRIVASTAVA & ASSOCIATE ,
                   SOHBATIYA BAGH, PRAYAGRAJ, 211006.</p>
                   <p><i class="fa fa-phone"></i>Contact: 7905248431,9559093568</p>
                     <p><i class="fa fa-envelope-square"></i>EMAIL: shivamdlegaladvisor@gmail.com, ashujt2000@gmail.com</p>
             
                </div>
                <div class="col-md-4 footer-box">
                  <p><b>SUBSCRIBE NEWSLETTER</b></p>
                     <input type="email"class="form-control" Placeholder=" Enter Your Email">
                     <button type="button" class="btn btn-primary"> Subscribe</button>
                     

                </div>
              </div>
              <hr>
              <p class="copyright">Website Crafted By: SHIVAM SRIVASTAVA (263003) & ASHUTOSH SINGH(263006)</p>
            </div>
          </section>
   </body>
</html>
