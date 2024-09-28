<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">{{Auth()->user()->name}}</h1>
          <p>{{Auth()->user()->email}}</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Elenco</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{url('/')}}"> <i class="icon-home"></i>Ritorna alla Homepage </a></li>
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Camere </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{route('create_camera')}}">Aggiungi camera</a></li>
                  <li><a href="{{route('view_camere')}}">Mostra camere</a></li>
                  <li><a href="#">Page</a></li>
                </ul>
              </li>
              <li><a href="{{route('prenotazioni')}}"> <i class="icon-windows"></i>Prenotazioni </a>
              <li><a href=""> <i class="icon-windows"></i>Galleria </a>
              <li><a href="{{route('messaggi')}}"> <i class="icon-windows"></i>Messaggi </a>
      </ul>
</nav>