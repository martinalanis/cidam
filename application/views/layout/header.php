<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$css_path = base_url('assets/css').'/';
$img_path = base_url('assets/images').'/';
$js_path = base_url('assets/js').'/';
$plugins = base_url('assets/plugins').'/';
?>

<div id="scroll-top-btn" class="fixed-action-btn hide">
	<a id="scroll-top" href="#app_container" class="btn-floating btn-large hoverable scroll-top amber">
		<i class="large material-icons" style="font-size: 48px;">keyboard_arrow_up</i>
	</a>
</div>

<nav id="navbar">
	<div class="nav-wrapper">
		<div class="container">
			<a id="logo-nav" href="<?=base_url('/home');?>#app_container" class="brand-logo"><img id="logo-nav" src="<?php echo $img_path; ?>Logo1.png" alt="Logo" /></a>
			<ul class="right hide-on-med-and-down">
				<li><a class="hvr-underline-reveal uppercase" href="<?=base_url('home');?>#app_container">Inicio</a></li>
				<li><a class="hvr-underline-reveal uppercase" href="<?=base_url('quienes-somos');?>">Quiénes somos</a></li>
				<li><a class="hvr-underline-reveal uppercase" href="<?=base_url('servicios');?>">Servicios</a></li>
				<li><a class="hvr-underline-reveal uppercase" href="<?=base_url('grupo-de-trabajo');?>">Grupo de trabajo</a></li>
				<li><a class="hvr-underline-reveal uppercase" href="<?=base_url('contacto');?>">Contacto</a></li>
			</ul>
		</div>

		<ul id="nav-mobile" class="sidenav">
			<li class="sidenav-close"><a class="center-align" href="<?=base_url('home');?>#app_container"><img class="responsive-img" src="<?php echo $img_path; ?>Logo1.png" alt="Logo" /></a></li>
			<li class="sidenav-close" style="padding-top: 60px;"><a href="<?=base_url('home');?>#app_container" class="hvr-underline-reveal uppercase">Inicio</a></li>
			<li class="sidenav-close"><a href="<?=base_url('quienes-somos');?>" class="hvr-underline-reveal uppercase">Quiénes somos</a></li>
			<li class="sidenav-close"><a href="<?=base_url('servicios');?>" class="hvr-underline-reveal uppercase">Servicios</a></li>
			<li class="sidenav-close"><a href="<?=base_url('grupo-de-trabajo');?>" class="hvr-underline-reveal uppercase">Grupo de trabajo</a></li>
			<li class="sidenav-close"><a href="<?=base_url('contacto');?>" class="hvr-underline-reveal uppercase">Contacto</a></li>
		</ul>
		<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
	</div>
</nav>

<main>