<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
      @include('admin.header')
      @include('admin.sidebar')
      <div class="page-content pb-4">
        <div class="page-header">       
          <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                  Auto
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
            </ul>
          </div>
      
          
      <div class="container">
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="82" height="77">
            <h2>Inserimento nuove camere</h2>
            <p class="lead text-red">ATTENZIONE!! Stai per aggiungere una nuova camera. Prima di inserire i dati, controlla che siano giusti!</p>
          </div>
      
          <div class="row g-5 text-center">
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Inserisci i dati</h4>
              <form class="needs-validation" method="post" action="{{route('add_camera')}}" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">            
                  <div class="col-12">
                    <label for="text" class="form-label">Nome camera <span class="text-body-secondary">(Obbligatorio)</span></label>
                    <input type="text" class="form-control" name="titolo" placeholder="Inserisci il nome della stanza">
                  </div>
                  <div class="col-12">
                    <label for="text" class="form-label">Descrizione</label>
                    <textarea type="text" class="form-control" name="descrizione" placeholder="Scrivi qualcosa sulla camera"></textarea>
                  </div>
      
                  <div class="col-12">
                    <label for="text" class="form-label">Immagine <span class="text-body-secondary">(Obbligatorio)</span></label>
                    <input type="file" class="form-control" name="immagine" id="image">
                  </div>
                  <div class="col-12 text-secondary">
                    <img id="showImage" src="{{ (!empty($data->immagine)) ? url('admin/img/'.$data->immagine) : url('img/map-close.png')}}" class="rounded-circle p-1 bg-primary" width="110">
                </div>
                </div>
      
                <hr class="my-4 bg-white">
      
                <h4 class="mb-3">Wifi</h4>
                
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="same-address" name="wifi" value="si" required>
                  <label class="form-check-label" for="same-address">Si</label>
                </div>
    
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="save-info" name="wifi" value="no" required>
                  <label class="form-check-label" for="save-info">No</label>
                </div>
      
                <hr class="my-4 bg-white">
      
                <h4 class="mb-3">Tipo Camera</h4>
      
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit"x type="radio" class="form-check-input" name="tipo" value="Camera singola" checked required>
                    <label class="form-check-label" >Camera singola</label>
                  </div>
                  <div class="form-check">
                    <input id="debit"x type="radio" class="form-check-input" name="tipo" value="Camera doppia" required>
                    <label class="form-check-label" >Camera doppia</label>
                  </div>
                  <div class="form-check">  
                    <input id="paypal"x type="radio" class="form-check-input" name="tipo" value="Camera tripla" required>
                    <label class="form-check-label" >Camera tripla</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal"x type="radio" class="form-check-input" name="tipo" value="Camera quadrupla" required>
                    <label class="form-check-label" >Camera quadrupla</label>
                  </div>
                </div>
      
                <div class="row gy-3">
                  <div class="col-md-12">
                    <label for="cc-name" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="prezzo" placeholder="" required>
                    <small class="text-body-secondary">Inserisci un prezzo valido</small>
                  </div>
                </div>
      
                <hr class="my-4 bg-white">
      
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continua</button>
              </form>
            </div>
          </div>
      </div>
    </div>

      @include('admin.footer')
  </body>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);    
        });
    });
</script>
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