<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get Started</title>
        
        <!-- CSS only -->
       
<link rel="stylesheet" href="style1.css">

    </head>
    <body>
     
      
           <!----------------------------------------FORM SECTION--------------------------------------------------->
           
           <section id ="form">
               <div class="hero">
                   <div class="form-box">
                       <div class="button-box">
                         <div class="btn">

                         </div>
                       
                            <button type="button" class="toggle-btn" onclick="login()">Log In </button>
                            
                            <button type="button" class="toggle-btn" onclick="register()">Register</button>
                       
                   </div>
               
               <div class="social-icons">
                <img src="images/facebook.png" alt="">
                <img src="images/twitter.png" alt="">
                <img src="images/google-plus.png" alt="">
                

                </div>
                <form method="POST" id="login" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                <form id="register" class="input-group">
                  
                  <input type="text" class="input-field" Placeholder="Email Id"required>
                  
                  <input type="text" class="input-field" Placeholder="Mobile Number"required>
                  <input type="text" class="input-field" Placeholder="Enter Password"required>
                   <input type="checkbox" class="check-box"><span>I Agree To The Terms & Conditions.</span>
                    
                    <button type="submit" class="submit-btn">Register</button>

                </form>
                </div>
                </div> 
           </section>
            
           <script>
             var x=document.getElementById("login");
             var y=document.getElementById("register");
             var z=document.getElementById("btn");
            
                 function register() {
                   x.style.left="-400px";
                   y.style.left="50px";
                   z.style.left="-110px";

                 }

                 function login() {
                   x.style.left="50px";
                   y.style.left="450px";
                   z.style.left="0px";

                 }

        </script>
          </body>
        </html>