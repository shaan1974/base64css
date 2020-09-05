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
			<?php	
					require_once "../css64/rhea_css64_class.php"; 

					$CSS64 = new Rhea_Css64();
					$CSS64->css_file = __DIR__. '/../data_css/css_with_import.css';
					$CSS64->css_minify = false;
					$r=$CSS64->transform();										
			?>

			<div class="row">
				<div class="col-md-6">
					<b>BEFORE :</b>
					<br/>
					<br/>
					<textarea style="width:100%;height:100%;font-size:12px"><?php echo file_get_contents(__DIR__. '/../data_css/css_with_import.css'); ?></textarea>
				</div>
				<div class="col-md-6">
					<b>AFTER :</b>
					<br/>
					<br/>
					<textarea style="width:100%;height:100%;font-size:12px"><?php print($r); ?></textarea>
				</div>
			</div>

			<style>
			<?php print($r); ?>
			</style>

			<hr/>
			<div class="bird"></div>
			<hr/>
			<div class="bird2"></div>
			<hr/>

	    </div>

    </div>

</BODY>
</HTML>		
