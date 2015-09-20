<?php
	session_start();

	// Redirect to error page if something goes wrong
	require_once('libs/starpass.inc.php');

	function getErrorMessage($code, $username, $error_code) {
		$datetime = date("c");
		$result = "Une erreur s'est produite, merci de contacter un administrateur en lui indiquant les informations suivantes :<br>";
		$result .= "Code starpass : <b>" . $code . "</b><br>";
		$result .= "Utilisateur : <b>" . $username . "</b><br>";
		$result .= "Horodatage : <b>" . $datetime . "</b><br>";
		$result .= "Code d'erreur : <b>" . base64_encode($code . "|" . $username . "|" . $datetime . "|" . $error_code) . "</b>";
		return $result;
	}

	require_once('templates/header.inc.php');
?>
			<h2 class="text-center">Achat d'HPs</h2>
<?php
	if (!isset($_SESSION['username']))
	{
		echo getErrorMessage($codes, "", "Username not defined");
	}
	else
	{
		$username = $_SESSION['username'];
		require_once('libs/database.inc.php');

		$stmt = $mysqli->prepare('INSERT INTO heavencraft_users (username, balance) VALUES(?, 25) ON DUPLICATE KEY UPDATE balance=balance+25;');
		$stmt->bind_param("s", $username);
	
		if (!$stmt->execute()) {
			echo getErrorMessage($codes, $username, "SQL Error during INSERT : " . $stmt->error);
		}
		// INSERT -> 1 Row affected
		// UPDATE -> 2 Rows affected
		else if ($stmt->affected_rows != 1 && $stmt->affected_rows != 2) {
			echo getErrorMessage($codes, $username, "SQL Error during INSERT : " . $stmt->error);
		}
		// Everything is OK
		else {
			$buy_infos = $pays . '/' . $palier . '/' . $id_palier . '/' . $type;
			$stmt2 = $mysqli->prepare('INSERT INTO starpass_history (username, buy_date, buy_codes, buy_infos) VALUES(?, NOW(), ?, ?);');
			$stmt2->bind_param("sss", $username, $codes, $buy_infos);
			if (!$stmt2->execute()) {
				echo "SQL Error : " . $stmt2->error;
			}
			?>
			<p class="text-center text-success">Le code <strong><?=$codes?></strong> a été validé avec succès !<br />
			Le compte <?=$username?> a été crédité de <strong>25</strong> HPs.</p>

			<p class="text-center">Faites <b>/hps</b> pour consulter et utiliser vos HPS dans le monde semi-RP où le créative.</p>

			<p class="text-center"><a class="btn btn-default" href="hp_achat.php">Cliquez ici pour acheter d'autres HPs.</a>
			<a class="btn btn-default" href="/">Cliquez là pour revenir à l'accueil.</a></p>
			<?php
		}

		$stmt->close();
	}
	
	require_once('templates/footer.inc.php');
?>