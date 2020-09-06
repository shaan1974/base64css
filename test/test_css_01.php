<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Exemple #1</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
</HEAD>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
        require_once "../css64/rhea_css64_class.php"; 

        $CSS64 = new Rhea_Css64();
        $CSS64->css_file = __DIR__. '/../data_css/css.css';
        $CSS64->css_minify = false;
        $CSS64->rbg_to_hex=true;
        $CSS64->named_colors_to_hex=true;
        $r=$CSS64->transform();
        $CSS64->save( __DIR__. '/../data_css_b64/css.css');
?>

<link rel="stylesheet" href="../data_css_b64/css.css">

<BODY> 

    <div id="wrapper" class="container">

        <div id="content" class="row">

        <br/>
        <div class="row">
				<div class="col-md-6">
					<b>BEFORE :</b>
					<br/>
					<br/>
					<textarea style="width:100%;height:350px;font-size:12px"><?php echo file_get_contents(__DIR__. '/../data_css/css.css'); ?></textarea>
				</div>
				<div class="col-md-6">
					<b>AFTER :</b>
					<br/>
					<br/>
					<textarea style="width:100%;height:350px;font-size:12px"><?php print($r); ?></textarea>
				</div>
			</div>                
        <br/>
        COLOR 1 <span class="color1A">xxxx</span>
        <br/>
        COLOR 2 <span class="color2A">xxxx</span>
        <br/>
        <br/>
        <table class="table table-striped table-bordered">
            <tr>
                <td style="width:1%">background: url('img/symbol_middot_green.png');</td>
                <td><div class="test1">&#160;</div></td>
            </tr>
            <tr>
                <td>background: url('../data_images/bird.png');</td>
                <td><div class="test2">&#160;</div></td>
            </tr>
            <tr>
                <td>url('/base64css/data_images/symbol_middot_green.png');</td>
                <td><div class="test3">&#160;</div></td>
            </tr>
            <tr>
                <td>background:url('http://localhost/base64css/data_images/bird.png');</td>
                <td><div class="test4">&#160;</div></td>
            </tr>
        </table>

        </div>

    </div>

</BODY>
</HTML>