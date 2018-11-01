<?php
namespace SWB;
/*
   Factory class for swb_renderer
   Model?
 */
class swb_selector{
    protected $url_checker;//swb_url_regex
    public function __construct($dat){
	$url_checker=$dat;
    }
    public function get_renderer(){
	$rules=simplexml_load_file(SWB_ROOT."SWB/renderer_map.xml");
	foreach($rules->children() as $item){
	    $rule="[^".$item->path."$]";
	    if($this->url_checker->url_regex($rule)){
		$class=$item->class->__toString();
		return new $class();
	    }
	}
    }
}
?>
