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
        
    }
    if(isset($_POST["ajouter"]))
    {
        
    }
}
$lesThemes = $pdo->afficherThemes();
include("vues/v_accueil.php");
