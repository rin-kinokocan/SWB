<?php
namespace SWB;
//hold some datas about the page.
//It's more like a struct than a class.
class swb_url_checker{
    public $dat_parsed_url;//parsed current url
    public $dat_url;//current url
    public function __construct(){
	$this->dat_url=$_SERVER['REQUEST_URI'];
	$this->dat_parsed_url=ltrim($_SERVER['REQUEST_URI'],'/');
	$this->dat_parsed_url=rtrim($this->dat_parsed_url,'/');
	$this->dat_parsed_url=explode('/',$this->dat_parsed_url);
    }
    public function url_regex($str){
	return preg_match_all($str,$this->dat_url);
    }
    public function get_parsed_url(){
	return $this->dat_url;
    }
}
?>
