@extends('master')
@section('title', 'Andrés Hernádnez - Acerca De')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="col-lg-5 col-md-12 col-sm-5 col-xs-12">
			<img src="/img/lolhi.jpg" class="itsame" id="itsame">
		</div>
		<div class="col-lg-7 col-md-12 col-sm-7 col-xs-12 frontText2">
			<h1>Acerca de mi</h1>
			<br>
			<p>Soy una persona puntual, perseverante y trabajadora, quiero aportar lo más que pueda al proyecto en el que esté trabajando. No me rindo hasta lograr algo y soy leal para quienes trabajo. Soy estudioso y dedicado con lo que hago.</p>
			<a class="btn btn-primary" id="button" href="{{route('knowledge')}}">¿Qué más?</a>
			<br>
			<br>
			<br>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('#itsame').each(function() {
			animationHover(this, 'bounce');
		});
		$('#button').each(function() {
			animationHover(this, 'shake');
		});
	});
	function animationHover(element, animation){
		element = $(element);
		element.hover(
			function() {
				element.addClass('animated ' + animation);        
			},
			function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
            	element.removeClass('animated ' + animation);
            }, 2000);         
        });
	}
</script>
@endsection