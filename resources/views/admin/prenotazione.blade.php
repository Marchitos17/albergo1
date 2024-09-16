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
      
          
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="82" height="77">  
          <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Mostra camere</h1>
            </div>   
            <div class="table-responsive small">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Prenotazione</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Status</th>
                    <th scope="col">Camera</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataa)
                      <tr>
                        <td><img style="width: 200px;" src="room/{{$dataa->room->immagine}}" width="50%" height="50%"></td> <!--Collegato alla relazione su modello booking-->
                        <td>{{$dataa->id}}</td>
                        <td>{{$dataa->name}}</td>
                        <td>{{$dataa->email}}</td>
                        <td>{{$dataa->telefono}}</td>
                        <td>{{$dataa->start_date}}</td>
                        <td>{{$dataa->fine_date}}</td>
                        <td>
                                @if($dataa->status == 'Approvata')
                                    <span style="color: green">{{$dataa->status}}</span>
                                @elseif($dataa->status == 'Annullata')
                                    <span style="color: red">{{$dataa->status}}</span>
                                    @elseif($dataa->status == 'Preparazione')
                                    <span style="color: yellow">{{$dataa->status}}</span>
                            @endif
                        </td>
                        <td>{{$dataa->room->titolo}}</td>
                        <td>{{$dataa->room->prezzo}}</td>
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
                                      Sei sicuro di volere eliminare la prenotazione numero {{$dataa->titolo}}?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('elimina_prenotazione',$dataa->id)}}"><button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Si</button></a>
                                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">No</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{route('approva_prenotazione',$dataa->id)}}"><button type="button" class="btn btn-success">Approva</button></a>
                                <a href="{{route('annulla_prenotazione',$dataa->id)}}"><button type="button" class="btn btn-danger">Annulla</button></a>
                          </div>
                        </td>
                      </tr> 
                    @endforeach
                </tbody>
              </table>
            </div>
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