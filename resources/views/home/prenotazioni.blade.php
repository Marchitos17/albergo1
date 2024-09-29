<!doctype html>
<html lang="en">
   <head>
    @include('home.css')
    <link href="css/osahan.css" rel="stylesheet">
   </head>
   <body>
      @include('home.header')

      
      <section class="section pt-4 pb-4 osahan-account-page">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="osahan-account-page-left shadow-sm rounded bg-white h-100">
                     <div class="border-bottom p-4">
                        <div class="osahan-user text-center">
                           <div class="osahan-user-media">
                              <img class="mb-3 rounded-pill shadow-sm mt-1" src="https://github.com/mdo.png" alt="gurdeep singh osahan">
                              <div class="osahan-user-media-body">
                                 <h6 class="mb-2">Gurdeep Singh</h6>
                                 <p class="mb-1">+91 85680-79956</p>
                                 <p>iamosahan@gmail.com</p>
                                 <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="profilo-tab" data-toggle="tab" href="#profilo" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Profilo Utente</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="ordini-tab" data-toggle="tab" href="#ordini" role="tab" aria-controls="favourites" aria-selected="false"><i class="icofont-heart"></i> Prenotazioni</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pagamento-tab" data-toggle="tab" href="#pagamento" role="tab" aria-controls="payments" aria-selected="false"><i class="icofont-credit-card"></i> Carte Attive</a>
                        </li>
                     </ul>
                  </div>
               </div>
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profilo" role="tabpanel" aria-labelledby="profilo-tab">
                     

                     <div class="card text-center">
                        <div class="card-header">
                           <div class="position-relative m-4">
                              <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                <div class="progress-bar" style="width: 50%"></div>
                              </div>
                                 <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                       <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;"
                                       id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">1</button>
                                    </li>
                                    <li class="nav-item">
                                       <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;"
                                       id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">2</button>                           
                                    </li>
                                    <li class="nav-item">
                                       <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;"
                                       id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">3</button>                       
                                    </li>
                                 </ul>

                                 <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                       <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%">10%</div>
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Dettagli Profilo</h5>
                                          <p class="card-text">Compila tutte le informazioni qui sotto.</p>
                                          
                                          <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-firstname-input">First name</label>
                                                     <input type="text" class="form-control" id="progresspill-firstname-input" placeholder="Enter your First Name">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-lastname-input">Last name</label>
                                                     <input type="text" class="form-control" id="progresspill-lastname-input" placeholder="Enter your Last Name">
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-phoneno-input">Phone</label>
                                                     <input type="text" class="form-control" id="progresspill-phoneno-input" placeholder="Enter your Phone No">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-email-input">Email</label>
                                                     <input type="email" class="form-control" id="progresspill-email-input" placeholder="Enter your Email">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <div class="mb-3">
                                                     <label for="progresspill-address-input">Address</label>
                                                     <textarea id="progresspill-address-input" class="form-control" rows="2" placeholder="Enter your address"></textarea>
                                                 </div>
                                             </div>
                                         </div>

                                        </div>
                                        <div class="card-footer text-muted">
                                          <button class="btn btn-primary" onclick="$('#nav-profile-tab').trigger('click')">Prossimo</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                       <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%">50%</div>
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Documenti</h5>
                                          <p class="card-text">Compila tutte le informazioni qui sotto.</p>
                                          
                                          <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-pancard-input" class="form-label">PAN Card</label>
                                                     <input type="text" class="form-control" id="progresspill-pancard-input" placeholder="Enter your PAN Card No">
                                                 </div>
                                             </div>

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-vatno-input" class="form-label">VAT/TIN No.</label>
                                                     <input type="text" class="form-control" id="progresspill-vatno-input" placeholder="Enter your VAT/TIN No">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-cstno-input" class="form-label">CST No.</label>
                                                     <input type="text" class="form-control" id="progresspill-cstno-input" placeholder="Enter your CST No">
                                                 </div>
                                             </div>

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-servicetax-input" class="form-label">Service Tax No.</label>
                                                     <input type="text" class="form-control" id="progresspill-servicetax-input" placeholder="Enter your Service Tax No">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-companyuin-input" class="form-label">Company UIN</label>
                                                     <input type="text" class="form-control" id="progresspill-companyuin-input" placeholder="Enter your Company UIN">
                                                 </div>
                                             </div>

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-declaration-input" class="form-label">Declaration</label>
                                                     <input type="text" class="form-control" id="progresspill-declaration-input" placeholder="Enter your Declaration">
                                                 </div>
                                             </div>
                                         </div>

                                        </div>
                                        <div class="card-footer text-muted">
                                          <button class="btn btn-primary float-start" onclick="$('#nav-home-tab').trigger('click')">Precedente</button>
                                          <button class="btn btn-primary float-end" onclick="$('#nav-contact-tab').trigger('click')">Prossimo</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                       <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Dettagli Banca</h5>
                                          <p class="card-text">Compila tutte le informazioni qui sotto.</p>
                                          
                                          <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-namecard-input" class="form-label">Name on Card</label>
                                                     <input type="text" class="form-control" id="progresspill-namecard-input" placeholder="Enter your Name on Card">
                                                 </div>
                                             </div>

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label class="form-label">Credit Card Type</label>
                                                     <select class="form-select">
                                                           <option selected>Select Card Type</option>
                                                           <option value="AE">American Express</option>
                                                           <option value="VI">Visa</option>
                                                           <option value="MC">MasterCard</option>
                                                           <option value="DI">Discover</option>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-cardno-input" class="form-label">Credit Card Number</label>
                                                     <input type="text" class="form-control" id="progresspill-cardno-input" placeholder="Enter your Credit Card Number">
                                                 </div>
                                             </div>

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-card-verification-input" class="form-label">Card Verification Number</label>
                                                     <input type="text" class="form-control" id="progresspill-card-verification-input" placeholder="Enter your Card Verification Number">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="progresspill-expiration-input" class="form-label">Expiration Date</label>
                                                     <input type="date" class="form-control" id="progresspill-expiration-input">
                                                 </div>
                                             </div>

                                         </div>

                                        </div>
                                        <div class="card-footer text-muted">
                                          <button class="btn btn-primary" onclick="$('#nav-profile-tab').trigger('click')">Precedente</button>
                                          <button class="btn btn-primary" type="submit">Salva</button>
                                        </div>
                                    </div>
                                  </div>
                           </div>
                        </div>
                        
                      </div>

                     
                     








                    </div>
                    <div class="tab-pane fade" id="ordini" role="tabpanel" aria-labelledby="ordini-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
                                 <a href="#">
                                    <div class="media">
                                       <img class="mr-4" src="img/3.jpg" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                          <h6 class="mb-2">
                                 <a href="detail.html" class="text-black">Gus's World Famous Fried Chicken
                                 </a></h6>
                                 <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 730 S Mendenhall Rd, Memphis, TN 38117, USA
                                 </p>
                                 <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                 <p class="text-dark">Veg Masala Roll x 1, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                 </p>
                                 <hr>
                                 <div class="float-right">
                                 <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
                                 <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a>
                                 </div>
                                 <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>  $300
                                 </p>
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
                                 <a href="#">
                                    <div class="media">
                                       <img class="mr-4" src="img/4.jpg" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                          <h6 class="mb-2">
                                 <a href="detail.html" class="text-black">Jimmy's Famous American Tavern
                                 </a></h6>
                                 <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1733 Ocean Ave, Santa Monica, CA 90401, USA
                                 </p>
                                 <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                 <p class="text-dark">Veg Masala Roll x 5, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                 </p>
                                 <hr>
                                 <div class="float-right">
                                 <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
                                 <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a>
                                 </div>
                                 <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>  $500
                                 </p>
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                        </div>

                    <div class="tab-pane fade" id="pagamento" role="tabpanel" aria-labelledby="pagamento-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Payments</h4>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row pt-2 pb-2">
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/3.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/4.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/5.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/6.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row pt-2">
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p class="text-black">VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="bg-white card payments-item shadow-sm">
                                    <div class="gold-members p-4">
                                       <a href="#">
                                          <div class="media">
                                             <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                             <div class="media-body">
                                                <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                <p>VALID TILL 10/2025</p>
                                                <p class="mb-0 text-black font-weight-bold">
                                       <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                       </div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
      </section>
      @include('home.footer')
      <script src="js/custom.js"></script>
   </body>
</html>