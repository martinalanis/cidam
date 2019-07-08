<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>

<div class="parallax-container">
	<div class="parallax"><img src="<?php echo $img_path; ?>gallery/carousel-tecnology.jpg"></div>
	<div id="parallax-img" class="container" style="">
		<div class="row valign-wrapper" style="height: 500px;">
			<div class="col s12 center-align">
				<div class="row">		
					<h1 class="about-title white-text" style="margin: 0 auto;">CIDAM</h1>
				</div>
				<div class="row">
					<p class="about-subtitle white-text" style="margin: 0 auto;">AGROINNOVACIÓN, TRANSFORMANDO IDEAS...</p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section-padding white">
	<div class="row container">
		<div class="col s12 center-align" style="padding-bottom: 50px;">
			<h2 class="about-h">Nuestros Servicios</h2>
			<p></p>
		</div>

		<div class="row">

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-agrotic-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Laboratorio de AgroCibernética</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-fito-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Laboratorio de Fitopatología</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-poscosecha-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Laboratorio de Poscosecha</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-biotec-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Unidad de Biotecnología</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-micro-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Laboratorio de Inocuidad Microbiológica</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-quimica-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Laboratorio de Inocuidad Química</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-verificacion-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Unidad de Verificación (Acreditada)</p>
				</div>
			</div>

			<div class="col s12 m3 card z-depth-0">
				<div class="card-image">
					<img src="<?php echo $img_path; ?>gallery/service-informacion-small.jpg">					
				</div>
				<div class="card-content center-align" style="border-radius: 0 0 6px 6px">
					<p>Sistemas de Información Geográfica y Patrimonio Natural</p>
				</div>
			</div>

		</div>
		
	</div>
</section>

<section class="section-padding">

	<div class="row container">
		<div class="col s12 center-align mb-30">
			<h3>Cotizador</h3>
			<p>Selecciona los servicios que requieres y así podremos ofrecerte una cotización personalizada: <br><i>(*Da clic en el nombre del servicio para desplegar la lista de servicios especificos)</i></p>
		</div>
		<form action="<?= base_url('enviar-cotizacion'); ?>" id="cotizacion" method="POST">
			<div class="col s12">
				<ul class="collapsible">
					<?php foreach($laboratorios as $laboratorio): ?>
					<li>
						<div class="collapsible-header"><?= $laboratorio->nombre ?></div>
						<div class="collapsible-body">
							<table>
								<thead>
									<tr>
										<th style="width: 120px;">Clave</th>
										<th>Nombre</th>
										<th>Precio</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($servicios as $servicio): ?>
									<?php if($servicio->laboratorio == $laboratorio->nombre): ?>
									<tr>
										<td>										
											<label>
												<input 
												type="checkbox" 
												name="servicios[]"
												value="<?= $servicio->id; ?>">
												<span><?= $servicio->codigo; ?></span>
											</label>									
										</td>
										<td><?= $servicio->nombre; ?></td>
										<td><?= $servicio->precio; ?></td>
									</tr>
									<?php endif; ?>
								<?php endforeach; ?>
								</tbody>
							</table>
						
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col s12 center-align mt-30">
				<input type="submit" class="waves-effect waves-light btn amber black-text" value="Continuar" />
			</div>
		</form>
	</div>
	
</section>

<div id="error-submit" class="modal">
	<div class="modal-content no-padding center-align white">
		<div class="row center-align pt-10 pb-10" style="height: 10%; background-color: #ef5350;">
			<i class="material-icons white-text pd20" style="font-size: 20px; border-radius: 50%; border: 5px white solid;">close</i>
		</div>
		<div class="row no-margin pd20">
			<p id="submit-text" style="font-size: 18px;">Debes seleccionar al menos un servicio</p>
			<button class="modal-action modal-close waves-effect waves-red btn-flat mt25" style="width: 50%;">Cerrar</button>
		</div>
	</div>
</div>