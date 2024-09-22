<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="http://www.yourwebsite.com/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">
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
                  <li class="nav-item  mt-3 mt-lg-0">
                    <a class="main-btn fw-bold" href="#prenota">Prenota Ora</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section id="home" class="banner_wrapper p-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url(./immagini/images/slider/slider2.webp);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>Benvenuto allo Spina's Hotel</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(./immagini/images/slider/slider1.webp);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>Benvenuto allo Spina's Hotel</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="container booking-area">
            <form action="" class="row">
                <div class=" col-lg mb-3 mb-l-0">
                    <input type="date" class="form-control" placeholder="Data">
                </div>
                <div class="col-lg mb-3 mb-l-0">
                    <input type="date" class="form-control" placeholder="Data">
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <select name="" id="" class="form-select">
                        <option selected>Adulti</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <select name="" id="" class="form-select">
                        <option selected>Bambini</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <button type="submit" class="main-btn rounded-2 px-lg-3">Cerca Disponibilita'</button>
                </div>
            </form>
        </div>
    </section>

    <section id="about" class="about_wrapper">
      <div class="container">
        <div class="row flex-lg-row flex-column-reverse">
          <div class="col-lg-6 text-center text-lg-start">
            <h3>Benvenuto allo <span>Spina's Hotel,<br class="d-none d-lg-block">prenota </span> il tuo weekend</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="" class="main-btn mt-4">Esplora</a>
          </div>
          <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
            <img src="immagini/images/about-img.svg" class="img-fluid" alt="about">
          </div>
        </div>
      </div>
    </section>

    <section id="camere" class="camere_wrapper"><!-- Non si vede il room content quando rimpicciolisci la pagina-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 section-title text-center mb-5">
            <h6>Cosa possiamo fare per voi?</h6>
            <h3>Le nostre Camere</h3>
          </div>
        </div>
        <div class="row m-0">
          <div class="col-md-4 mb-4 mb-lg-0">
            <div class="room-items">
              <img src="./immagini/images/room/room1.webp" class="img-fluid" alt="">
              <div class="room-item-wrap">
                <div class="room-content">
                  <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suite</h5>
                  <p class="text-white ">Interamente coperto dalla Wi-Fi gratuita, il Vatican Royal Suite si trova a Roma, a 10 minuti a piedi da Castel Sant’Angelo e dalle Mura Vaticane.
                    Le camere dispongono di arredamento moderno, TV a schermo piatto e scrivania, mentre le suite includono una vasca idromassaggio a vista.</p>
                    <p class="text-white fw-bold mt-lg-4">€220 / Per Notte</p>
                    <a class="main-btn border-white text-white mt-lg-5" href="">Prenota</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-lg-0">
              <div class="room-items">
                <img src="./immagini/images/room/room2.webp" class="img-fluid" alt="">
                <div class="room-item-wrap">
                  <div class="room-content">
                    <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suite</h5>
                    <p class="text-white ">Interamente coperto dalla Wi-Fi gratuita, il Vatican Royal Suite si trova a Roma, a 10 minuti a piedi da Castel Sant’Angelo e dalle Mura Vaticane.
                      Le camere dispongono di arredamento moderno, TV a schermo piatto e scrivania, mentre le suite includono una vasca idromassaggio a vista.</p>
                      <p class="text-white fw-bold mt-lg-4">€220 / Per Notte</p>
                      <a class="main-btn border-white text-white mt-lg-5" href="">Prenota</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 mb-4 mb-lg-0">
            <div class="room-items">
              <img src="./immagini/images/room/room3.webp" class="img-fluid" alt="">
              <div class="room-item-wrap">
                <div class="room-content">
                  <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suite</h5>
                  <p class="text-white">Interamente coperto dalla Wi-Fi gratuita, il Vatican Royal Suite si trova a Roma, a 10 minuti a piedi da Castel Sant’Angelo e dalle Mura Vaticane.
                    Le camere dispongono di arredamento moderno, TV a schermo piatto e scrivania, mentre le suite includono una vasca idromassaggio a vista.</p>
                    <p class="text-white fw-bold mt-lg-4">€220 / Per Notte</p>
                    <a class="main-btn border-white text-white mt-lg-5" href="">Prenota</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="servizi" class="servizi_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-title text-center mb-5">
            <h6>I servizi su misura per te</h6>
            <h3>I nostri Servizi</h3>
          </div>
        </div>

        <!--SEZIONE IMMAGINI-->
        <div class="row align-items-center service-item-wrap">
          <div class="col-lg-7 p-lg-0">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="spa" role="tabpanel">
                <img src="./immagini/images/services/service1.webp" alt="">
              </div>
              <div class="tab-pane fade" id="ristorante" role="tabpanel">
                <img src="./immagini/images/services/service2.webp" alt="">
              </div>
              <div class="tab-pane fade" id="nuoto" role="tabpanel">
                <img src="./immagini/images/services/service3.webp" alt="">
              </div>
              <div class="tab-pane fade" id="conferenze" role="tabpanel">
                <img src="./immagini/images/services/service4.webp" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-5 position-relative">
            <div class="service-menu-area">
              <ul class="nav">
                <li>
                  <a data-bs-toggle="tab" href="#spa" class="active">  <!---COLLEGATI AI DIV PRECEDENTI CON L'ID-->
                    <span class="service-icon">
                      <img src="./immagini/images/services/service-icon1.webp" alt="">
                    </span>
                    <h5>Spa,benessere e salute</h5>
                    <p><span>Spa e benessere</span> lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </a>
                </li>
                <li>
                  <a data-bs-toggle="tab" href="#ristorante">
                    <span class="service-icon">
                      <img src="./immagini/images/services/service-icon2.webp" alt="">
                    </span>
                    <h5>Spa,benessere e salute</h5>
                    <p><span>Spa e benessere</span> lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </a>
                </li>
                <li>
                  <a data-bs-toggle="tab" href="#nuoto">
                    <span class="service-icon">
                      <img src="./immagini/images/services/service-icon3.webp" alt="">
                    </span>
                    <h5>Spa,benessere e salute</h5>
                    <p><span>Spa e benessere</span> lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </a>
                </li>
                <li>
                  <a data-bs-toggle="tab" href="#conferenze">
                    <span class="service-icon">
                      <img src="./immagini/images/services/service-icon4.webp" alt="">
                    </span>
                    <h5>Spa,benessere e salute</h5>
                    <p><span>Spa e benessere</span> lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <!--SEZIONE IMMAGINI-->
    
      <div class="counter mt-5">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
              <h1>
                <span id="count1"></span>+
              </h1>
              <p>Clienti Contenti</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
              <h1>
                <span id="count2"></span>+
              </h1>
              <p>Nuovi Arrivi</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
              <h1>
                <span id="count3"></span>+
              </h1>
              <p>Valutazioni</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
              <h1>
                <span id="count4"></span>+
              </h1>
              <p>Servizio colazione</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="team_wrapper">
      <div class="cointainer">
        <div class="row">
          <div class="col-sm-12 section-title text-center mb-5">
            <h6>La nostra squadra al completo</h6>
            <h3>Team</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0 rounded-3">
              <img src="./immagini/images/team/team1.webp" class="img-fluid" alt="">
              <div class="team-info">
                <h5>Marco Spinazzola</h5>
                <p>Manager</p>
                <ul class="social-network">
                  <li><a href=""><i class="bi bi-facebook"></i></i></a></li>
                  <li><a href=""><i class="bi bi-twitter"></i></a></li>
                  <li><a href=""><i class="bi bi-google"></i></a></li>
                  <li><a href=""><i class="bi bi-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0 rounded-3">
              <img src="./immagini/images/team/team2.webp" class="img-fluid" alt="">
              <div class="team-info">
                <h5>Luca Spinazzola</h5>
                <p>Reciption Office</p>
                <ul class="social-network">
                  <li><a href=""><i class="bi bi-facebook"></i></i></a></li>
                  <li><a href=""><i class="bi bi-twitter"></i></a></li>
                  <li><a href=""><i class="bi bi-google"></i></a></li>
                  <li><a href=""><i class="bi bi-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0 rounded-3">
              <img src="./immagini/images/team/team3.webp" class="img-fluid" alt="">
              <div class="team-info">
                <h5>Luigi Spinazzola</h5>
                <p>Chef</p>
                <ul class="social-network">
                  <li><a href=""><i class="bi bi-facebook"></i></i></a></li>
                  <li><a href=""><i class="bi bi-twitter"></i></a></li>
                  <li><a href=""><i class="bi bi-google"></i></a></li>
                  <li><a href=""><i class="bi bi-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0 rounded-3">
              <img src="./immagini/images/team/team4.webp" class="img-fluid" alt="">
              <div class="team-info">
                <h5>Franca Spinazzola</h5>
                <p>Addetta pulizia camere</p>
                <ul class="social-network">
                  <li><a href=""><i class="bi bi-facebook"></i></a></li>
                  <li><a href=""><i class="bi bi-twitter"></i></a></li>
                  <li><a href=""><i class="bi bi-google"></i></a></li>
                  <li><a href=""><i class="bi bi-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="galleria" class="galleria_wrapper">
      <div class="container">
        <div class="row">
          <div class=" col-sm-12 section-title text-center mb-5">
            <h6>Le migliori foto del nostro Hotel</h6>
            <h3>Gallery</h3>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-3 col-md-6 gallery-item">
            <img src="./immagini/images/gallery/1.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
          <div class="col-lg-3 col-md-6 gallery-item">
            <img src="./immagini/images/gallery/2.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
          <div class="col-lg-3 col-md-6 gallery-item">
            <img src="./immagini/images/gallery/3.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
          <div class="col-lg-3 col-md-6 gallery-item">
            <img src="./immagini/images/gallery/4.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
          <div class="col-md-6 gallery-item">
            <img src="./immagini/images/gallery/5.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
          <div class="col-md-6 gallery-item">
            <img src="./immagini/images/gallery/6.webp" class="img-fluid w-100" alt="">
            <div class="gallery-item-content"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="prezzi" class="prezzi_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-title text-center mb-5">
            <h6>I nostri imperdibili prezzi</h6>
            <h3>Prezzi</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-4 text-center rounded-3">
              <h5 class="text-decoration-underline mb-4">Economic</h5>
              <ul class="list-unstyled">
                <li>
                    <p>Flight Ticket(2)</p>
                </li>
                <li>
                    <p>Music Concert (30% Off)</p>
                </li>
                <li>
                    <p>Restaurant (Snacks)</p>
                </li>
                <li>
                    <p>Face Make(No)</p>
                </li>
            </ul>
            <hr />
            <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
            <a href="#" class="main-btn">Sign Up</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
            <h5 class="text-decoration-underline mb-4">Economic</h5>
            <ul class="list-unstyled">
                <li>
                    <p>Flight Ticket(2)</p>
                </li>
                <li>
                    <p>Music Concert (30% Off)</p>
                </li>
                <li>
                    <p>Restaurant (Snacks)</p>
                </li>
                <li>
                    <p>Face Make(No)</p>
                </li>
            </ul>
            <hr />
            <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
            <a href="#" class="main-btn">Sign Up</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
            <h5 class="text-decoration-underline mb-4">Economic</h5>
            <ul class="list-unstyled">
                <li>
                    <p>Flight Ticket(2)</p>
                </li>
                <li>
                    <p>Music Concert (30% Off)</p>
                </li>
                <li>
                    <p>Restaurant (Snacks)</p>
                </li>
                <li>
                    <p>Face Make(No)</p>
                </li>
            </ul>
            <hr />
            <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
            <a href="#" class="main-btn">Sign Up</a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
            <h5 class="text-decoration-underline mb-4">Economic</h5>
            <ul class="list-unstyled">
                <li>
                    <p>Flight Ticket(2)</p>
                </li>
                <li>
                    <p>Music Concert (30% Off)</p>
                </li>
                <li>
                    <p>Restaurant (Snacks)</p>
                </li>
                <li>
                    <p>Face Make(No)</p>
                </li>
            </ul>
            <hr />
            <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
            <a href="#" class="main-btn">Sign Up</a>
        </div>
    </div>
</div>
</div>
    </section>

    <section id="blog" class="blog_wrapper pb-0">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 section-title text-center mb-5">
                  <h6>Saluta i nostri visitatori</h6>
                  <h3>Blog</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 mb-4">
                  <div class="card p-0 border-0 rounded-0">
                      <img decoding="async" src="./immagini/images/blog/blog1.webp" alt="">
                      <div class="blog-content bg-white p-4">
                          <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                          <h6>By Admin - February 18, 2018</h6>
                          <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                          </p>
                          <a href="#" class="main-btn mt-2">Per saperne di piu</a>

                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-4">
                  <div class="card p-0 border-0 rounded-0">
                      <img decoding="async" src="./immagini/images/blog/blog2.webp" alt="">
                      <div class="blog-content bg-white p-4">
                          <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                          <h6>By Admin - February 18, 2018</h6>
                          <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                          </p>
                          <a href="#" class="main-btn mt-2">Per saperne di piu</a>

                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="our-partner-slider mt-5">
          <div class="container swiper our-partner">
              <div class=" swiper-wrapper">
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand1.webp"></div>
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand2.webp"></div>
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand3.webp"></div>
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand4.webp"></div>
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand5.webp"></div>
                  <div class="swiper-slide"><img decoding="async" src="./immagini/images/partners/brand6.webp"></div>
              </div>
          </div>
      </div>
    </section>

    <section id="contact" class="footer_wrapper mt-3 mt-md-0 pb-0">
      <div class="container pb-3">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <h5>Info Hotel</h5>
                  <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut laoreet
                      pharetra....</p>
                  <div class="contact-info">
                      <ul class="list-unstyled">
                          <li><a href="#"><i class="fa fa-home me-3"></i> No. 96, South City, London</a></li>
                          <li><a href="#"><i class="fa fa-phone me-3"></i>0883536985</a></li>
                          <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h5>Altri Link</h5>
                  <ul class="link-widget p-0">
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h5>Altri Link</h5>
                  <ul class="link-widget p-0">
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h5>Newsletter</h5>
                  <div class="form-group mb-4">
                      <input type="email" class="form-control bg-transparent" placeholder="Inserisci la tua email">
                      <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Iscriviti</button>
                  </div>
                  <h5>Rimani connesso</h5>
                  <ul class="social-network d-flex align-items-center p-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="container-fluid copyright-section">
          <p>Copyright <a href="#">2024</a> All Rights Reserved <a href="#home"><i class="bi bi-arrow-up-circle-fill"></i></a></p>
      </div>
  </section>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <script src="js/main1.js"></script>

</html>
