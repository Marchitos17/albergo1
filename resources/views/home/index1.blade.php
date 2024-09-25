<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    @include('home.header')

    @include('home.slider')

    @include('home.about')

    @include('home.room')

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

    @include('home.gallery')

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

    @include('home.footer')
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <script src="js/main1.js"></script>

</html>
