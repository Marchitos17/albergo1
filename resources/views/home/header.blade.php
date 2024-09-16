 <!-- header inner -->
 <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo">
                      <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
             <nav class="navigation navbar navbar-expand-md navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                   <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                         <a class="nav-link" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="about.html">About</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="room.html">Camere</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="gallery.html">Gallery</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="contact.html">Contatti</a>
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
                       
                          @else
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
             </nav>
          </div>
       </div>
    </div>
 </div>