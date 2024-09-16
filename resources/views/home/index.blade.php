<?php
   use App\Models\Room;
   $camere = Room::all();    
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      @include('home.slider')
      <!-- end banner -->
      <!-- about -->
      @include('home.about')
      <!-- end about -->
      <!-- our_room -->
      @include('home.room')
      <!-- end our_room -->
      <!-- gallery -->
      @include('home.gallery')
      <!-- end gallery -->
      <!-- blog -->
      @include('home.contatti')
      <!-- end contact -->
      <!--  footer -->
      @include('home.footer')
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if (Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch (type) {
          case 'info':

              toastr.options.timeOut = 10000;
              toastr.info("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();
              break;
          case 'success':

              toastr.options.timeOut = 10000;
              toastr.success("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
          case 'warning':

              toastr.options.timeOut = 10000;
              toastr.warning("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
          case 'error':

              toastr.options.timeOut = 10000;
              toastr.error("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
      }
  @endif
</script>
</html>