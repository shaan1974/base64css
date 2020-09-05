<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Exemple #3</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
</HEAD>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<BODY> 

    <div id="wrapper" class="container">

        <div id="content" class="row">

			<br/>
			<b>IN WORK.</b>
			<?php
					require_once "../css64/rhea_css64_class.php"; 
					
					/*
					$CSS64->css_file = __DIR__. '/../data_css/css_with_import.css';
					$CSS64->css_minify = true;
					$r = $CSS64->transform();
					*/
			?>

			<!--
			[<?php echo strlen($r); ?>]
			<textarea style="width:100%;height:250px;"><?php print($r); ?></textarea>
			-->

			<style>
			<?php print($r); ?>
			</style>

	    </div>

    </div>

</BODY>
</HTML>		
