<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if(isset($_POST['disconnect']))	// Si on a cliqué sur le bouton 'Se déconnecter'
{
	// Suppression des variables de session et de la session
	$_SESSION = array();
    session_destroy();
    
    $justDisconnected = true;
}

if(isset($_POST['connect']))	// Si on a cliqué sur le bouton 'Se connecter'
{
	// Récupération des valeurs entrées
	$_SESSION['nickname'] = $_POST['nickname'];
    
    $justConnected = true;
}

/**
 * $page = Le lien de la page index.php
 * lorsque l'on clique sur "Créer mon Voyage"
 */
if(isset($_SESSION['nickname']))
{
    $page = "modules/accueil.php?page=resa";
}
else
{
    $page = "modules/accueil.php?page=connexion";
}
?>