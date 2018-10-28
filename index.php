<?php
require_once("php/SWB/swb_loader.php");
$renderer=SWB\swb_selector();
?>
<!DOCTYPE HTML>
<html>
    <head>
	<?php
	$renderer->func_meta();
	$renderer->func_custom_head();
	?>
    </head>
    <body>
	<?php 
	$renderer->func_body();
	?>
    </body>
</html>
