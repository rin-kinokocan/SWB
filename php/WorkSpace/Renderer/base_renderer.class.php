<?php
namespace WorkSpace\Renderer;
class base_renderer extends \SWB\swb_renderer{
    public function print_head(){
	$this->print_title_description();
	$this->print_custom_head();
	\SWB\swb_load_template("meta.php");
    }
    public function print_custom_head(){}
    public function __construct(){
	parent::__construct();
    }
}
?>
