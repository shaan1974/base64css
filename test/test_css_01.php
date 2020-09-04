<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Exemple #1</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
</HEAD>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<BODY> 

    <div id="wrapper" class="container">

        <div id="content" class="row">

        <?php
                require_once "../css64/rhea_css64_class.php"; 

                $CSS64 = new Rhea_Css64();
                $CSS64->css_file = __DIR__. '/../data_css/css.css';
                $CSS64->css_minify = true;
                $r = $CSS64->transform();
        ?>

        <!--
        [<?php echo strlen($r); ?>]
        <textarea style="width:100%;height:250px;"><?php print($r); ?></textarea>
        -->

        <style>
        <?php print($r); ?>
        </style>

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