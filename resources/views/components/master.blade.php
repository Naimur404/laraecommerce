<!DOCTYPE html>
<html lang="en">
<head>
<x-head/>
</head>

  <body>
  
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
      <x-scripts/>
      <!-- JavaScript files-->
   
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
  
</html>