<?php
namespace SWB;
class swb_title_description{
    protected $dat_title="default";
    protected $dat_description="A website built with SWB.";
    public function get_title(){
	return $this->dat_title;
    }
    public function get_description(){
	return $this->dat_description;
    }
    public function set_title($t){
	$this->dat_title=$t;
    }
    public function set_description($d){
	$this->dat_description=$d;
    }
}
?>
