<div  class="blog">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Blog</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="images/blog1.jpg" alt="#"/></figure>
                </div>
                <div class="blog_room">
                   <h3>Bed Room</h3>
                   <span>The standard chunk </span>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="images/blog2.jpg" alt="#"/></figure>
                </div>
                <div class="blog_room">
                   <h3>Bed Room</h3>
                   <span>The standard chunk </span>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="images/blog3.jpg" alt="#"/></figure>
                </div>
                <div class="blog_room">
                   <h3>Bed Room</h3>
                   <span>The standard chunk </span>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end blog -->
 <!--  contact -->
 <div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" action="{{route('aggiungi_messaggio')}}">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Nome" type="type" name="name"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="email" name="email"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Telefono" type="number" name="telefono">                          
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Inserisci qui un messaggio" type="type" Message="Name" name="message">Message</textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn">Invia</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>