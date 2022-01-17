@extends('layout.master')
@section('content')
    



    <div class="container">
        <div class="signup-content">
            <div class="signin-image">
                <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                <a href="sin_up.php" class="signup-image-link">Create an account</a>
            </div>
            <div class="signup-form">
               
    
                <h2 class="form-title">Sign up</h2>
                <link rel="stylesheet" href="{{asset('assets/material-icon/style.css')}}">
<link rel="stylesheet"
        href="{{asset('assets/material-icon/css/material-design-iconic-font.min.css')}}">
<section class="signup">

             {!! Form::open(['url' => '/signin','method' => 'post','class'=>'form-group ']) !!}
             <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
             <!-- <input type="text" name="fullname" id="name" placeholder="Your Name" value="" /> -->
            
             <div class="form-group">
             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
             <!-- {!! Form::label('username');!!} -->
             {!!Form::text('username', '',['id'=>'username','placeholder'=>'Username']);!!}
             </div>
            
            
             <div class="form-group">
             <label for="pass"><i class="zmdi zmdi-lock"></i></label>
             <!-- {!! Form::label('username');!!} -->
             
             {!!Form::password('password',['id'=>'password','placeholder'=>'Password']);!!}
             </div>
             <div class="form-group from-button">
             {!!Form::submit('Login',['class'=>'btn btn-danger']);!!}
             </div>
             {{-- <div class="signup-image">
             {!! From::file('assets/img/signup-image.jpg')!!} 
             </div> --}}
    
             {!! Form::close() !!}
                // <!-- <form method="post" action="http://localhost/crud/admin/users/signup_from_store.php"
                //     enctype="multipart/form-data">
                //     <div class="form-group">
                //         <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                //         <input type="text" name="fullname" id="name" placeholder="Your Name" value="" />
                //     </div>
                //     <div class="form-group">
                //         <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                //         <input type="text" name="username" id="username" placeholder="User Name" value="" />
                //     </div>
                //     <div class="form-group">
                //         <label for="email"><i class="zmdi zmdi-email"></i></label>
                //         <input type="email" name="email" id="email" placeholder="Your Email" value="" />
                //     </div>
                //     <div class="form-group">
                //         <label for="number"><i class="zmdi zmdi-phone"></i></label>
                //         <input type="tel" name="phone_number" id="number" placeholder="Enter your number" value="" />
                //     </div>

                //     <div class="form-group">
                //         <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                //         <input type="password" name="password" id="pass" placeholder="Password" value="" />
                //     </div>



                //     <div class="form-group form-button">
                //         <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                //     </div>
                // </form> -->
                
            {{-- <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
            </div> --}}
        </form>
        <div class="social-login">
            <span class="social-label">Or login with</span>
            <ul class="socials">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
            </ul>
        </div>
        
    </div>
</section>
@endsection