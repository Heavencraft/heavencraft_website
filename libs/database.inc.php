<?php

$mysqli = new mysqli('localhost', 'mc-sql', '9e781e41f865901850d5c3060063c8ca', 'mc-db');

if ($mysqli->connect_error)
{
	die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

mysqli_query($mysqli, "set names utf8");

?>