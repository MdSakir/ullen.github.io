	 <!-- ---------------footer-start--------------  -->
	 <div class="footer   padd">
	 	<div class="container">
	 		<div class="row">

	 			<div class="col-lg-3 col-md-3 col-sm-6">
	 				<h4>About Us</h4>
	 				<span class="line-3"></span>
	 				<p>Ullen Interior Associates provides innovative design and decoration solutions for residential and commercial purposes. We can customize your place with a functional layout based on their preference and taste.</p>

	 			</div>

	 			<div class="col-lg-3 col-md-3 col-sm-6">
	 				<h4>Usfull Link</h4>
	 				<span class="line-3"></span>

	 				<ul>
	 					<li><a href="#">-- Portfolio</a></li>
	 					<li><a href="#">-- Exterior</a></li>
	 					<li><a href="#">-- 2D & 3D Designe</a></li>
	 					<li><a href="#">-- Panting</a></li>
	 					<li><a href="#">-- Wallpaper</a></li>
	 					<li><a href="#">-- Career</a></li>
	 					<li><a href="#">-- Contact</a></li>

	 				</ul>

	 			</div>


	 			<div class="col-lg-3 col-md-3 col-sm-6">
	 				<h4>Service</h4>
	 				<span class="line-3"></span>

	 				<ul>
	 					<li><a href="#">-- Residential and Bungalows</a></li>
	 					<li><a href="#">-- Corporate Office</a></li>
	 					<li><a href="#">-- Commercial</a></li>
	 					<li><a href="#">-- Modular Kitchen</a></li>
	 					<li><a href="#">-- Modular Bathroom</a></li>
	 					<li><a href="#">-- Flooring</a></li>
	 					<li><a href="#">-- Painting</a></li>
	 					<li><a href="#">-- Customized Furniture</a></li>
	 				</ul>
	 			</div>


	 			<div class="col-lg-3 col-md-3 col-sm-6">
	 				<h4>Contact Us</h4>
	 				<span class="line-3"></span>
	 				<ul>
	 					<li><a href="#">Phone +91 7061913629 , +91-8797114912</a></li>
	 					<span class="line-3"></span>
	 					<li><a href="#">Email: contact@ulleninteriorassociates.com</a></li>
	 					<span class="line-3"></span>
	 					<li><a href="#">Branch-office:- E94, Doctors Colony , Malahi pakri , Kankarbagh ,Patna , Bihar 800020</a></li>
	 					<span class="line-3"></span>
	 					<li><a href="#">Corporate office:- D2 204, UrbanGram Society Singhad road , Pune , Maharashtra 411024</a></li>
	 					<!-- <a href="contact.php"><button>Contact Us</button></a> -->
	 				</ul>
	 			</div>

	 		</div>
	 	</div>
	 </div>
	 <div class="footer-2">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-3"><img src="img/logo-1.png"></div>
	 			<div class="col-md-6"><a href="#">&copy; Ulleninteriorassociates.com/ All Right Reserved
	 					Designed & Maintained By: Fillip Technologies</a></div>
	 			<div class="col-md-3  text-right"> <a href="#"><i class="fab fa-facebook-f"></i></a>
	 				<a href="#"><i class="fab fa-youtube"></i></a>
	 				<a href="#"><i class="fab fa-twitter"></i></a>
	 				<a href="#"><i class="fab fa-instagram"></i></a>
	 			</div>
	 		</div>


	 	</div>
	 </div>
	 </div>







	 <!-- ---------------footer-start-end--------------  -->

	 <script>
	 	$(document).ready(function() {
	 		$("#myModal").modal('show');
	 	});
	 </script>


	 <!-- ----------modales-form------------  -->
	 <div id="myModal" class="modal fade">
	 	<div class="modal-dialog">
	 		<div class="modal-content">
	 			<div class="modal-header">
	 				<h5 class="modal-title">CONNECT TO DESIGNER</h5>
	 				<button type="button" class="close" data-dismiss="modal">&times;</button>
	 			</div>
	 			<div class="modal-body">

	 				<form>
	 					<div class="form-group">
	 						<input type="text" class="form-control" placeholder="Name">
	 					</div>

	 					<div class="form-group">
	 						<input type="email" class="form-control" placeholder="Email Address">
	 					</div>

	 					<div class="form-group">
	 						<input type="text" class="form-control" placeholder="Mobile Number">
	 					</div>

	 					<div class="form-group">
	 						<select class="form-control" placeholder="Select city">
	 							<option>Patna</option>
	 							<option>Delhi</option>
	 							<option>Mumbai</option>

	 						</select>
	 					</div>


	 					<div class="form-group">
	 						<select class="form-control" placeholder="Select Service">
	 							<option>Patna</option>
	 							<option>Delhi</option>
	 							<option>Mumbai</option>

	 						</select>
	 					</div>

	 					<button type="submit" class="form-control">BOOK FREE CONSULTATION</button>
	 					<p class="text-center"><small>By submitting this form, you agree to the<a href="#"> privacy policy</a> and <a href="#">terms of use</a></small></p>
	 				</form>
	 			</div>
	 		</div>
	 	</div>
	 </div>

	 <script src="js/jquery.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="js/bootstrap.js"></script>
	 <script src="js/owl.carousel.js"></script>



	 <script>
	 	$(document).ready(function() {
	 		$('.gallerys').magnificPopup({
	 			type: 'image',
	 			delegate: 'a',
	 			gallery: {
	 				enabled: true,
	 			}
	 		});
	 	});
	 </script>
	 <script>
	 	$(document).ready(function() {
	 		$(window).scroll(function() {
	 			if ($(window).scrollTop() > 60) {
	 				$(".my-navbar").addClass("navbar-scroll");

	 			} else {

	 				$(".my-navbar").removeClass("navbar-scroll");

	 			}
	 		});

	 	});
	 </script>

	 <script>
	 	(function($) {
	 		$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	 			if (!$(this).next().hasClass('show')) {
	 				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	 			}
	 			var $subMenu = $(this).next(".dropdown-menu");
	 			$subMenu.toggleClass('show');

	 			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
	 				$('.dropdown-submenu .show').removeClass("show");
	 			});

	 			return false;
	 		});
	 	})(jQuery)


	 	$('.owl-carousel').owlCarousel({
	 		loop: true,
	 		margin: 10,
	 		nav: true,
	 		responsive: {
	 			0: {
	 				items: 1
	 			},
	 			600: {
	 				items: 1
	 			},
	 			1000: {
	 				items: 1
	 			}
	 		}
	 	})
	 </script>



	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


	 </body>

	 </html>