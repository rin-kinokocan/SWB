<?php
class swb_notfound_renderer extends swb_renderer{
    public function __construct(){
	header("HTTP/1.0 404 Not Found");
	parent::__construct();
    }

    public function func_body(){
?>
    <div id="base">
	<div id="center">
	    404 --NOT FOUND--
	</div>
    </div>
<?php 
}
}
?>
