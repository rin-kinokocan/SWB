<?php
namespace SWB;
//hold some datas about the page.
class swb_datas{
    public $dat_page;//parsed current url
    public function __construct(){
	$this->dat_page=ltrim($_SERVER['REQUEST_URI'],'/');
	$this->dat_page=rtrim($this->dat_page,'/');
	$this->dat_page=explode('/',$this->dat_page);
    }
}
?>
