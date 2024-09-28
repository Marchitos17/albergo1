<?php
   use App\Models\User;
   $profilo = User::all();
?>
<header class="header_wrapper">
   <nav class="navbar navbar-expand-lg">
       <div class="container">
         <a class="navbar-brand" href="{{url('/')}}">
           <img src="immagini/logo4spina.png" claass="img-fluid" style="width: 100px; border-radius:50%" alt="logo">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <!--<span class="navbar-toggler-icon"></span> E LO INSERISCI SOTTO CON UNA ICON E FA IL MENU A TENDINA--> 
           <i class="fa-solid fa-bars-staggered navbar-toggler-icon"></i>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
           <ul class="navbar-nav menu-navbar-nav">
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
             @if (Route::has('login'))
                     @auth
                      <div class="flex-shrink-0 dropdown">
                         <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                         </a> 
                         <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item active" href="#"><span>Benvenuto {{Auth()->user()->name}}</span></a></li>
                            <li><hr class="dropdown-divider"></li>
                              @if(Auth()->user()->usertype == 'admin')
                                 <li><a class="dropdown-item" href="{{route('homea')}}">Admin Dashboard</a></li>
                              @endif
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                               @csrf
                                     <li><button type="submit" class="btn"><a>Logout</a></button></li>
                           </form>
                            </ul>
                      </div>
                     AGGIUSTA TRMOOOO
                  
                     @else
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