@extends('layouts.app')

@section('breadcrumb')
	<div class="page-title dark-background">
		<div class="container">
			<h1>Starter Page</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="{{ route('index') }}">Home</a></li>
					<li class="current">Starter Page</li>
				</ol>
			</nav>
		</div>
	</div>
@endsection

@section('content')
	<section class="starter-section section" id="starter-section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Starter Section</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">{{ __('Verify Your Email Address') }}</div>

						<div class="card-body">
							@if (session('resent'))
								<div class="alert alert-success" role="alert">
									{{ __('A fresh verification link has been sent to your email address.') }}
								</div>
							@endif

							{{ __('Before proceeding, please check your email for a verification link.') }}
							{{ __('If you did not receive the email') }},
							<form action="{{ route('verification.resend') }}" class="d-inline" method="POST">
								@csrf
								<button class="btn btn-link p-0 m-0 align-baseline" type="submit">{{ __('click here to request another') }}</button>.
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
@endsection

@push('JS')
	<script>
		document.addEventListener('DOMContentLoaded', () => {
			document.body.classList.add('starter-page');
		});
	</script>
@endpush
