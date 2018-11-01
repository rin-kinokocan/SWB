<?php
namespace Me;
class page_base{
    protected $cls_db;
    private $ad_type;
    public function __construct(){
	$this->cls_db=new \SWB\swb_db();
    }
    public function load_ad($type="auto"){
	$this->ad_type=$type;
	ob_start(array($this,"ad_callback"));
	\SWB\swb_load_template("google-ad-responsive.php");
	ob_end_flush();
    }
    private function ad_callback($buf){
	return str_replace("AD_FORMAT",$this->ad_type,$buf);
    }
}
?>
