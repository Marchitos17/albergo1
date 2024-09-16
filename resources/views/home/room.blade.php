<?php
   use App\Models\Room;
   $camere = Room::all();    
?>

<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Camere</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach ($camere as $cameree)
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img style="height:200px; width:350px;" src="room/{{$cameree->immagine}}" alt="#" /></figure> <!--IMPORTANTE GRANDEZZA FOTO-->
                </div>
                <div class="bed_room">
                   <h3>{{$cameree->titolo}}</h3>
                   <p>{!!Str::limit($cameree->descrizione,100)!!} </p>
                   <a class="read_more" href="{{route('view_camera', $cameree->id)}}"> Dettagli</a>

                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </div>