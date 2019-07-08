<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>

<section class="section-padding white">
	<div class="row container">
		<div class="col s12 center-align" style="padding-bottom: 50px;">
			<h4 class="about-h">Resumen de la cotización</h4>
			<p></p>
		</div>
		<?php if(isset($servicios)): ?>
		<form id="form_cotizacion" action="<?= base_url('confirmar-cotizacion'); ?>" id="form_cita" class="col s12" method="POST">
		<div class="row">

			<div class="col s7">
				<table>
					<thead>
						<tr>
							<th style="width: 50px;">Cant</th>
							<th style="width: 110px;">Clave</th>
							<th>Nombre</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($servicios as $servicio): ?>
						<tr>
							<td>
								<input class="right-align" type="number" name="servicios[<?= $servicio->id; ?>]" value="1">
							</td>
							<td><?= $servicio->codigo; ?></td>
							<td><?= $servicio->nombre; ?></td>
							<td><?= $servicio->precio; ?></td>
						</tr>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
			<div class="col s5 card">
				<p>Después de verificar que sus servicios estén correctos, completa la siguiente información para poder ponernos en contacto contigo y darte los detalles de tu cotización.</p>
				
					<div class="pt-20 pb-20">
						<div class="row">							

							<div class="input-field col s12 m10 offset-m1">
								<input id="name" name="name" type="text" class="validate" data-error="#name-error" required>
								<label for="name">Nombre Completo</label>
								<span id="name-error"></span>
							</div>
							
							<div class="input-field col s12 m10 offset-m1">
								<input id="email" name="email" type="email" class="validate" data-error="#email-error" >
								<label for="email">Email</label>
								<span id="email-error"></span>
							</div>

							<div class="input-field col s12 m10 offset-m1">
								<input id="phone" name="phone" type="tel" class="validate" data-error="#phone-error" >
								<label for="phone">Telefono</label>
								<span id="phone-error"></span>
							</div>

						</div>
						<div class="row">
							<div class="input-field col s12 m10 offset-m1">
								<textarea id="comments" name="comments" class="materialize-textarea" style="margin: 0px;" data-error="#mensaje-error"></textarea>
								<label for="comments">Información extra:</label>
								<span id="mensaje-error"></span>
							</div>
						</div>
						<div class="row center">
							<button class="waves-effect waves-light btn amber mt-30" type="submit" style="width: 50%; border-radius: 5px;">Enviar</button>
						</div>
						<div class="row center-align">
							<a href="<?= base_url('servicios'); ?>"> Cancelar</a>
						</div>
						
					</div>
				</div>
			</div>
		</form>
		<?php else: ?>
		<div class="row center-align">
			<p>Selecciona primero servicios</p>
			<a href="<?= base_url('servicios'); ?>" class="waves-effect waves-light btn amber mt-30">Servicios</a>
		</div> 

		<?php endif; ?>
		
	</div>
</section>

