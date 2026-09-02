@extends('layouts.app')

@section('content')
	<main class="main">
		<!-- Hero Section -->
		<section class="hero section dark-background" id="hero">

			<div class="carousel slide carousel-fade" data-bs-interval="5000" data-bs-ride="carousel" id="hero-carousel">

				<div class="carousel-item active">
					<img alt="" src="{{ asset('/storage/hero-carousel/hero-carousel-1.jpg') }}">
					<div class="container">
						<h2>Somos profesionales</h2>
						<p>Contamos con un equipo altamente capacitado y experimentado en la prestación de servicios de calidad. Nos comprometemos a entregar soluciones innovadoras que superen tus expectativas.</p>
						<a class="btn-get-started" href="{{ asset('#featured-services') }}">Comenzar</a>
					</div>
				</div><!-- End Carousel Item -->

				<div class="carousel-item">
					<img alt="" src="{{ asset('/storage/hero-carousel/hero-carousel-2.jpg') }}">
					<div class="container">
						<h2>Experiencia y confianza</h2>
						<p>Con más de una década de experiencia, hemos ganado la confianza de nuestros clientes. Nuestro compromiso es brindarte las mejores soluciones adaptadas a tus necesidades específicas.</p>
						<a class="btn-get-started" href="{{ asset('#featured-services') }}">Comenzar</a>
					</div>
				</div><!-- End Carousel Item -->

				<div class="carousel-item">
					<img alt="" src="{{ asset('/storage/hero-carousel/hero-carousel-3.jpg') }}">
					<div class="container">
						<h2>Innovación y tecnología</h2>
						<p>Utilizamos las últimas tecnologías e innovaciones para garantizar que nuestros servicios sean competitivos y efectivos. Estamos en constante evolución para ofrecerte siempre las mejores prácticas.</p>
						<a class="btn-get-started" href="{{ asset('#featured-services') }}">Comenzar</a>
					</div>
				</div><!-- End Carousel Item -->

				<a class="carousel-control-prev" data-bs-slide="prev" href="{{ asset('#hero-carousel') }}" role="button">
					<span aria-hidden="true" class="carousel-control-prev-icon bi bi-chevron-left"></span>
				</a>

				<a class="carousel-control-next" data-bs-slide="next" href="{{ asset('#hero-carousel') }}" role="button">
					<span aria-hidden="true" class="carousel-control-next-icon bi bi-chevron-right"></span>
				</a>

				<ol class="carousel-indicators"></ol>

			</div>

		</section><!-- /Hero Section -->

		<!-- About Section -->
		<section class="about section" id="about">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Sobre Nosotros</h2>
				<p>Conoce quiénes somos y por qué somos los mejores en lo que hacemos</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-4">
					<div class="col-lg-6" data-aos-delay="100" data-aos="fade-up">
						<h3>Nuestra Misión y Visión</h3>
						<img alt="" class="img-fluid rounded-4 mb-4" src="{{ asset('/storage/about.jpg') }}">
						<p>
							Nuestra misión es proporcionar servicios de la más alta calidad que ayuden a nuestros clientes a alcanzar sus objetivos empresariales. Nos dedicamos a crear soluciones personalizadas que generen un impacto positivo y duradero.
						</p>
						<p>
							Contamos con un equipo interdisciplinario de profesionales comprometidos con la excelencia. Cada proyecto es tratado con la atención y dedicación que merece, asegurando resultados que superan las expectativas.
						</p>
					</div>
					<div class="col-lg-6" data-aos-delay="250" data-aos="fade-up">
						<div class="content ps-0 ps-lg-5">
							<p class="fst-italic">
								Nuestros servicios están diseñados para transformar tu negocio y llevarlo al siguiente nivel con soluciones innovadoras y sostenibles.
							</p>
							<ul>
								<li><i class="bi bi-check-circle-fill"></i> <span>Soluciones innovadoras y personalizadas para cada cliente.</span></li>
								<li><i class="bi bi-check-circle-fill"></i> <span>Equipo experto con años de experiencia en la industria.</span></li>
								<li><i class="bi bi-check-circle-fill"></i> <span>Compromiso con la calidad y la excelencia en cada proyecto.</span></li>
							</ul>
							<p>
								Trabajamos con pasión para convertir tus ideas en realidad. Con un enfoque centrado en el cliente, aseguramos que cada solución sea efectiva y sostenible para el crecimiento de tu negocio.
							</p>

							<div class="position-relative mt-4">
								<img alt="" class="img-fluid rounded-4" src="{{ asset('/storage/about-2.jpg') }}">
								<a class="glightbox pulsating-play-btn" href="{{ asset('https://www.youtube.com/watch?v=Y7f98aduVJ8') }}"></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- /About Section -->

		<!-- Features Section -->
		<section class="features section" id="features">

			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-4" data-aos-delay="100" data-aos="fade-up">
						<div class="why-box">
							<h3>¿Por qué elegirnos?</h3>
							<p>
								Porque somos líderes en la industria con una trayectoria probada de éxito. Nuestros clientes confían en nosotros porque entregamos resultados, nos adaptamos a sus necesidades y siempre buscamos la innovación.
							</p>
							<div class="text-center">
								<a class="more-btn" href="javascript:void(0)"><span>Saber Más</span> <i class="bi bi-chevron-right"></i></a>
							</div>
						</div>
					</div><!-- End Why Box -->

					<div class="col-lg-8 d-flex align-items-stretch">
						<div class="row gy-4" data-aos-delay="200" data-aos="fade-up">

							<div class="col-xl-4">
								<div class="icon-box d-flex flex-column justify-content-center align-items-center">
									<i class="bi bi-clipboard-data"></i>
									<h4>Análisis y Estrategia</h4>
									<p>Realizamos análisis profundos para diseñar estrategias efectivas que impulsen tu negocio.</p>
								</div>
							</div><!-- End Icon Box -->

							<div class="col-xl-4" data-aos-delay="300" data-aos="fade-up">
								<div class="icon-box d-flex flex-column justify-content-center align-items-center">
									<i class="bi bi-gem"></i>
									<h4>Calidad Premium</h4>
									<p>Entregamos soluciones de la más alta calidad con atención al detalle en cada aspecto.</p>
								</div>
							</div><!-- End Icon Box -->

							<div class="col-xl-4" data-aos-delay="400" data-aos="fade-up">
								<div class="icon-box d-flex flex-column justify-content-center align-items-center">
									<i class="bi bi-inboxes"></i>
									<h4>Gestión Integral</h4>
									<p>Manejamos todos los aspectos de tu proyecto desde la planificación hasta la ejecución.</p>
								</div>
							</div><!-- End Icon Box -->

						</div>
					</div>

				</div>

			</div>

		</section><!-- /Features Section -->

		<!-- Services Section -->
		<section class="services section" id="services">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Servicios</h2>
				<p>Descubre nuestro amplio portafolio de servicios diseñados para satisfacer tus necesidades empresariales</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-4 col-md-6" data-aos-delay="100" data-aos="fade-up">
						<div class="service-item  position-relative">
							<div class="icon">
								<i class="bi bi-activity"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Consultoría Empresarial</h3>
							</a>
							<p>Asesoramiento estratégico para optimizar tus procesos empresariales y aumentar la rentabilidad.</p>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos-delay="200" data-aos="fade-up">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="bi bi-broadcast"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Desarrollo Tecnológico</h3>
							</a>
							<p>Soluciones de software personalizadas y desarrollo de aplicaciones web modernas y escalables.</p>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos-delay="300" data-aos="fade-up">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="bi bi-easel"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Marketing Digital</h3>
							</a>
							<p>Estrategias de marketing digital para aumentar tu presencia en línea y atraer más clientes.</p>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos-delay="400" data-aos="fade-up">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="bi bi-bounding-box-circles"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Gestión de Proyectos</h3>
							</a>
							<p>Coordinación y seguimiento de proyectos con metodologías ágiles para garantizar entrega a tiempo.</p>
							<a class="stretched-link" href="{{ asset('service-details.html') }}"></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos-delay="500" data-aos="fade-up">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="bi bi-calendar4-week"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Capacitación y Formación</h3>
							</a>
							<p>Programas de formación profesional para actualizar habilidades de tu equipo y mejorar productividad.</p>
							<a class="stretched-link" href="{{ asset('service-details.html') }}"></a>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-4 col-md-6" data-aos-delay="600" data-aos="fade-up">
						<div class="service-item position-relative">
							<div class="icon">
								<i class="bi bi-chat-square-text"></i>
							</div>
							<a class="stretched-link" href="{{ asset('service-details.html') }}">
								<h3>Soporte Técnico</h3>
							</a>
							<p>Asistencia técnica y soporte continuo para garantizar el funcionamiento óptimo de tus sistemas.</p>
							<a class="stretched-link" href="{{ asset('service-details.html') }}"></a>
						</div>
					</div><!-- End Service Item -->

				</div>

			</div>

		</section><!-- /Services Section -->

		<!-- Call To Action Section -->
		<section class="call-to-action section dark-background" id="call-to-action">

			<img alt="" src="{{ asset('/storage/cta-bg.jpg') }}">

			<div class="container">
				<div class="row justify-content-center" data-aos-delay="100" data-aos="zoom-in">
					<div class="col-xl-10">
						<div class="text-center">
							<h3>¡Comienza tu transformación hoy!</h3>
							<p>No esperes más para llevar tu negocio al siguiente nivel. Contáctanos hoy y descubre cómo podemos ayudarte a alcanzar tus objetivos con soluciones innovadoras y personalizadas.</p>
							<a class="cta-btn" href="javascript:void(0)">Contactar Ahora</a>
						</div>
					</div>
				</div>
			</div>

		</section><!-- /Call To Action Section -->

		<!-- Portfolio Section -->
		<section class="portfolio section" id="portfolio">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Portafolio</h2>
				<p>Revisa nuestros proyectos más destacados y casos de éxito con clientes satisfechos</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

					<ul class="portfolio-filters isotope-filters" data-aos-delay="100" data-aos="fade-up">
						<li class="filter-active" data-filter="*">Todos</li>
						<li data-filter=".filter-app">Aplicaciones</li>
						<li data-filter=".filter-product">Productos</li>
						<li data-filter=".filter-branding">Branding</li>
						<li data-filter=".filter-books">Publicaciones</li>
					</ul>

					<div class="row gy-4 isotope-container" data-aos-delay="200" data-aos="fade-up">

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/app-1.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/app-1.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">App 1</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/product-1.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/product-1.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Product 1</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/branding-1.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/branding-1.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Branding 1</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/books-1.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/books-1.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Books 1</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/app-2.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/app-2.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">App 2</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/product-2.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/product-2.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Product 2</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/branding-2.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/branding-2.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Branding 2</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/books-2.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/books-2.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Books 2</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/app-3.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/app-3.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">App 3</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/product-3.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/product-3.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Product 3</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/branding-3.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/branding-3.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Branding 3</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
							<div class="portfolio-content h-100">
								<a class="glightbox" data-gallery="portfolio-gallery-app" href="{{ asset('/storage/portfolio/books-3.jpg') }}"><img alt="" class="img-fluid" src="{{ asset('/storage/portfolio/books-3.jpg') }}"></a>
								<div class="portfolio-info">
									<h4><a href="{{ asset('portfolio-details.html') }}" title="More Details">Books 3</a></h4>
									<p>Lorem ipsum, dolor sit amet consectetur</p>
								</div>
							</div>
						</div><!-- End Portfolio Item -->

					</div><!-- End Portfolio Container -->

				</div>

			</div>

		</section><!-- /Portfolio Section -->

		<!-- Pricing Section -->
		<section class="pricing section" id="pricing">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Precios</h2>
				<p>Elige el plan que mejor se adapte a las necesidades de tu negocio</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row g-4 g-lg-0">

					<div class="col-lg-4" data-aos-delay="100" data-aos="zoom-in">
						<div class="pricing-item">
							<h3>Free Plan</h3>
							<h4><sup>$</sup>0<span> / month</span></h4>
							<ul>
								<li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
								<li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
								<li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
								<li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
								<li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
							</ul>
							<div class="text-center"><a class="buy-btn" href="javascript:void(0)">Buy Now</a></div>
						</div>
					</div><!-- End Pricing Item -->

					<div class="col-lg-4 featured" data-aos-delay="200" data-aos="zoom-in">
						<div class="pricing-item">
							<h3>Business Plan</h3>
							<h4><sup>$</sup>29<span> / month</span></h4>
							<ul>
								<li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
								<li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
								<li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
								<li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
								<li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
							</ul>
							<div class="text-center"><a class="buy-btn" href="javascript:void(0)">Buy Now</a></div>
						</div>
					</div><!-- End Pricing Item -->

					<div class="col-lg-4" data-aos-delay="100" data-aos="zoom-in">
						<div class="pricing-item">
							<h3>Developer Plan</h3>
							<h4><sup>$</sup>49<span> / month</span></h4>
							<ul>
								<li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
								<li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
								<li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
								<li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
								<li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
							</ul>
							<div class="text-center"><a class="buy-btn" href="javascript:void(0)">Buy Now</a></div>
						</div>
					</div><!-- End Pricing Item -->

				</div>

			</div>

		</section><!-- /Pricing Section -->

		<!-- Faq Section -->
		<section class="faq section light-background" id="faq">

			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-4" data-aos-delay="100" data-aos="fade-up">
						<div class="content px-xl-5">
							<h3><span>Preguntas </span><strong>Frecuentes</strong></h3>
							<p>
								Encontramos respuestas a las dudas más comunes de nuestros clientes. Si tienes una pregunta que no está aquí, no dudes en contactarnos directamente.
							</p>
						</div>
					</div>

					<div class="col-lg-8" data-aos-delay="200" data-aos="fade-up">

						<div class="faq-container">
							<div class="faq-item faq-active">
								<h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
								<div class="faq-content">
									<p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
								<div class="faq-content">
									<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
								<div class="faq-content">
									<p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
								<div class="faq-content">
									<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
								<div class="faq-content">
									<p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

						</div>

					</div>
				</div>

			</div>

		</section><!-- /Faq Section -->

		<!-- Team Section -->
		<section class="team section" id="team">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Equipo</h2>
				<p>Conoce a los profesionales que hacen posible nuestro éxito</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos-delay="100" data-aos="fade-up">
						<div class="team-member">
							<div class="member-img">
								<img alt="" class="img-fluid" src="{{ asset('/storage/team/team-1.jpg') }}">
								<div class="social">
									<a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Walter White</h4>
							<span>Director Ejecutivo</span>
							<p>Con más de 15 años de experiencia en la industria, Walter lidera nuestra visión y estrategia empresarial. Su pasión por la innovación y excelencia impulsa el crecimiento continuo de la empresa.</p>
							</div>
						</div>
					</div><!-- End Team Member -->

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos-delay="200" data-aos="fade-up">
						<div class="team-member">
							<div class="member-img">
								<img alt="" class="img-fluid" src="{{ asset('/storage/team/team-2.jpg') }}">
								<div class="social">
									<a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
							<span>Gerente de Producto</span>
							<p>Sarah es responsable del desarrollo y mejora continua de nuestros productos. Su atención al detalle y comprensión profunda del mercado son fundamentales para el éxito de nuestras soluciones.</p>
							</div>
						</div>
					</div><!-- End Team Member -->

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos-delay="300" data-aos="fade-up">
						<div class="team-member">
							<div class="member-img">
								<img alt="" class="img-fluid" src="{{ asset('/storage/team/team-3.jpg') }}">
								<div class="social">
									<a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>William Anderson</h4>
							<span>Director de Tecnología</span>
							<p>William supervisa toda la infraestructura técnica y el desarrollo de software. Su experiencia en arquitectura de sistemas asegura que nuestras soluciones sean escalables, seguras y de alto rendimiento.</p>
							</div>
						</div>
					</div><!-- End Team Member -->

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos-delay="400" data-aos="fade-up">
						<div class="team-member">
							<div class="member-img">
								<img alt="" class="img-fluid" src="{{ asset('/storage/team/team-4.jpg') }}">
								<div class="social">
									<a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
									<a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
							<span>Contadora</span>
							<p>Amanda asegura la salud financiera de la empresa y proporciona análisis detallados para la toma de decisiones. Su dedicación a la precisión y la transparencia es vital para nuestra confiabilidad.</p>
							</div>
						</div>
					</div><!-- End Team Member -->

				</div>

			</div>

		</section><!-- /Team Section -->

		<section class="contact section light-background" id="contact">

			<div class="container section-title" data-aos="fade-up">
				<h2>Contacto</h2>
				<p>
					Ponte en contacto con nosotros, llena el siguiente formulario para enviarnos un mensaje a traves de la plataforma, 
					o contactanos directamente a traves de nuestro correo o mediante nuestro whatsapp.
				</p>
			</div>

			<div class="container" data-aos-delay="100" data-aos="fade-up">

				<div class="row gy-4">

					<div class="col-lg-5">

						<div class="info-wrap">
							<div class="info-item d-flex" data-aos-delay="200" data-aos="fade-up">
								<i class="bi bi-geo-alt flex-shrink-0"></i>
								<div>
									<h3>Dirección</h3>
									<p>Calle Principal 123, Ciudad de México, CDMX 06500</p>
								</div>
							</div>
						

							<div class="info-item d-flex" data-aos-delay="300" data-aos="fade-up">
								<i class="bi bi-telephone flex-shrink-0"></i>
								<div>
									<h3>Llámanos</h3>
									<p>+52 (55) 1234-5678</p>
								</div>
							</div><!-- End Info Item -->

							<div class="info-item d-flex" data-aos-delay="400" data-aos="fade-up">
								<i class="bi bi-envelope flex-shrink-0"></i>
								<div>
									<h3>Correo Electrónico</h3>
									<p>contacto@alstar.com</p>
								</div>
							</div>
							
							<iframe allowfullscreen="" frameborder="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="{{ asset('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus') }}" style="border:0; width: 100%; height: 270px;"></iframe>
						</div>
					</div>

					<div class="col-lg-7">
						<livewire:form.solicitud-de-contacto.create />
					</div>

				</div>

			</div>

		</section>
	</main>
@endsection

@push('JS')
	<script>
		document.addEventListener('DOMContentLoaded', ()=>{
			document.body.classList.add('index-page');
		});
	</script>
@endpush