<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>


<div class="container" style="margin-top: 120px;">
	<div class="row">

		<div class="col s12 m4 l3">
			<div class="card">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>team/aluna.png">
					<a href="<?=base_url('grupo-de-trabajo/aluna');?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				</div>
				<div class="card-content">
					<span class="card-title">Aluna</span>

					<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				</div>
			</div>
		</div>

		<div class="col s12 m4 l3">
			<div class="card">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>team/arangel.png">
					<a href="<?=base_url('grupo-de-trabajo/arangel');?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				</div>
				<div class="card-content">
					<span class="card-title">Arangel</span>

					<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				</div>
			</div>
		</div>

	</div>
</div>
