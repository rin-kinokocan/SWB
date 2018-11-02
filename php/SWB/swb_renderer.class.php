<?php
namespace SWB;
/*
Base class for every renderer.
Controller.
*/
class swb_renderer{
    protected $dat_description="A website built with SWB.";
    protected $dat_title="default";
    protected function func_script(){}
    public function func_meta(){
	swb_load_template("meta.php");
	echo "<title>$this->dat_title</title>";
	echo "<meta name='description' content=$this->dat_description>";
    }
    public function func_custom_head(){}
    public function func_body(){}
    public function __construct($description='',$title=''){
	if(!empty($description))
	    $this->dat_description=$description;
	if(!empty($title))
	    $this->dat_title=$title;
    }
}
?>
