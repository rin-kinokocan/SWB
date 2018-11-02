<?php
namespace Default;
class index_renderer extends \SWB\swb_renderer{
    public function __construct($d,$t){
	parent::__construct(
	    "Index page of a website built with SWB",
	    "index"
	);
    }
    public function func_body(){
	\SWB\swb_load_template("index_body.php");
    }
}
?>
