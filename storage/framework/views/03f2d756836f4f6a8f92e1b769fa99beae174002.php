<?php $__env->startSection('title', 'Andrés Hernádnez - Acerca De'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<div class="row">
				<div class="owl-carousel">
					<div class="knowledgeElement">
						<div class="knowWrapper" id="lara" >
							<br> 
							<img src="/img/laravel.png"> 
							<p>
								<br><br>
								<br><h4>
								Programa:</h4> Laravel 5.6
								<h4>Nivel de maestria:</h4> Intermedio-Avanzado </p>
								<br> <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="html">
								<br> 
								<img src="/img/html5.png">
								<br><h4>
								Programa:</h4> HTML5
								<h4>Nivel de maestria:</h4> Intermedio</p><br> <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="mud">
								<br>
								<img src="/img/mudbox.png">
								<br><h4>
								Programa:</h4> Mudbox
								<h4>Nivel de maestria:</h4> Intermedio</p><br>  <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="maya">
								<br>
								<img src="/img/maya.png"> 
								<br><h4>
								Programa:</h4> Maya
								<h4>Nivel de maestria:</h4> Intermedio-Avanzado</p><br> <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="ps">
								<br>
								<img src="/img/photoshop.png"> 
								<br><h4>
								Programa:</h4> Adobe Photoshop
								<h4>Nivel de maestria:</h4> Intermedio</p><br> <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="premiere">
								<br>
								<img src="/img/premiere.png"> 
								<br><h4>
								Programa:</h4> Adobe Premiere
								<h4>Nivel de maestria:</h4> intermedio</p><br> <br>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="php">
								<br><br><br>
								<img src="/img/php7.png"> 
								<br><br><br><h4>
								Programa:</h4> php7
								<h4>Nivel de maestria:</h4> intermedio</p><br><br> 
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="unrealengine">
								<br>
								<img src="/img/unrealengine.png"> 
								<br><h4>
								Programa:</h4> Unreal Engine
								<h4>Nivel de maestria:</h4> intermedio</p>
								<p class="filler">.</p>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="il">
								<br>
								<img src="/img/illustrator.png"> 
								<br><br><h4>
								Programa:</h4> Adobe Illustrator
								<h4>Nivel de maestria:</h4> intermedio</p> 
								<p class="filler2">.</p>
							</div>
						</div>
						<div class="knowledgeElement">
							<div class="knowWrapper" id="cyb">
								<br>
								<img src="/img/powerdirector.png"> 
								<br><br><h4>
								Programa:</h4> Cyberlink PowerDirector
								<h4>Nivel de maestria:</h4> intermedio</p> 

							</div>
						</div>



					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center><a class="btn btn-primary" id="button" href="<?php echo e(route('work')); ?>">¿Qué has hecho?</a></center>
					<br>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".owl-carousel").owlCarousel();
		$('#lara').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#html').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#mud').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#maya').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#ps').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#il').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#premiere').each(function() {
			animationHover(this, 'zoomIn');
		});
		$('#php').each(function() {
			animationHover(this, 'bounce');
		});
		$('#unrealengine').each(function() {
			animationHover(this, 'bounce');
		});
		$('#cyb').each(function() {
			animationHover(this, 'bounce');
		});

		$('#button').each(function() {
			animationHover(this, 'shake');
		});
	});
	$('.owl-carousel').owlCarousel({
		merge:true,
		loop:true,
		margin:10,
		video:true,
		lazyLoad:true,
		autoHeight:true,
		center:true,

		responsive:{
			480:{
				items:1
			},
			600:{
				items:4
			}
		}
	})

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>