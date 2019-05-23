<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$css_path = base_url('assets/css').'/';
$img_path = base_url('assets/images').'/';
$js_path = base_url('assets/js').'/';
$plugins = base_url('assets/plugins').'/';
?>

<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="" name="author">

	<title>CIDAM <?php if(isset($title)) echo "| ".$title; ?></title>

	<link rel="stylesheet" href="<?php echo $css_path; ?>animate.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>materialize.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>swiper.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>site_1.css" />

	<?php
	if(isset($view_style))
	{
		if( ! is_array($view_style))
		{
			?>
			<link rel="stylesheet" href="<?php echo $css_path.$view_style; ?>" />
			<?php
		}
		else
		{
			foreach($view_style as $vs)
			{
				?>
				<link rel="stylesheet" href="<?php echo $css_path.$vs; ?>" />
				<?php
			}
		}
	}
	?>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script type="text/javascript" data-pace-options='{ "ajax": false }' src="<?php echo $js_path; ?>pace.min.js"></script>

</head>

<body class="grey lighten-4">
	<div id="app_container">
		<div class="flex-container">