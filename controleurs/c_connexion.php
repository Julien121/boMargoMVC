<?php

if (isset($_POST) || !empty($_POST))
{
    if(isset($_POST["connexion"]))
    {
        if(!empty($_POST['login']) && !empty($_POST['mdp']))
        {
            $user=$pdo->getVisiteur($_POST['login'],$_POST['mdp']);
            if(!is_array($user))
            {
                 
                include("vues/v_connexion.php");
            }
            else
            {
                
            }
        }
        else
        {
            
        }
    }
}
