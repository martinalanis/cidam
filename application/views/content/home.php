<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$img_path = base_url('assets/images').'/';

?>


<!-- <div class="container-fluid" > -->
<section style="margin-top: 120px;">
	<div class="container row mb-0">
		<div class="col s12 m8">
			<div id="swiper-servicios" class="swiper-container">
				<div id="home-swiper" class="swiper-wrapper">
					<div class="swiper-slide bg-img" style="background-image: url('<?php echo $img_path; ?>gallery/carousel-inovation-small.JPG');">
						<div class="row valign-wrapper h-300">
							<p>Inovación</p>
						</div>
					</div>
					<div class="swiper-slide bg-img" style="background-image: url('<?php echo $img_path; ?>gallery/carousel-tecnology-small.jpg');">
						<div class="row valign-wrapper h-300">
							<p>Nuevas Tecnologías</p>
						</div>
					</div>
					<div class="swiper-slide bg-img" style="background-image: url('<?php echo $img_path; ?>gallery/carousel-security-small.JPG');">
						<div class="row valign-wrapper h-300">
							<p>Seguridad</p>
						</div>
					</div>
					<div class="swiper-slide bg-img" style="background-image: url('<?php echo $img_path; ?>gallery/carousel-process-small.jpg');">
						<div class="row valign-wrapper h-300">
							<p>Procesos</p>
						</div>
					</div>
					<div class="swiper-slide bg-img" style="background-image: url('<?php echo $img_path; ?>gallery/carousel-quality-small.jpg');">
						<div class="row valign-wrapper h-300">
							<p>Calidad</p>
						</div>
					</div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		
		</div>
		<div class="col s12 m4">
			
			<div class="row mb-0">
				<div id="soluciones-integrales" class="col s12">
					<div class="card no-margin z-depth-0" style="border-radius: 6px 6px 0 0;">
						<div class="card-image" style="border-radius: 6px 6px 0px 0px;">
							<img src="<?php echo $img_path; ?>gallery/solutions.jpg">
							<span class="card-title center-align" style="left: 0; right: 0; text-shadow: 1px 1px 2px #2F5FA8;">Soluciones Integrales</span>
						</div>
						<div class="card-content center-align" style="padding-bottom: 0px;">
							<p class="pb-10 black-text">Servicios al sector agroalimentario
		
							Líderes en servicios especializados y proyectos para cadenas agroalimentarias</p>
						</div>
						<div class="card-action center-align no-padding">
							<a href="#" class="btn btn-block waves waves-efect-light blue darken-3 no-margin">Conoce mas</a>
						</div>
		
					</div>
				</div>
			</div>
		
		</div>
	</div>
</section>

<section class="section-padding white">
	<div class="row container mb-0">
		<div class="col s12 m6">
			<div class="row">
				<div class="col s12 center-align mb-30">
					<h5>Nuestros Servicios</h5>
				</div>
				<div class="col s12">
					<div class="row">
						<div class="col s12">
							<div class="card no-margin hoverable pointer" style="border-radius: 6px;">
								<div class="card-content black-text" style="border-radius: 6px; padding: 15px;">
									<span class="card-title center-align">Catálogo de servicios</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12">
					<div class="row">
						<div class="col s12">
							<div class="card no-margin hoverable pointer" style="border-radius: 6px;">
								<div class="card-content black-text" style="border-radius: 6px; padding: 15px;">
									<span class="card-title center-align">Especializados y Proyectos</span>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col s12">
					<div class="row">
						<div class="col s12">
							<div class="card no-margin hoverable pointer" style="border-radius: 6px;">
								<div class="card-content black-text" style="border-radius: 6px; padding: 15px;">
									<span class="card-title center-align">Cursos  y Capacitaciones</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 m6">
			<div class="row">
				<div class="col s12 center-align">
					<h5>Nuestras Acreditaciones</h5>					
				</div>
				<div class="col s12">
					<div id="swiper-acreditaciones" class="swiper-container">
						<div id="swiper-wrapper" class="swiper-wrapper">
							<div class="swiper-slide"><img class="responsive-img" src="<?php echo $img_path; ?>Acreditaciones/A-1009-094 18.jpg" alt=""></div>
							<div class="swiper-slide"><img class="responsive-img" src="<?php echo $img_path; ?>Acreditaciones/SA-0992-037 18.jpg" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-padding">
	<div class="row container">
		<div class="col s12 m6 right-align">
			<img class="responsive-img pointer" src="<?php echo $img_path; ?>gallery/video.jpg" alt="" onclick="abrir_video()" style="max-height: 50vh;">
		</div>
		<div class="col s12 m6" style="display: block; height: 50vh;">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCIDAM-193333921094523%2F%3Ffref%3Dts&tabs=timeline&width=380&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" height="100%" allowTransparency="true"></iframe> 
		</div>
	</div>
</section>


<div id="modal1" class="modal">
	<div class="modal-content" style="padding: 0px;">
		<div class="iframe-container">
			<iframe id="youtube-player" src="https://www.youtube.com/embed/DtcXgVmjeZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>