<?php
namespace Default;
class page_base{
    protected $cls_db;
    public function __construct(){
	$this->cls_db=new \SWB\swb_db();
    }
}
?>
