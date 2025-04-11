<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area pt-170">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="footer-widget">
					<a href="{{ url('/') }}" class="logo d-blok">
						<img src="assets/images/logo.svg" alt="">
					</a>
					<p>Lorem ipsum dolor sit amco nsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
				<div class="footer-widget">
					<h5>Quick Links</h5>
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ route('analysis') }}">Analysis</a></li>
						<li><a href="{{ url('/') }}#contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6">
				<div class="footer-widget">
					<h5>Our Course</h5>
					<ul>
						<li><a href="javascript:void(0)">Design</a></li>
						<li><a href="javascript:void(0)">Development</a></li>
						<li><a href="javascript:void(0)">Marketing</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="footer-widget">
					<h5>Contact Us</h5>
					<ul>
						<li>
							<p>Phone: +44-9273-3867</p>
						</li>
						<li>
							<p>Email: hello@example.com</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-credit">
			<div class="row">
				<div class="col-md-6">
					<div class="copy-right text-center text-md-left">
						<p>Designed and Developed by <a href="#" rel="nofollow">JAWERIYA</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-social">
						<ul class="d-flex justify-content-md-end justify-content-center">
							<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
							<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
							<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
							<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->
<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
<!--====== BACK TOP TOP PART ENDS ======-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>


<!--====== wow js ======-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
	// Get the navbar

	// for menu scroll 
	var pageLink = document.querySelectorAll('.page-scroll');

	pageLink.forEach(elem => {
		elem.addEventListener('click', e => {
			e.preventDefault();
			document.querySelector(elem.getAttribute('href')).scrollIntoView({
				behavior: 'smooth',
				offsetTop: 1 - 60,
			});
		});
	});


	//===== close navbar-collapse when a  clicked
	let navbarToggler = document.querySelector(".navbar-toggler");
	var navbarCollapse = document.querySelector(".navbar-collapse");

	document.querySelectorAll(".page-scroll").forEach(e =>
		e.addEventListener("click", () => {
			navbarToggler.classList.remove("active");
			navbarCollapse.classList.remove('show')
		})
	);
	navbarToggler.addEventListener('click', function() {
		navbarToggler.classList.toggle("active");
	});
</script>