<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST) || !empty($_POST))
{
    if(isset($_POST["modif"]))
    {
        echo 'Modif';
        die();
    }
    if(isset($_POST["ajouter"]))
    {
        echo 'ajouter';
        die();
    }
}
if(isset($_GET["sup"]) && is_int($_GET["sup"]))
{
    echo'Sup du N° '.$_GET["sup"];
    die();
}
$lesThemes = $pdo->afficherThemes();
include("vues/v_accueil.php");
