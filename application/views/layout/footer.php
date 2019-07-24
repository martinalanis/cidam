<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';
?>
</main>

<footer class="page-footer grey lighten-2">
	<div class="container">
		<div class="row valign-wrapper center-align no-margin">
			<div class="col s12 m3 center-align">
				<p class="black-text">Correo:<br><a href="mailto:unidadgestion@cidam.org">unidadgestion@cidam.org</a>
				</p>
			</div>
			<div class="col s12 m3 center-align">
				<p class="black-text">Tel:<br><a href="tel:+5214432990181">(443) 299-0181</a><br><a href="tel:+52144322990264">(443) 299-0264</a></p>
			</div>
			<div class="col s12 m3 center-align" style="padding-bottom: 15px;">
				<p class="black-text" style="margin-bottom: 5px;">Social</p>
                <div class="col s3 offset-s3">
                    <a href="https://www.facebook.com/alan.cid.330" target="_blank"><img src="<?= $img_path.'facebook.png' ?>" class="responsive-img hoverable" style="border-radius: 50%;"></a>
                </div>
                <div class="col s3">
                    <a href="https://twitter.com/cidam4" target="_blank"><img src="<?= $img_path.'twitter.png' ?>" class="responsive-img hoverable" style="border-radius: 50%;"></a>
                </div>
			</div>
			<div class="col s12 m3 center-align">
				<p class="black-text"><a href="#aviso-privacidad" class="modal-trigger">Aviso de Privacidad</a></p>
			</div>
		</div>
	</div>
	<div class="footer-copyright black-text">
		<div class="container">
			Copyright CIDAM © 2019 Derechos Reservados
		</div>
	</div>
</footer>

<div id="aviso-privacidad" class="modal aviso_privacidad">
    <div class="modal-content white">
        <i class="material-icons modal-close icon-close amber hoverable">close</i>
        <?php $this->load->view('content/privacy'); ?>
    </div>
</div>