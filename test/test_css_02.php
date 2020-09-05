<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Exemple #2</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
</HEAD>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<BODY> 

    <div id="wrapper" class="container">

        <div id="content" class="row">

		<?php
				require_once "../css64/rhea_css64_class.php"; 
				
				$CSS64 = new Rhea_Css64();
				$CSS64->css_file = __DIR__. '/../data_css/webfontkit-titillium/stylesheet.css';
				$CSS64->css_minify = true;
				$r = $CSS64->transform();
		?>

		<style>
		<?php print($r); ?>

		.titillium
		{
			font-family: 'titillium_webregular';
		}

		.grey
		{
			background-color:#eaeaea;
			border:1px solid #ddd;
			padding:5px;
		}
		</style>

		<br/>
		<b>Text without custom font :</b>
		<br/>
		<br/>
		<div class="grey">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
		<hr/>
		<b>Text with custom font :</b>
		<br/>
		<br/>
		<div class="titillium grey">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>

        </div>

    </div>

</BODY>
</HTML>		
