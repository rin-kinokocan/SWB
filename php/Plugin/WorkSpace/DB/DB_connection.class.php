<?php
namespace WorkSpace\DB;
class DB_connection{
    protected $cls_db;
    public function __construct(){
	$this->cls_db=new \SWB\swb_db();
    }
}
?>
