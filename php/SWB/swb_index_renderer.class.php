<?php
namespace SWB;
class swb_index_renderer extends swb_renderer{
    
    public function func_custom_head(){
    }
    public function func_body(){
	swb_load_template("index_body.php");
    }
    public function __construct($d='',$t=''){
	$description="A webpage build with SWB.";
	$title="index";
	parent::__construct($description,$title);
    }
}
?>
