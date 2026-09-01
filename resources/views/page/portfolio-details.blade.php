@extends('layouts.app')

@section('breadcrumb')
	<div class="page-title dark-background">
		<div class="container">
			<h1>Portfolio Details</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="index.html">Home</a></li>
					<li class="current">Portfolio Details</li>
				</ol>
			</nav>
		</div>
	</div>
@endsection

@section('content')
	<!-- Portfolio Details Section -->
	<section class="portfolio-details section" id="portfolio-details">

		<div class="container" data-aos-delay="100" data-aos="fade-up">

			<div class="row gy-4">

				<div class="col-lg-8">
					<div class="portfolio-details-slider swiper init-swiper">

						<script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

						<div class="swiper-wrapper align-items-center">

							<div class="swiper-slide">
								<img alt="" src="assets/img/portfolio/app-1.jpg">
							</div>

							<div class="swiper-slide">
								<img alt="" src="assets/img/portfolio/product-1.jpg">
							</div>

							<div class="swiper-slide">
								<img alt="" src="assets/img/portfolio/branding-1.jpg">
							</div>

							<div class="swiper-slide">
								<img alt="" src="assets/img/portfolio/books-1.jpg">
							</div>

						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="portfolio-info" data-aos-delay="200" data-aos="fade-up">
						<h3>Project information</h3>
						<ul>
							<li><strong>Category</strong>: Web design</li>
							<li><strong>Client</strong>: ASU Company</li>
							<li><strong>Project date</strong>: 01 March, 2020</li>
							<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
						</ul>
					</div>
					<div class="portfolio-description" data-aos-delay="300" data-aos="fade-up">
						<h2>Exercitationem repudiandae officiis neque suscipit</h2>
						<p>
							Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
						</p>
					</div>
				</div>

			</div>

		</div>

	</section><!-- /Portfolio Details Section -->
@endsection

@push('JS')
	<script>
		document.addEventListener('DOMContentLoaded', ()=>{
			document.body.classList.add('portfolio-details-page');
		});
	</script>
@endpush