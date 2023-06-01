


<div id="al-top">
	<a href="#"></a>
</div>

<a href="https://api.whatsapp.com/send?phone=5491127118100" class="whatsapp-icon" target="_blank" data-toggle="tooltip" data-placement="left" title="Escribinos tu consulta!">
	<img src="images/icon-whatsapp.svg" alt="WhatsApp">
</a>

<div class="contact-bar">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<img src="images/icon-tel.svg" alt="Teléfono"> (011) 4696-1340
		</div>
		<div class="col-md-4 hidden-xs hidden-sm">
			<a href="https://api.whatsapp.com/send?phone=5491127118100" target="_blank">
				<img src="images/icon-whatsapp.svg" alt="WhatsApp"> 11 2711 8100
			</a>
		</div>
		</div>
		
	</div>
</div>


<footer>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h5>Productos</h5>
				<nav class="menu-foot">
					<ul>
						<?php
						$sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_nombre ASC ";
	      				$resultadoCategorias = mysql_query($sqlCategorias);      


		                while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
		                  $categoria_id = $filaCategoria['categoria_id'];
		                  $categoria_nombre = $filaCategoria['categoria_nombre'];
		                ?>
						<li><a href="<?php echo $base_url;?>/productos/categoria/<?php echo $categoria_id;?>-<?php echo text2url($categoria_nombre);?>"><?php echo $categoria_nombre;?></a></li>
						<?php
						}
						?>
						<li><a href="http://oscarrevestimientos.com.ar/" target="_blank">Marmolería</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-5">
				<h5>Contacto</h5>
				<nav class="menu-foot">
					<ul>
						<li>Pedro Martín 1591 (ex Curupayti), Morón, Buenos Aires</li>
						<li>Lu a Vi de 8 a 12 hs y de 14 a 18hs. Sáb de 8 a 13hs</li>
						<li><a href="mailto:piedrasptg@gmail.com">piedrasptg@gmail.com</a></li>
						<li>(011) 4696-1340</li>
						<li>
							<a href="https://www.instagram.com/piedraspatagonia/" target="_blank" class="red-foot">
								<img class="img-responsive icon" src="images/icon-instagram.svg" alt="Instagram"> Instagram
							</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="col-md-4 marmoleria-foot">
				<h5>Marmolería</h5>
				<a href="http://oscarrevestimientos.com.ar/" target="_blank"><img src="images/oscar-logo.png"></a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="foot-foot">
			© <?=date('Y')?>. Desarrollado por <a href="http://mcardin.com.ar" target="_blank">mcardin.com.ar</a>
		</div>
	</div>


	

</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contacto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.js"></script>
    
    

<script type="text/javascript">

	$(document).ready(function(){

		$(".whatsapp-icon").tooltip()

		/* Menu */
		$( ".icon-menu-mobile" ).click(function() {
			//$( ".menu-mobile-open" ).slideToggle(200);
		});

	});
</script>


    <script type="text/javascript">


		/* Acciones con Scroll */
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$('#al-top').fadeIn();
				} else {
					$('#al-top').fadeOut();
				}
			});
		});



		/* Al top */
		$(document).ready(function(){
			$('#al-top').click(function(){
				$('html, body').animate({scrollTop : 0},500);
				return false;
			});
		});
	</script>


	<script type="text/javascript">
		$(document).ready(function(){
			$( ".icon-menu-mobile" ).click(function() {
			  $( ".menu-mobile-open" ).slideToggle(200);
			});
		});
    </script>

    <script type="text/javascript">


	    $(".accordion-titulo").click(function(){
                                        
	       var contenido=$(this).next(".accordion-content");
	                
	       if(contenido.css("display")=="none"){ //open     
	          contenido.slideDown(250);         
	          $(this).addClass("open");
	       }
	       else{ //close        
	          contenido.slideUp(250);
	          $(this).removeClass("open");  
	      }
	                                
	    });

	</script>


	



    <!-- Swiper slider file -->
		
	<script type="text/javascript">   
		$(document).ready(function () {

			var mySwiper = new Swiper ('.swiper-home', {
			loop: true,
	        speed: 600,  
	        autoplay: {
	            delay: 3500,
	            disableOnInteraction: true,
	        },
	        direction: 'horizontal',

			// If we need pagination
			pagination: {
		        el: '.swiper-pagination-home',
		        type: 'bullets',
		        clickable: 'true',
		      },

			// Navigation arrows
			navigation: {
		        nextEl: '.home-next',
		        prevEl: '.home-prev',
		      },

			})


			var swiper = new Swiper('.swiper-destacados', {
	      	  autoplay: {
			    delay: 2500,
			  },
		   	  speed: 500,
		   	  grabCursor: true,
		   	  loop: true,
		      // Default parameters
			  slidesPerView: 4,
			  spaceBetween: 1,
			  // Responsive breakpoints
			  breakpoints: {
			    // Max width = 900px
			    900: {
			      slidesPerView: 2,
			      spaceBetween: 1,
				},
			    // Max width = 1200px
			    1200: {
			      slidesPerView: 3,
			      spaceBetween: 1
			    }
			  },
			  navigation: {
		        nextEl: '.destacados-next',
		        prevEl: '.destacados-prev',
		      },

		    });




		});     
	</script>



	


    <script type="text/javascript">

    	/* Menu */
		$(document).ready(function(){
			
			$( ".icon-menu-mobile" ).click(function() {
			  //$( ".menu-mobile-open" ).fadeIn(100);
			  $('body').addClass('body-overflow');	
			});
			
			
			$(".cierra-menu").click(function() {
			  $( ".menu-mobile-open" ).fadeOut(200);
			  $('body').removeClass('body-overflow');
			});
			
		});

		/* Menu brans mobile*/
		$(document).ready(function(){
			
			$( ".open-brands" ).click(function() {
			  $( ".col-list-brands" ).fadeIn(100);
			  $('body').addClass('body-overflow');	
			});

			$(".cierra-menu-brands").click(function() {
			  $( ".col-list-brands" ).fadeOut(200);
			  $('body').removeClass('body-overflow');
			});
			
		});




		/* Acciones con Scroll */
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 450) {
					$('.header-scroll').fadeIn("fast");	
				} else {
					$('.header-scroll').fadeOut("fast");	
				}
			});
		});




    	/* Acciones con Scroll */
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$('#al-top').fadeIn();
				} else {
					$('#al-top').fadeOut();
				}
			});
		});



		




	    /* sticky Top 
			$(document).ready(function() {
				var stickyNavTop = $('.menu-index-in').offset().top;
				 
				var stickyNav = function(){
				var scrollTop = $(window).scrollTop();
				      
				if (scrollTop > stickyNavTop) { 
				    $('.menu-index-in').addClass('sticky');
				    $('.sticky-parche').addClass('padding-body');
				} else {
				    $('.menu-index-in').removeClass('sticky');
				    $('.sticky-parche').removeClass('padding-body'); 
				}
				};
				 
				stickyNav();
				 
				$(window).scroll(function() {
				    stickyNav();
				});
			});
		*/


      	
		$(function() {
		  $('a.to-bottom').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 600);
		        return false;
		      }
		    }
		  });
		});


    </script>











    



