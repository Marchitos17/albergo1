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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
