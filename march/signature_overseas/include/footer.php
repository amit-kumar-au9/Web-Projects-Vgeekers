<!-- footer -->
<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row py-5">
				<div class="col-lg-4 col-md-6 footer-grid">
					<div class="footer-logo">
						<h3 class="text-uppercase mb-3">about us</h3>
						<p>Lorem ipsum dolor sit elit Nam consectetur. eget egestas erat. Inear hachabierit tasse platea dictumst. hachabi tasse platea dictumst inir pleasure blame belongs elit.</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 footer-grid mt-md-0 mt-sm-3 mt-3">
					<h3 class="text-uppercase mb-3">Solutions</h3>
					<ul>
						<li> <a href="#">Industrial Chemicals</a> </li>
						<li> <a href="#">Machinery and Tools</a> </li>
						<li> <a href="#">Coal and Solid Fuels</a> </li>
						<li> <a href="#">Oil & Gas Revolution</a> </li>
						<li> <a href="#">High Quality Materials</a> </li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-md-4 mt-sm-3 mt-3 footer-grid">
					<h3 class="text-uppercase mb-3">Contact us</h3>
					<address>
						<p class="pb-2"><span class="fa fa-home" aria-hidden="true"></span> Street Name, <span class="addr">City, State.</span></p>
						<p class="pb-2"><span class="fa fa-phone" aria-hidden="true"></span> +015 289 4577 3441</p>
						<p class="pb-2"><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:contact@mail.com">contact@mail.com</a></p>
						<p class="pb-2"><span class="fa fa-globe" aria-hidden="true"></span><a href="#">website@example.com</a></p>
					</address>
				</div>
			</div>
			<div class="wthree_copy_right p-3">
				<p class="text-capitalize">Copyright 2020 Foam. All rights reserved | Design by <a href="http://Vgeekers.com/">Vgeekers</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Banner Slider js script file-->
		<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({
					color: '#fff',
					start: 3,
					reverse: true
				}).addClass('ff')
			})
		</script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);

			(function () {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<!-- //Banner Slider js script file-->

	<!-- script-for-swipebox -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //script-for-swipebox -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>