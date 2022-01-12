<!DOCTYPE html>
<html lang="en">
<head>
<x-head/>
</head>

  <body>
    <div class="page-holder">
      <!-- navbar-->
      <x-header/>
      <!--  Modal -->
      
      <!-- HERO SECTION-->
      <main id="main">


      <div class="container">
          {{$slot}}
      </div>
      </main>
      <x-footer/>
      <!-- JavaScript files-->
   <x-scripts/>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      
    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>