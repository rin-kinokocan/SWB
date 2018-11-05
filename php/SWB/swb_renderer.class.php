<?php
namespace SWB;
/*
   Base class for every renderer.
   Controller.
 */
class swb_renderer{
    protected $cls_title_description;
    protected function print_title_description(){
	echo "<title>".$this->cls_title_description->get_title()."</title>";
	echo '<meta name="description" content='.$this->cls_title_description->get_description().'>';
    }
    public function print_head(){
	//load head templates from this method.
	$this->print_title_description();
    }
    public function print_body(){
	//load body templates from this method.
    }
    public function __construct($meta=NULL){
	if($meta === NULL)
	    $this->cls_title_description=new swb_title_description();
	else
	    $this->cls_title_description=$meta;
    }
}
?>
