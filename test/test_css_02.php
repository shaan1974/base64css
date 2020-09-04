<?php

require_once "../css64/rhea_css64_class.php"; 

$CSS64 = new Rhea_Css64();

$CSS64->css_file = __DIR__. '/../data_css/webfontkit-titillium/stylesheet.css';
$CSS64->css_minify = true;

$r = $CSS64->transform();
?>

<!--
[<?php echo strlen($r); ?>]
<textarea style="width:100%;height:250px;"><?php print($r); ?></textarea>
-->

<style>
<?php print($r); ?>


.titillium
{
	font-family: 'titillium_webregular';
}
</style>

<hr/>

<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
<hr/>
<div class="titillium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
