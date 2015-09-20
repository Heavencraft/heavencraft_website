<?php
	session_start();
	require_once('templates/header.inc.php');
?>

			<h2 class="text-center">Achat d'HPs</h2>

<?php
	if (isset($_GET['reset']))
	{
		unset($_SESSION['username']);
	}

	if (isset($_POST['username']))
	{
		if (!preg_match('/^[A-Za-z0-9_]{1,16}$/', $_POST['username']))
		{
			echo '<p class="text-danger">Le nom du joueur que vous avez saisi est incorrecte.</p>';
		}
		else
		{
			$_SESSION['username'] = $_POST['username'];
		}
	}
	
	if (isset($_SESSION['username']))
	{
?>
			<p class="text-center">Vous allez entrer un StarPass pour <b><?=$_SESSION['username'];?></b><br />
			Si vous souhaitez acheter des HPs pour un autre joueur, <a href="hp_achat.php?reset=1">cliquez ici</a>.</p>
			<div class="text-center">Pour rappel, les taux de conversion sont les suivants :
			<ul>
				<li>1 StarPass = 25 HPs</li>
				<li>1 HP = 20 pièces d'or en SRP</li>
				<li>1 HP = 80 jetons en Créative</li>
			</ul></div>
			<div id="starpass_311464"></div><script type="text/javascript" src="http://script.starpass.fr/script.php?idd=311464&amp;verif_en_php=1&amp;datas="></script><noscript>Veuillez activer le Javascript de votre navigateur s\'il vous pla&icirc;t.<br /><a href="http://www.starpass.fr/">Micro Paiement StarPass</a></noscript>
<?php
	} else {
?>
			<h4 class="text-center">Quel joueur doit recevoir les HPs ?</h4>
			<form action="hp_achat.php" method="POST">
				<p class="text-center">Nom du joueur : <input type="text" name="username"  pattern="[A-Za-z0-9_]{1,16}" />
				<input type="submit" text="Valider" /></p>
			</form>
<?php
	}

	require_once('templates/footer.inc.php');
?>