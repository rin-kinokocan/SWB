<?php
namespace WorkSpace\Renderer;
class notfound_renderer extends base_renderer{
    public function __construct(){
	header("HTTP/1.0 404 Not Found");
	parent::__construct();
	$this->cls_title_description->set_title("Index");
	$this->cls_title_description->set_description("The index page of a website built with SWB");
    }
    public function print_custom_head(){
	echo '<meta name="robots" content="noindex">';
    }
    public function print_body(){
	\SWB\swb_load_template("404.php");
    }
}
?>
