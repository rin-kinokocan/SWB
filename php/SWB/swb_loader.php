<?php
namespace SWB;
/*
   Application loader.
   It starts session, registers autoload,
   makes some inportant functions available on inclusion.
 */
include("swb_functions.php");
define("SWB_ROOT",rtrim(__DIR__,' SWB'));// /php/
session_start();
spl_autoload_register(function ($class){
    $class=str_replace("\\","/",$class);
    if(substr($class,0,4) === "SWB/"){
	//if the class is a part of SWB
	include SWB_ROOT. $class . '.class.php';
    }
    else{
	//otherwise
	include SWB_ROOT. "Plugin/" . $class . '.class.php';
    }
});
?>
