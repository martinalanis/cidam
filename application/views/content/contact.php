<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>

<div class="parallax-container">
	<div class="parallax"><img src="<?php echo $img_path; ?>cidam-02.jpg"></div>
	<div id="parallax-img" class="container" style="">
		<div class="row valign-wrapper" style="height: 580px;">
			<div class="col s12 center-align">
				<div class="row">		
					<h1 class="about-title white-text" style="margin: 0 auto;">CONTACTO</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 30px;">
	<div class="row">
		<form id="form_contacto" name="form_contacto" id="form_cita" class="col s12 m6 card">
			<div class="pt-20 pb-20">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align">
						<p class="grey-text text-darken-3">¿Cómo desea ser contactado?</p>
						<p class="left col s4">
							<label>
								<input name="forma_contacto" class="radio-btn" type="radio" value="1" checked />
								<span>Email</span>
							</label>
						</p>
						<p class="left col s4">
							<label>
								<input name="forma_contacto" class="radio-btn" type="radio" value="2" />
								<span>Teléfono</span>
							</label>
						</p>
						<p class="left col s4">
							<label>
								<input name="forma_contacto" class="radio-btn" type="radio" value="3"  />
								<span>Ambos</span>
							</label>
						</p>
					</div>
					<div class="input-field col s12 m10 offset-m1">
						<input id="name" name="name" type="text" class="validate" data-error="#name-error" required>
						<label for="name">Nombre Completo</label>
						<span id="name-error"></span>
					</div>
					
					<div class="input-field col s12 m10 offset-m1">
						<input id="telephone" name="telephone" type="text" class="validate" data-error="#telephone-error" >
						<label for="telephone">Teléfono</label>
						<span id="telephone-error"></span>
					</div>
					<div class="input-field col s12 m10 offset-m1">
						<input id="email" name="email" type="email" class="validate" data-error="#email-error" >
						<label for="email">Email</label>
						<span id="email-error"></span>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m10 offset-m1">
						<textarea id="comments" name="comments" class="materialize-textarea" style="margin: 0px;" data-error="#mensaje-error" required></textarea>
						<label for="comments">Mensaje</label>
						<span id="mensaje-error"></span>
					</div>
				</div>
				<div class="row center">
					<button class="waves-effect waves-light btn amber mt-30" type="submit" style="width: 50%; border-radius: 5px;">Enviar</button>
				</div>
			</div>
		</form>
		<div class="col s12 m5 offset-m1">
			<div class="col s12">
				<h5>Centro de Innovación y Desarrollo Agroalimentario de Michoacan, A.C.</h5>
				<div class="col s12"><div class="divider"></div></div>
				<ul class="ul-material-icons mt-50">
					<li>
						<i class="material-icons">email</i> unidadgestion@cidam.org				
					</li>
					<li>
						<i class="material-icons">phone</i> (443) 299-0181 y (443) 299-0264					
					</li>
					<li>
						<i class="material-icons">location_on</i> Antigua Carretera a Patzcuaro, Kilometro 8.				
					</li>
					<li>
						<i class="material-icons">view_list</i> <a class="modal-trigger" href="#directorio" style="color:#007c89;"> Ver directorio completo</a>
					</li>
				</ul>
			</div>
			<div class="col s12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15029.881949275687!2d-101.230658!3d19.6499231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c6aa5ba8a593315!2sCIDAM!5e0!3m2!1ses!2smx!4v1563937304520!5m2!1ses!2smx" width="100%" height="320" class="z-depth-1" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		
	</div>
</div>

<div id="notificacion-submit" class="modal notification-modal">
	<div class="modal-content no-padding center-align">
		<div class="row center-align pt-50 pb-50" style="height: 50%; background-color: #336699;">
			<i class="material-icons white-text pd20" style="font-size: 64px; border-radius: 50%; border: 5px white solid;">check</i>
		</div>
		<div class="row no-margin pd20">
			<h4 id="submit-title">¡Mensaje Enviado!</h4>
			<p id="submit-text" style="font-size: 18px;">Tu mensaje ha sido enviado exitosamente, en breve uno de nuestros asesores se pondrá en contacto.</p>
			<button class="modal-action modal-close waves-effect waves-red btn-flat mt25" style="width: 50%;">Cerrar</button>
		</div>
	</div>
</div>

<div id="error-submit" class="modal notification-modal">
	<div class="modal-content no-padding center-align">
		<div class="row center-align pt-50 pb-50" style="height: 50%; background-color: #ef5350;">
			<i class="material-icons white-text pd20" style="font-size: 64px; border-radius: 50%; border: 5px white solid;">close</i>
		</div>
		<div class="row no-margin pd20">
			<h4 id="submit-title">¡Ha ocurrido un error!</h4>
			<p id="submit-text" style="font-size: 18px;">Intenta enviar tu mensaje de nuevo, si el error persiste, consulte al administrador del sitio.</p>
			<button class="modal-action modal-close waves-effect waves-red btn-flat mt25" style="width: 50%;">Cerrar</button>
		</div>
	</div>
</div>

<div id="directorio" class="modal modal-fixed-footer directory-modal">
	<div class="modal-content">
		<h5>Directorio CIDAM</h5>
		<table class="resonsive-table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Puesto</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody id="directory-content" ></tbody>
		</table>
	</div>
	<div class="modal-footer">
		<a href="#!" class="btn btn-small modal-close waves-effect waves-green orange darken-2">Cerrar</a>
	</div>
</div>