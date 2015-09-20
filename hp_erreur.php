<?php
	session_start();
	require_once('templates/header.inc.php');
?>

			<h2 class="text-center">Achat d'HPs</h2>

			<p class="text-center text-danger">Votre code est incorrect. Si vous pensez que c'est une erreur, merci de contacter le support StarPass.<br />
			N'oubliez pas de vérifier les 0 et les O, les 1 et les I, ou encore que vous avez contacté le bon numéro.</p>

			<p class="text-center"><a class="btn btn-default" href="hp_achat.php">Cliquez ici pour réessayer.</a>

<?php
	require_once('templates/footer.inc.php');
?>