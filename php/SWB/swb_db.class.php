<?php
namespace SWB;
class swb_db{
    private $cls_pdo;
    public function func_prep($query){
	return $this->cls_pdo->prepare($query);
    }
    public $cls_datas;
    
    public function __construct(){
	$this->cls_datas=new swb_datas();
	$this->cls_pdo=NULL;
	$db_name="dbname";
	$db_user="username";
	$db_pass="password";
	try{
	    $this->cls_pdo=new \PDO($db_name,$db_user,$db_pass);
	}
	catch(PDOException $e){
	    echo "error ... yes.<br/>";
	    echo $e->getMessage();
	}
    }
}
?>
