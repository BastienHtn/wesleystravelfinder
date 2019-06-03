<?php
/*
				/!\ IMPORTANT /!\
	La gestion du formulaire de connexion/déconnexion
	est gérée dans manage_session.php
*/
	
// Si la session est admin, on affiche les informations du compte
if(isset($_SESSION['nickname']))
{
?>
<div id="formLogin" class="form-login">
	<div class="form-login-disconnection">
		<form name='form_disconnection' action='' method='post'>
			<h1>Informations compte</h1>
			<br>
			<div class="compte">
				<span class="label-login">Pseudo :</span>
				<span class="label-login">&nbsp;<?php echo $_SESSION['nickname']; ?></span>
				<br>
				<input class='btn btn-danger' type='submit' name='disconnect' value='Se déconnecter'/>
			</div>
		</form>
	</div>
</div>
<?php
}
else	// Si la session n'est pas admin, on affiche le formulaire de connexion
{
?>
<div id="formLogin" class="form-login">
	<div class="form-login-connection">
		<form name='form_connection' action='' method='post'>
			<div class="display-4">Connexion</div>
			<br>
			<div class="connection">
				<span class="label-login display-4">Pseudo</span>
				<input class='form-control' type='text' name='nickname' required/>
				<span class="label-login display-4">Mot de passe</span>
				<input class='form-control' type='password' name='password'/>
				<input class='btn btn-success' type='submit' name='connect' value='Se connecter'/>
			</div>
		</form>
	</div>
</div>
<?php
}
?>
