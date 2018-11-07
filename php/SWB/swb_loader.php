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
spl_autoload_extensions(".class.php");
spl_autoload_register(function($class){
    $class=str_replace("\\","/",$class);
    include SWB_ROOT. $class . '.class.php';
});
?>
