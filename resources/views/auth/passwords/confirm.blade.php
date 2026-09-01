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
						<div class="card-header">{{ __('Confirm Password') }}</div>

						<div class="card-body">
							{{ __('Please confirm your password before continuing.') }}

							<form action="{{ route('password.confirm') }}" method="POST">
								@csrf

								<div class="row mb-3">
									<label class="col-md-4 col-form-label text-md-end" for="password">{{ __('Password') }}</label>

									<div class="col-md-6">
										<input autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required type="password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="row mb-0">
									<div class="col-md-8 offset-md-4">
										<button class="btn btn-primary" type="submit">
											{{ __('Confirm Password') }}
										</button>

										@if (Route::has('password.request'))
											<a class="btn btn-link" href="{{ route('password.request') }}">
												{{ __('Forgot Your Password?') }}
											</a>
										@endif
									</div>
								</div>
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
