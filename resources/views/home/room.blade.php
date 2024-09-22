<?php
   use App\Models\Room;
   $camere = Room::all();    
?>

<!--<div  class="our_room">
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
                   <figure><img style="height:200px; width:350px;" src="room/{{$cameree->immagine}}" alt="#" /></figure> IMPORTANTE GRANDEZZA FOTO
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
 </div>-->

 <section id="camere" class="camere_wrapper"><!-- Non si vede il room content quando rimpicciolisci la pagina-->
   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 section-title text-center mb-5">
         <h6>Cosa possiamo fare per voi?</h6>
         <h3>Le nostre Camere</h3>
       </div>
     </div>
     <div class="row m-0">
      @foreach ($camere as $cameree)
       <div class="col-md-4 mb-4 mb-lg-0">
         <div class="room-items">
           <img src="room/{{$cameree->immagine}}" class="img-fluid" alt="">
           <div class="room-item-wrap">
             <div class="room-content">
               <h5 class="text-white mb-lg-5 text-decoration-underline">{{$cameree->titolo}}</h5>
               <p class="text-white ">{!!Str::limit($cameree->descrizione,100)!!}</p>
                 <p class="text-white fw-bold mt-lg-4">€220 / Per Notte</p>
                 <a class="main-btn border-white text-white mt-lg-5" href="{{route('view_camera', $cameree->id)}}">Prenota</a>
             </div>
           </div>
         </div>
       </div>
       @endforeach
       <!--<div class="col-md-4 mb-4 mb-lg-0">
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
   -->
   </div>
 </section>