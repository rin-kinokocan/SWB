<?php
namespace SWB;
/*
   Application loader.
   It starts session, registers autoload,
   makes some inportant functions available on inclusion.
 */
include("swb_selector.php");
include("swb_functions.php");
include(dirname(__DIR__)."/functions.php");
session_start();
spl_autoload_register(function ($class){
    $class=str_replace("\\","/",$class);
    include dirname(__DIR__). "/" . $class . '.class.php';
});
?>
