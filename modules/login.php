<?php

if(isset($_POST['connect']))	// Si on a cliqué sur le bouton 'Se connecter'
{
	// Récupération des valeurs entrées
	$_SESSION['nickname'] = $_POST['nickname'];
	
	// Message confirmant la connexion
	echo '<div class="success_message">Bienvenue '.$_SESSION['nickname'].', vous êtes connecté</div>';
}

if(isset($_POST['disconnect']))	// Si on a cliqué sur le bouton 'Se déconnecter'
	{
		// Suppression des variables de session et de la session
		$_SESSION = array();
		session_destroy();
		echo '<div class="success_message">Vous vous êtes déconnecté</div>';
	}
	
	// Si la session est admin, on affiche les informations du compte
	if(isset($_SESSION['nickname']))
	{
?>
	<div class="form_login">
		<form name='form_disconnection' action='' method='post'>
		<h2>Informations compte</h2>
		<table align='center'>
			<tr>
				<td>
					Pseudo :
				</td>
				<td>
					<?php echo $_SESSION['nickname']; ?>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input class='btn btn-danger' type='submit' name='disconnect' value='Se déconnecter'/>
				</td>
			</tr>
		</table>
		</form>
	</div>
<?php
	}
	else	// Si la session n'est pas admin, on affiche le formulaire de connexion
	{
?>
	<div class="form_login">
		<form name='form_connection' action='' method='post'>
		<table align='center'>
			<tr>
				<td>
					Pseudo :
				</td>
			</tr>
			<tr>
				<td>
					<input class='form-control' type='text' name='nickname' required/>
				</td>
			</tr>
			<tr>
				<td>
					Mot de passe :
				</td>
			</tr>
			<tr>
				<td>
					<input class='form-control' type='password' name='password'/>
				</td>
			</tr>
			<tr>
				<td class='connect_button'>
					<input class='btn btn-success' type='submit' name='connect' value='Se connecter'/>
				</td>
			</tr>
		</table>
		</form>
	</div>
<?php
	}
?>
