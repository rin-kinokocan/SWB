<?php
namespace WorkSpace\Renderer;
class index_renderer extends base_renderer{
    public function __construct(){
	/*
	   You can change title and description like this.
	   If your site uses more complicated things,
	   create another class specified for this purpose.
	 */
	parent::__construct();
	$this->cls_title_description->set_title("Index");
	$this->cls_title_description->set_description("The index page of a website built with SWB");
    }
    public function print_body(){
	\SWB\swb_load_template("index_body.php");
    }
}
?>
