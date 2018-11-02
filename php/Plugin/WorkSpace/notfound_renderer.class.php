<?php
namespace WorkSpace;
class notfound_renderer extends \SWB\swb_renderer{
    public function __construct($d="",$t=""){
	header("HTTP/1.0 404 Not Found");
	parent::__construct(
	    "NOTFOUND PAGE",
	    "404-notfound"
	);
    }
    public function func_custom_meta(){
	echo '<meta name="robots" content="noindex">';
    }
    public function func_body(){
	\SWB\swb_load_template("404.php");
    }
}
?>
