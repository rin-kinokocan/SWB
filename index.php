<?php
require_once("php/SWB/swb_loader.php");
//Do whatever you like here, but do not break things.
$selector=new SWB\swb_selector();
$renderer=$selector->get_renderer();
?>
<!DOCTYPE html>
<html>
    <head>
	<?php 
	$renderer->print_head();
	?>
    </head>
    <body>
	<?php 
	$renderer->print_body();
	?>
    </body>
</html>

