


  @extends('layouts.new')
  @section('content')

<!------------------- Banner Section---------------->
<section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="promo-title"> UNIQUE IDENTIFICATION SYSTEM</p>
                        <P>We Loved To Protect Your Identity Behind Your Happiness</P>
                        <p>Your Privacy Our Priority</p>
                        <a class="btn btn-primary" href="getstarted.html">Get Started</a> 
                        <a href="#"><h5><i class="fa fa-play-circle" aria-hidden="true">Watch Tutorials</a></h5></i></div>
 
                    
            
                    <div class="col-md-6 text-center">
                        
                       <img src="images/smile.png.jpg" alt="" class="img-fluid">
                   
                      </div>
                    </div>
                </div>
                
                 <!------- <img src="images/wave 1.png" alt="" class="img-fluid">------>
               
            
            
        </section>
        
        <!------------------------SEARCH YOUR  UNIQUE IDENTITY-------------------------------------------------------->
        <section id="services">
          <div class="container text-center">
            <h1 class="title">FIND YOUR UNIQUE IDENTITY</h1>
            <div class="main">
  
             
              
              <!-- Another variation with a button -->
              <form method="POST" action="{{ route('search') }}">
              @csrf
              <div class="input-group">
                <input type="text" class="form-control" name="search_value" placeholder="Find Your Identity">
                <div class="input-group-append">
                  <button class="btn btn-secondary"style="background-color:#a517ba" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
              </form>
              
                   
            
          </section>
        <!---------Service Section--------->
        
        <section id="services">
            <div class="container text-center">
              <h1 class="title">WHAT WE DO?</h1>
                <div class="row text-center">
                    <div class="col-md-4 services">
                      <img src="" alt="" class="service-img">
                      <h4>GLOBAL IDENTITY</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nam quidem, natus, reprehenderit quas deleniti consequuntur rerum quibusdam iure sequi harum impedit laborum vero temporibus ducimus debitis voluptatum ipsum sit?</p>
                    </div>
                    <div class="col-md-4 services">
                      <img src="" alt="" class="service-img">
                      <h4>GLOBAL IDENTITY</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nam quidem, natus, reprehenderit quas deleniti consequuntur rerum quibusdam iure sequi harum impedit laborum vero temporibus ducimus debitis voluptatum ipsum sit?</p>
                    </div>
                    <div class="col-md-4 services">
                      <img src="" alt="" class="service-img">
                      <h4>GLOBAL IDENTITY</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nam quidem, natus, reprehenderit quas deleniti consequuntur rerum quibusdam iure sequi harum impedit laborum vero temporibus ducimus debitis voluptatum ipsum sit?</p>
                    </div>
                    </div><button type="button"class="btn btn-primary">All Services</button>
                </div>
                
            </div>
        </section>

        <!-----------------------------------ABOUT US -SECTION----------------------------------------->
            <section id="about-us">
              <div class="container text-center">
                <h1 class="title">WHY CHOOSE US?</h1>
                <div class="row">
                  <div class="col-md-6 about-us">
                    <p class="about-title">Why We Are Different</p>
                    <ul>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      <li>We loved to Protect Your Identity Behind your Happiness.</li>
                      

                      
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <img src="images/n2.png" alt="" class="img-fluid ">
                  </div>
                </div>
                </div>
            </section>

            <!----------------TESTIMONIALS-------------------------------------->
            <section id="testimonials">
              <div class="container">
                <h1 class="title text-center">WHAT CLIENTS SAY</h1>
                <div class="row">
                  <div class="col-md-4 testimonials">
                         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo aliquid ipsam beatae facilis fugit soluta dolorum expedita illum vel recusandae quod nostrum quam dolorem consectetur, molestiae pariatur corrupti dignissimos nobis.</p>
                         <img src="images/Shivam.JPG" alt=""class="img-fluid">
                         <p class="user-detail"><b>SHIVAM SRIVASTAVA<br>MANAGEMENT HEAD at Codekar</b></p>
                  </div>
                  <div class="col-md-4 testimonials">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo aliquid ipsam beatae facilis fugit soluta dolorum expedita illum vel recusandae quod nostrum quam dolorem consectetur, molestiae pariatur corrupti dignissimos nobis.</p>
                    <img src="images/Shivam.JPG" alt=""class="img-fluid">
                    <p class="user-detail"><b>ASHISH SHUKLA <br>CEO at Codekar</b></p>
             </div>
             <div class="col-md-4 testimonials">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo aliquid ipsam beatae facilis fugit soluta dolorum expedita illum vel recusandae quod nostrum quam dolorem consectetur, molestiae pariatur corrupti dignissimos nobis.</p>
              <img src="images/Shivam.JPG" alt=""class="img-fluid">
              <p class="user-detail"><b>ASHUTOSH SINGH<br>DEVELOPER at Codekar</b></p>
       </div>
                </div>
              </div>
            </section>

            <!------------------social Media Section----------------------->
            <section id="social-media">
              <div class="container text-center">
                <p class="title text-center">FIND US ON SOCIAL MEDIA</p>
                <div class="social-icons">
                  <a href="mailto:shivamdlegaladvisor@gmail.com"> <i class="fas fa-envelope-square"style="font-size:80px"></i></a>
      <a href="https://www.facebook.com/don.shivamsri.2901/"> <i class="fab fa-facebook-f"style="font-size:80px"></i></a>
                
                  <a href=""> <i class="fab fa-whatsapp"style="font-size:80px"></i></a>
       <a href="#"><i class="fab fa-instagram"style="font-size:80px"></i></a>
      <a href="#"> <i class="fab fa-twitter"style="font-size:80px" ></i></a>
      
       </div>
              </div>
            </section>

  @endsection