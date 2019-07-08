<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>

<section class="section-padding white">
	<div class="row container">
		<div class="col s12 center-align" style="padding-bottom: 50px;">
			<h4 class="about-h">Resumen de la cotización</h4>
			<p></p>
		</div>
		<?php if($confirm): ?>
		<div class="row center-align">
			<h5>¡Tu cotización ha sido enviada!</h5>
			<p>En breve nos pondremos en contacto contigo</p>
			<a href="<?= base_url('home'); ?>" class="waves-effect waves-light btn amber mt-30">inicio</a>
		</div> 
		<?php else: ?>
		<div class="row center-align">
			<h5>Parece que ocurrio un error al enviar la cotizacion.</h5>
			<p>Intentalo de nuevo en un momento más.</p>
			<a href="<?= base_url('home'); ?>" class="waves-effect waves-light btn amber mt-30">inicio</a>
		</div> 

		<?php endif; ?>
		
	</div>
</section>

