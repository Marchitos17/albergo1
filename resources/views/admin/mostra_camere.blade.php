<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
      @include('admin.header')
      @include('admin.sidebar')
      <div class="page-content pb-4">
        <div class="page-header">      
          <div class="container-fluid"> 
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
     </div>
     <div class="container-fluid">      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Mostra camere</h1>
            </div>   
            <div class="table-responsive small">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">ID</th>
                    <th scope="col">Camera</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Wifi</th>
                    <th scope="col">Tipo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataa)
                      <tr>
                        <td><img src="room/{{$dataa->immagine}}" width="50%" height="50%"></td>
                        <td>{{$dataa->id}}</td>
                        <td>{{$dataa->titolo}}</td>
                        <td>{{$dataa->descrizione}}</td>
                        <td>{{$dataa->prezzo}}</td>
                        <td>{{$dataa->wifi}}</td>
                        <td>{{$dataa->tipo}}</td>
                        <td>

                            <a href="" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg>
                            </a>
                            <div class="modal fade text-center" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Support Sito</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">

                                    <form class="needs-validation" method="post" action="{{route('edit_camera',$dataa->id)}}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row g-3">
                                        <div class="col-12 text-secondary mb-4 mt-4">
                                          <img id="showImage" src="{{ (!empty($dataa->immagine)) ? url('room/'.$dataa->immagine) : url('img/map-close.png')}}" class="rounded-circle p-1 bg-primary" width="110">
                                        </div>            
                                        <div class="col-12">
                                          <label for="text" class="form-label">Nome camera <span class="text-body-secondary">(Obbligatorio)</span></label>
                                          <input type="text" class="form-control" name="titolo" placeholder="Inserisci il nome della stanza" value="{{$dataa->titolo}}">
                                        </div>
                                        <div class="col-12">
                                          <label for="text" class="form-label">Descrizione</label>
                                          <textarea type="text" class="form-control" name="descrizione" placeholder="Scrivi qualcosa sulla camera" value="{{$dataa->descrizione}}">{{$dataa->descrizione}}</textarea>
                                        </div>
                                        <div class="col-12">
                                          <label for="text" class="form-label">Immagine <span class="text-body-secondary">(Obbligatorio)</span></label>
                                          <input type="file" class="form-control" name="immagine" id="image">
                                        </div>
                                      </div>
                            
                                      <hr class="my-4 bg-white">
                            
                                      <h4 class="mb-3">Wifi ({{$dataa->wifi}})</h4>
                                      
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="same-address" name="wifi" value="si" required>
                                        <label class="form-check-label" for="same-address">Si</label>
                                      </div>
                          
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="save-info" name="wifi" value="no" required>
                                        <label class="form-check-label" for="save-info">No</label>
                                      </div>
                            
                                      <hr class="my-4 bg-white">
                            
                                      <h4 class="mb-3">Tipo Camera ({{$dataa->tipo}})</h4>
                            
                                      <div class="my-3">
                                        <div class="form-check">
                                          <input id="credit"x type="radio" class="form-check-input" name="tipo" value="Camera singola" required>
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
                                          <input type="number" class="form-control" name="prezzo" placeholder="" value="{{$dataa->prezzo}}" required>
                                          <small class="text-body-secondary">Inserisci un prezzo valido</small>
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continua</button>                                  </div>
                                </div>
                              </form>
                              </div>
                            </div>

                        </td>
                        
                        <td>

                            <a href="" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                              </svg>
                            </a>

                            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Support Sito</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      Sei sicuro di volere eliminare la room {{$dataa->titolo}}?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('elimina_camera',$dataa->id)}}"><button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Si</button></a>
                                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">No</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
                      </tr> 
                    @endforeach
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
      </div>
    </div>
      @include('admin.footer')
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
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