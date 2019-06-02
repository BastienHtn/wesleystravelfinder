<?php
    if(isset($_SESSION['nickname']))
        $label_connexion = "Compte";
    else
        $label_connexion = "Connexion";
?>
<div class="navbar bg-dark">
    <div class="navbar-block">
        <a href="accueil.php?page=resa">Réservation</a>
        <a id="navBrand" href="../index.php"><img src="../img/planeLogo.png"></a>
        <a href="accueil.php?page=connexion"><?php echo $label_connexion; ?></a>
    </div>
</div>