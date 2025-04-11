@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 offset-xl-7 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="hero-content">
						<h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">AI Insights</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Unlock the story behind your data — instantly and in any language</p>
						<!-- <div class="hero-btns">
							<a href="#courses" class="main-btn wow fadeInUp" data-wow-delay=".6s">Courses</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="hero-left">
			<img src="assets/images/hero-img.png" alt="">
			<img src="assets/images/dot-shape.svg" alt="" class="shape">
		</div>
	</section>
	<!--====== HERO PART END ======-->

	<!--====== SKILL PART START ======-->
	<section id="skill" class="skill-area pt-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
					<div class="section-title text-center">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">How it works</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Getting insights from your visualizations is simple. Just upload an image of your chart, graph, or map — and our AI will analyze it instantly. Within seconds, you'll receive a clear, easy-to-understand explanation of the data, including key trends, patterns, and insights. You can even choose your preferred language, making it perfect for users around the world. No data science skills needed — just bring your visuals, and let us do the rest.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".2s">
						<div class="skill-icon">
							<i class="lni lni-pencil-alt"></i>
						</div>
						<div class="skill-content">
							<h4>Upload Image</h4>
							<p>Ready to get started? Upload your data visualization image to begin. Simply drag and drop your file into the upload area, or click to browse from your device. Our AI will scan the image, detect the visual elements, and generate an insightful summary. Make sure your image is clear and focused for the best results. </p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".4s">
						<div class="skill-icon">
							<i class="lni lni-grid-alt"></i>
						</div>
						<div class="skill-content">
							<h4>Choose Language</h4>
							<p>We believe data insights should be accessible to everyone — no matter where you're from or what language you speak. Simply select your preferred language to view the analysis. Our AI supports multiple languages, including English, French, Spanish, Arabic, Indonesian, Bangla, and Hindi, with more coming soon. </p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".6s">
						<div class="skill-icon">
							<i class="lni lni-certificate"></i>
						</div>
						<div class="skill-content">
							<h4>Load Analysis</h4>
							<p>Sit back and let the AI do the work. In just a few seconds, your personalized analysis will appear — highlighting key trends, patterns, and insights from your visual. You can analyse up to five images at once. Clear, fast, and accessible — your data story is just one click away.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== SKILL PART ENDS ======-->

	<!--====== CONTACT PART START ======-->
	<section id="contact" class="contact-area">
		<div class="map-bg">
			<img src="assets/images/map-bg.svg" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Get In Touch</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Have questions, feedback, or a feature you'd love to see? We'd love to hear from you! Whether you're a curious user, a potential collaborator, or just want to say hello, feel free to reach out.</br>You can contact us via email, connect on social media, or use the form on the side — and we’ll get back to you as soon as we can.</p>
					</div>
					<div class="contact-content">
						<h4><a href="javascript:void(0)">seiron@gmail.com</a></h4>
						<h4><a href="javascript:void(0)">Instagram: mxtll0</a><h4>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="contact-form-wrapper">
						<form action="assets/contact.php">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name" name="name" id="name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email" name="email" id="email">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="text" placeholder="Subject" name="subject" id="subject">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12 text-right">
									<button class="main-btn btn-hover" type="button">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection