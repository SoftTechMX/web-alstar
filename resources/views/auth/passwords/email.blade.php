@extends('layouts.app')

@section('breadcrumb')
	<div class="page-title dark-background">
		<div class="container">
			<h1>Recuperar Contraseña</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="{{ route('index') }}">Inicio</a></li>
					<li class="current">Recuperar Contraseña</li>
				</ol>
			</nav>
		</div>
	</div>
@endsection

@section('content')
	<section class="starter-section section" id="starter-section">

		{{--
		<div class="container section-title" data-aos="fade-up">
			<h2>Starter Section</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div>
		--}}

		<div class="container" data-aos="fade-up">
			<div class="row justify-content-center">
				<div class="col-md-8">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<form action="{{ route('password.email') }}" class="" method="POST">
						@csrf

						<div class="row mb-3">

							<div class="col-8 m-auto">
								<label class="form-label" for="email">{{ __('Email Address') }}</label>
								<input autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror" id="email" name="email" required type="email" value="{{ old('email') }}">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-8 m-auto">
								<button class="btn btn-primary" type="submit">
									{{ __('Send Password Reset Link') }}
								</button>
							</div>
						</div>
					</form>
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
