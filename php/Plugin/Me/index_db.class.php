<?php
namespace Me;
class index_db extends page_base{
    public function get_what_new(){
	$str="SELECT * FROM changelog";
	$prep=$this->cls_db->func_prep($str);
	$prep->execute();
	return $prep;
	date("Y-m-d H:i:s");
    }
}
?>
