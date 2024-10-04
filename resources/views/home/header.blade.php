<style>
  body {
    font-family: "Lato", sans-serif;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  </style>
<header class="header_wrapper">
   <nav class="navbar navbar-expand-lg">
       <div class="container">
         <a class="navbar-brand" href="{{route('home')}}">
           <img src="immagini/logo4spina.png" claass="img-fluid" style="width: 100px; border-radius:50%;" alt="logo">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <!--<span class="navbar-toggler-icon"></span> E LO INSERISCI SOTTO CON UNA ICON E FA IL MENU A TENDINA--> 
           <i class="fa-solid fa-bars-staggered navbar-toggler-icon"></i>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
           <ul class="navbar-nav menu-navbar-nav">
             @if (Route::has('login'))
                     @auth
                           <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav ml-auto">
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="room/{{Auth()->user()->foto}}" class="nav-osahan-pic rounded-pill"> {{Auth()->user()->name}}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                                      @if(Auth()->user()->usertype == 'admin')
                                      <a class="dropdown-item" href="{{route('homea')}}"><i class="icofont-food-cart"></i>Admin Dashboard</a>
                                      @endif
                                      </a>
                                      <a class="dropdown-item" href="{{route('prenotazioni11')}}"><i class="icofont-food-cart"></i> BackOffice</a>
                                      <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                          <button type="submit" class="dropdown-item" ><a class=""><i class="icofont-credit-card"></i>Logout</a></button>
                                      </form>
                                    </div>
                                 </li>
                                 <li class="nav-item dropdown dropdown-cart">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="openNav()">
                                    <i class="fas fa-shopping-basket"></i> Carrello
                                    <span class="badge badge-success">5</span>
                                    </a>


                                    <div id="mySidenav" class="sidenav">
                                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                      <a href="#">About</a>
                                      <a href="#">Services</a>
                                      <a href="#">Clients</a>
                                      <a href="#">Contact</a>
                                    </div>
                                    <!--
                                    <div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-left shadow-sm border-0">
                                       <div class="dropdown-cart-top-header p-4">
                                          <img class="img-fluid mr-3" alt="osahan" src="img/cart.jpg">
                                          <h6 class="mb-0">Gus's World Famous Chicken</h6>
                                          <p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
                                          <small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
                                       </div>
                                       <div class="dropdown-cart-top-body border-top p-4">
                                          <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1   <span class="float-right text-secondary">$314</span></p>
                                          <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Corn & Peas Salad x 1   <span class="float-right text-secondary">$209</span></p>
                                          <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1  <span class="float-right text-secondary">$133</span></p>
                                          <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1   <span class="float-right text-secondary">$314</span></p>
                                          <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1   <span class="float-right text-secondary">$209</span></p>
                                       </div>
                                       <div class="dropdown-cart-top-footer border-top p-4">
                                          <p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$499</span></p>
                                          <small class="text-info">Extra charges may apply</small>  
                                       </div>
                                       <div class="dropdown-cart-top-footer border-top p-2">
                                          <a class="btn btn-success btn-block btn-lg" href="checkout.html"> Checkout</a>
                                       </div>
                                    </div>-->
                                 </li>
                              </ul>
                           </div>          
                     @else
                     <li class="nav-item">
                      <a class="nav-link fw-bold active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fw-bold" href="#about">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fw-bold" href="#camere">Camere</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link fw-bold" href="#servizi">Servizi</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link fw-bold" href="#team">Team</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link fw-bold" href="#galleria">Gallery</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link fw-bold" href="#prezzi">Prezzi</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link fw-bold" href="#blog">Blog</a>
                    </li>
                     <li class="nav-item  mt-3 mt-lg-0">
                       <a class="main-btn fw-bold" href="#prenota">Prenota Ora</a>
                     </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{route('login')}}">Login</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{route('register')}}">Registrati</a>
                      </li>
                         @if (Route::has('register'))
                             <a href="{{ route('login') }}"></a>
                         @endif
                     @endauth
             @endif
           </ul>
         </div>
       </div>
     </nav>
</header>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>