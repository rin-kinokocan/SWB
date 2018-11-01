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
    public get_renderer(){
	$rules=simplexml_load_file("renderer_map.xml");
	foreach($rules->childeren() as $item){
	    if($url_checker->url_regex($item->path)){
		return new $item->class();
	    }
	}
    }
}
?>
