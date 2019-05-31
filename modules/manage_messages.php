<?php

/**
 * Cette page a pour but d'afficher certains messages.
 * Par exemple le message informant la connexion/déconnexion.
 */

if(isset($_POST['disconnect']))	// Si on a cliqué sur le bouton 'Se déconnecter'
{
    // Message confirmant la déconnexion
    if($justDisconnected == true)
        echo '  <div class="success_message">
                    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                    <strong>Succès !</strong> Vous vous êtes déconnecté.
                </div>';
}

if(isset($_POST['connect']))
{
    // Message confirmant la connexion
    if($justConnected == true)
        echo '  <div class="success_message">
                    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                    Bienvenue '.$_SESSION['nickname'].', vous êtes connecté.
                </div>';
}
?>