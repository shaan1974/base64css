<?php

// print($_SERVER["DOCUMENT_ROOT"]);

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

<div class="test1">xxx1</div>
<hr/>
<div class="test2">xxx2</div>
<hr/>
<div class="test3">xxx3</div>
<hr/>
<div class="test4">xxx4</div>