<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   </head>
   <body>
      <header>
        @include('home.header')
      </header>
      <!-- header -->
      <header>
      </header>
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
          <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
          </symbol>
          <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
          </symbol>
          <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
          </symbol>
          <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
          </symbol>
        </svg>       
        
    <div class="container">
      <main>
        <div class="col-sm-12 section-title text-center mb-5 mt-3">
          <h3>Checkout</h3>
        </div>
        <!--Indicatori pagina-->
        <div class="position-relative m-4">
          <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
            <div class="progress-bar" style="width: 50%"></div>
          </div>
          <a href="{{route('view_camera',$profilo->id)}}"><button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button></a>
          <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
          <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
        </div>
        <!--Indicatori pagina-->
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Carrello</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Hotel {{$profilo->titolo}}</h6>
                  <small class="text-body-secondary">Recinto V Lucana 14, 75100 Matera, Italia</small>
                  <h6 class="my-0 text-success">Posizione eccellente — 9.6</h6>
                  <h6 class="my-0"><i class="bi bi-patch-check-fill text-success"></i>Animali ammessi</h6>
                    <h6 class="my-0"><i class="bi bi-patch-check-fill text-success"></i>Connessione WiFi gratuita</h6>
                      <h6 class="my-0"><i class="bi bi-patch-check-fill text-success"></i>Navetta aeroportuale</h6>
                        <h6 class="my-0"><i class="bi bi-patch-check-fill text-success"></i>Parcheggio</h6>
                </div>
              </li>
            </ul>
            <form action="{{route('aggiungip',$profilo->id)}}" method="post">
              @csrf
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">I dati della tua prenotazione</h6>
                  <div class="row">
                    <div class="col border-right">
                      <h6 class="my-0">Check In</h6>
                      <input type="date" name="InizioD" id="InizioD" required>
                    </div>
                    <div class="col">
                      <h6 class="my-0">Check Out</h6>
                      <input type="date" name="FineD" id="FineD" required>
                    </div>
                  
                  
                  <h6 class="my-0 pt-3">Durata totale del soggiorno:</h6>
                  <h6 class="my-0">1 notte</h6>
                  <hr class="text-dark">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <h6 class="my-0">Hai selezionato:</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        @if($profilo->tipo == 'Camera singola')
                        <h6>1 camera per 1 adulto</h6>
                      @elseif($profilo->tipo == 'Camera doppia')
                        <h6>1 camera per 2 adulti</h6>
                        @elseif($profilo->tipo == 'Camera tripla')
                        <h6>1 camera per 3 adulti</h6>
                        @elseif($profilo->tipo == 'Camera quadrupla')
                        <h6>1 camera per 4 adulti</h6>
                      @endif                      </div>
                  <a href="{{route('view_camera',$profilo->id)}}">Modifica la tua scelta</a>
                </div>
              </li>
            </ul>

            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between sfondo">
                <h3 class="my-4">Totale</h3>
                <span class="text-body-secondary text-right"><h6 class="my-0"><s>€154</s></h6>
                  <strong class="text-dark"><h2>€ {{$profilo->prezzo}}</h2></strong>
                  <small class="text-body-secondary">Include tasse e costi</small>
                    <small class="text-body-secondary">Nella valuta della struttura: 428,35€</small></span>
              </li>
            </ul>           
    
            <!--<form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Attiva</button>
              </div>
            </form><-->
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="{{Auth::user()->name}}" name="nome" required>
                  <div class="invalid-feedback">
                    Inserisci un nome valido.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Cognome</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" >
                  <div class="invalid-feedback">
                    Inserisci un cognome valido.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" placeholder="Username" >
                  <div class="invalid-feedback">
                    Inserisci un username valido.
                    </div>
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-body-secondary">(Obbligatorio)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="{{Auth::user()->email}}" required>
                  <div class="invalid-feedback">
                    Inserisci un valido indirizzo email.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Indirizzo</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" >
                  <div class="invalid-feedback">
                    Inserisci un valido indirizzo.
                  </div>
                </div>   
                <div class="col-12">
                  <label for="address" class="form-label">Telefono</label>
                  <input type="text" class="form-control" placeholder="+393269853652" name="telefono" value="{{Auth::user()->telefono}}" required>
                  <div class="invalid-feedback">
                    Inserisci un valido indirizzo.
                  </div>
                </div>   
                <div class="col-md-5">
                  <label for="country" class="form-label">Nazione</label>
                  <select class="form-select" id="country" >
                    <option value="">Scegli...</option>
                    <option>Italy</option>
                  </select>
                  <div class="invalid-feedback">
                    Inserisci una valida nazione.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">Regione</label>
                  <select class="form-select" id="state" >
                    <option value="">Scegli...</option>
                    <option>Puglia</option>
                  </select>
                  <div class="invalid-feedback">
                    Inserisci una valida regione.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">CAP</label>
                  <input type="text" class="form-control" id="zip" placeholder="" >
                  <div class="invalid-feedback">
                    Inserisci un CAP valido.
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">L'indirizzo di spedizione è lo stesso del mio indirizzo di fatturazione</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Salva queste informazioni per la prossima volta</label>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Continua con il pagamento</button>
          </div>
        </div>
      </form>
    </div>

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