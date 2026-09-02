@extends('layouts.app')

@section('breadcrumb')
	<div class="page-title dark-background">
		<div class="container">
			<h1>Configuración</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="{{ route('index') }}">Inicio</a></li>
                    <li class="">Administración</li>
					<li class="current">Configuración</li>
				</ol>
			</nav>
		</div>
	</div>
@endsection

@section('content')
	<section class="starter-section section" id="starter-section">

		<div class="container section-title" data-aos="fade-up">
			<h2>Panel de Administración</h2>
			<p>
                Bienvenido al panel de administración, aquí puedes modificar todo el contenido del sitio web, desde los datos de contacto,
                enlaces, secciones que están disponibles para los usuarios, comportamiento del sitio web, permisos de usuarios, etc.
            </p>
		</div>

		<div class="container" data-aos="fade-up">
			
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
