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
			<p>Use this page as a starter for your own custom pages.</p>
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
