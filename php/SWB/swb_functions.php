<?php
namespace SWB;
/*
   SWB functions.
*/
function swb_load_template($file){
    //loads template file.
    include(dirname(__DIR__).'/template/'.$file);
}
?>
