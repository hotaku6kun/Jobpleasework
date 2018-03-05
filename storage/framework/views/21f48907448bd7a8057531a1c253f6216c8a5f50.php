<?php $__env->startSection('title', 'Andrés Hernádnez - Contacto'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-4 col-md-12 col-sm-4 col-xs-12 contactoframe">
			<p class="contactoTitle">Contacto</p>
			<img src="/img/lolhi.jpg" id="itsame" class="findme" >
		</div>
		<div class="col-lg-8 col-md-12 col-sm-8 col-xs-12">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 frontText2">
				<h2>Teléfono</h2>
				<br>
				<p>5528827186</p>
				<h2>Correos</h2>
				<br>
				<p>andreso3o@hotmail.com</p>
				<p>hotaku_6@gmai.com.mx</p>
				<br>
				<br>
				<br>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 frontText2">
				<h2>Redes Sociales</h2>
				
				<a href="https://www.facebook.com/andreww.andresandres"><i class="fa fa-facebook-official fa-5x socialIcons" id="fb" aria-hidden="true"></i></a>
				<a href="https://twitter.com/hotakumaebara"><i class="fa fa-twitter-square fa-5x socialIcons" id="tw" aria-hidden="true"></i></a>
				<a href="https://www.youtube.com/channel/UCUtgS5l8OPutwkPtc8f4Trw?view_as=subscriber"><i class="fa fa-youtube-play fa-5x socialIcons" id="yt" aria-hidden="true"></i></a>
				<a href="https://www.linkedin.com/in/andr%C3%A9s-hern%C3%A1ndez-pacheco-6780aa15a/"><i class="fa fa-linkedin-square fa-5x socialIcons" id="li" aria-hidden="true"></i></a>
				<a href="https://plus.google.com/113186607360496215968?hl=es"><i class="fa fa-google-plus-square fa-5x socialIcons" id="gp" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/hotaku_m/"><i class="fa fa-instagram fa-5x socialIcons" id="ig" aria-hidden="true"></i></a>
				<br><br>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#itsame').each(function() {
			animationHover(this, 'bounce');
		});
		$('#fb').each(function() {
			animationHover(this, 'shake');
		});
		$('#tw').each(function() {
			animationHover(this, 'shake');
		});
		$('#yt').each(function() {
			animationHover(this, 'shake');
		});
		$('#li').each(function() {
			animationHover(this, 'shake');
		});
		$('#gp').each(function() {
			animationHover(this, 'shake');
		});
		$('#ig').each(function() {
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>