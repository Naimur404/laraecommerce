@extends('layout.master')
@section('content')
    



    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <link rel="stylesheet" href="{{asset('assets/material-icon/style.css')}}">
<link rel="stylesheet"
        href="{{asset('assets/material-icon/css/material-design-iconic-font.min.css')}}">
<section class="signup">

             {!! Form::open(['url' => '/signup','method' => 'put','class'=>'form-group ']) !!}
             <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
             <!-- <input type="text" name="fullname" id="name" placeholder="Your Name" value="" /> -->
             <div class="form-group">
             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
             <!-- {!! Form::label('name', '');!!} -->
             {!!Form::text('fullname', '',['id'=>'name','placeholder'=>'Your Name']);!!}
             </div>
             <div class="form-group">
             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
             <!-- {!! Form::label('username');!!} -->
             {!!Form::text('username', '',['id'=>'username','placeholder'=>'Username']);!!}
             </div>
             <div class="form-group">
             <label for="email"><i class="zmdi zmdi-email"></i></label>
             <!-- {!! Form::label('username');!!} -->
             {!!Form::email('username', '',['id'=>'email','placeholder'=>'Email']);!!}
             </div>
             <div class="form-group">
             <label for="number"><i class="zmdi zmdi-phone"></i></label>
             <!-- {!! Form::label('username');!!} -->
             {!!Form::number('phone_number', '',['id'=>'number','placeholder'=>'Enter your Number']);!!}
             </div>
             <div class="form-group">
             <label for="pass"><i class="zmdi zmdi-lock"></i></label>
             <!-- {!! Form::label('username');!!} -->
             
             {!!Form::password('password',['id'=>'password','placeholder'=>'Password']);!!}
             </div>
             <div class="form-group from-button">
             {!!Form::submit('Register',['class'=>'btn btn-danger']);!!}
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
            </div>
            <div class="signup-image">
                <figure><img src="assets/img/signup-image.jpg" alt="sing up image"></figure>
                <a href="login.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection