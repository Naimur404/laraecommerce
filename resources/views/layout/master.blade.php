<!DOCTYPE html>
<html lang="en">
<head>
@include('partial.head')
</head>

  <body>
  <div class="page-holder">
      <!-- navbar-->
      @include('partial.header')
      <!--  Modal -->
      
      <!-- HERO SECTION-->
      <main id="main">


      
         @yield('content')
          

      </main>
      @include('partial.footer')
      @include('partial.scripts')
      <!-- JavaScript files-->
   
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
  </body>
  
</html>