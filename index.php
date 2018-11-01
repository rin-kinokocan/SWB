<?php
require_once("php/SWB/swb_loader.php");
//Do whatever you like here, but do not break things.
$url_checker=new SWB\swb_url_checker();
$selector=new SWB\swb_selector($url_checker);
$renderer=$selector->get_renderer();
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
