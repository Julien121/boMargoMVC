<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'index';
}
$uc = $_REQUEST['uc'];
switch($uc){
	case 'index':
	{
		include("controleurs/c_accueil.php");break;
	}
}
include("vues/v_pied.php") ;
?>

