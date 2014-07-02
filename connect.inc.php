<?php 
$dbHost = "rdbms.strato.de";
$dbUser = "U1639187";
$dbPass = "m5b!3ck4Li68tyx";
$dbName = "DB1639187";
$connect = @mysql_connect($dbHost, $dbUser, $dbPass) or die("Konnte keine Verbindung zum Datenbankserver aufbauen!");
$selectDB = @mysql_select_db($dbName, $connect) or die("Konnte die Datenbank <b></b> nicht auswählen!");
?>