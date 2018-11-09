<?php
namespace SWB;
/*
   Factory class for swb_renderer
   Model?
 */
class swb_selector{
    public function get_renderer(){
	$rules=simplexml_load_file(SWB_ROOT."renderer_map.xml");
	$url_checker=new \SWB\swb_url_checker();
	foreach($rules->children() as $item){
	    $rule="[^".$item->path."$]";
	    if($url_checker->url_regex($rule)){
		$class=$item->class->__toString();
		return new $class();
	    }
	}
    }
}
?>
