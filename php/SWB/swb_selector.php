<?php
namespace SWB;
/*It returns renderer class based on current uri.*/
function swb_selector(){
    //Making these statements too complicated is not recommended.
    $swb_dat=new swb_datas();
    if(is_null($swb_dat->dat_page[0])||$swb_dat->dat_page[0]==""){
	//index page
	$swb_ren=new swb_index_renderer();
    }
    else if($swb_dat->dat_page[0]=="admin"){
	//admin page
	$swb_ren=new swb_admin_renderer();
    }
    else{
	//not found
	$swb_ren=new swb_notfound_renderer();
    }
    return $swb_ren;
}
?>
