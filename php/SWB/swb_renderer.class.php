<?php
namespace SWB;
class swb_renderer{
    protected $cls_db;//database connection
    protected $cls_data;//url etc.
    protected $dat_description;
    protected $dat_title="default";
    public function func_prep($str){//wrapper
	return $this->cls_db->func_prep($str);
    }
    protected function func_script(){}
    public function func_meta(){
	swb_load_template("meta.php");
	echo "<title>$this->dat_title</title>";
	echo "<meta name='description' content=$this->dat_description>";
    }
    public function func_custom_head(){}
    public function func_body(){}
    public function __construct($description='',$title=''){
	$this->cls_db=new swb_db();
	$this->cls_data=new swb_datas();
	if(!empty($description))
	    $this->dat_description=$description;
	if(!empty($title))
	    $this->dat_title=$title;
    }
}
?>
