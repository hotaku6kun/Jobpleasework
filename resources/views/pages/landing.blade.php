@extends('master')
@section('title', 'Andrés Hernádnez - inicio')
@section('content')
<div class="row">
	<div class="col-xs-12 bg">
		<div class="col-xs-5 frontText">
			<h1>¿Buscando a alguien para trabajar contigo?</h1>
			<br>
			<h2>¡No busques más!</h2><br>
			<p>Observa todas las cualidades, habilidades y muestras con las que cuento</p>
			<a class="btn btn-primary"  href="{{route('acerca')}}">Muestrame más</a>
			<br>
		</div>
	</div>
</div>
@endsection
@section('scripts')