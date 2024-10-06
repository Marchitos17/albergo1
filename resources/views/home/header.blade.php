<?php
  use App\Models\Carrello;
  $data = Carrello::all();
?>
<style>
a,
a:active,
a:focus,
a:hover {
  text-decoration: none;
}
.sidenav {
  width: 0;
  position: fixed;
  z-index: 999999999;
  top: 0;
  right: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding: 40px 0;
}

.sidenav a.closebtn {
  position: absolute;
  top: 0;
  right: 15px;
  font-size: 36px;
  color: #fff;
}

.sidenav a.closebtn:hover {
  text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5),
    0 0 20px rgba(255, 255, 255, 0.2);
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}
.sidenav a.sidenav__menu-item,
.dropdown-btn {
  padding: 6px 8px;
  font-size: 1.5rem;
  color: #fff;
  display: block;
  border: none;
  background: none;
  width: 90%;
  text-align: left;
  cursor: pointer;
  margin: 6px;
  border: 1px solid transparent;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: blue;
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
}

.active {
    background-color: #004bd7;
    color: #fff;
}

.sidenav a.sidenav__menu-item:hover,
.dropdown-btn:hover {
  color: black;
  border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5),
    0 0 20px rgba(255, 255, 255, 0.2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5),
    0 0 20px rgba(255, 255, 255, 0.2);
}

.active {
  background-color: $blu-wimtv;
  color: #fff;
}

.dropdown-container {
  display: none;
  background-color: rgba(37, 32, 29, 0.2);
  padding: 1px 0 1px 8px;
}

.sidenav .fa-caret-down {
  float: right;
  font-size: 18px;
  padding: 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}

/* CUSTOM SCROLLBAR */
#mySidenav::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  background-color: #F5F5F5;
}

#mySidenav::-webkit-scrollbar {
  width: 3px;
  background-color: #F5F5F5;
}

#mySidenav::-webkit-scrollbar-thumb {
  background-color: $blu-wimtv;
  background-image: -webkit-gradient(linear, 0 0, 0 100%,
    color-stop(.5, rgba(255, 255, 255, .2)),
    color-stop(.5, transparent), to(transparent));
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
                           <div class="collapse navbar-collapse " id="navbarNavDropdown">
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
                                    <a class="nav-link dropdown-toggle open-menu" href="#" id="open-menu" onmouseover="openNav()" role="button">
                                      <i class="fas fa-shopping-basket"></i> Carrello
                                      <span class="badge badge-success">5</span>
                                    </a>
                                 </li>
                                    <div id="mySidenav" class="sidenav" onmouseout="closeNav()">
                                      <?php
                                        $totale = 0; 
                                      ?> 
                                      <div class="container">             
                                              <div class="row">
                                                    <div class="col-md-6 text-center">
                                                      <h4 class="text-center mt-4">Carrello</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="flex center sec-center" style="height:80px;color:#fff;">
                                                            <h6 id="txt" class="margin-5"></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($data as $dataa)
                                                  <div class="dropdown-cart-top-body p-1">
                                                    <img class="img-fluid mr-3" alt="osahan" src="room/{{$dataa->immagine}}" style="width: 50px;">
                                                    <p class="float-end text-body-secondary"> {{$dataa->room_nome}}</p>
                                                    <p class="float-end text-body-secondary"> {{$dataa->room_prezzo}} </p>
                                                  </div>
                                                @endforeach
                                                <div class="align-center">
                                                  <a class="sidenav__menu-item text-black text-center bg-body-secondary" href="#">Paga</a>
                                                  <a class="sidenav__menu-item text-black text-center" href="#">Vedi il carrello</a>
                                                </div>
                                            </div>
                                          </div>
                                      <!--<div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-left shadow-sm border-0">
                                        <div class="dropdown-cart-top-footer p-1 text-center">
                                          <p class="mb-0 font-weight-bold text-secondary"><h4>Carrello</h4></p>
                                      </div>
                                      @foreach ($data as $dataa)
                                        <?php $totale= $totale + $dataa->room_prezzo; ?>
                                          <div class="dropdown-cart-top-body p-1">
                                              <img class="img-fluid mr-3" alt="osahan" src="room/{{$dataa->immagine}}" style="width: 50px;">
                                              <p class="float-end text-body-secondary"> {{$dataa->room_nome}}</p>
                                              <p class="float-end text-body-secondary"> {{$dataa->room_prezzo}} </p>
                                          </div>
                                        @endforeach
                                          <div class="dropdown-cart-top-footer border-top p-4 bg-gray">
                                              <p class="mb-0 font-weight-bold text-secondary fs-5">Totale: <span class="text-dark float-end">EUR {{$totale}}</span></p>
                                          </div>
                                          <div class="dropdown-cart-top-footer border-top p-2">
                                            <div class="d-grid gap-2">
                                              <button class="btn btn-primary" type="button">Paga</button>
                                              <button class="btn" type="button">Vedi il carrello</button>
                                            </div>
                                          </div>
                                          </div>
                                        </div>-->
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
  document.getElementById("mySidenav").addEventListener("mouseover", openNav);
    document.getElementById("mySidenav").addEventListener("mouseout", closeNav);
    /* open sidebar */
    function openNav() {
        if ($(window).width() < 601) {
            document.getElementById("mySidenav").style.width = "40%";
        } else {
            document.getElementById("mySidenav").style.width = "30%";
            document.getElementById("open-menu").style.display = "none";
        }
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("open-menu").style.display = "flex";
    }

    /* dropdown-menu */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>