<?php 
   $host = "127.0.0.1";	
   $user = "root";	
   $password = "";	
   $db = "formula_1";		

	$connessione = new mysqli($host, $user, $password, $db);

	if($connessione === false)
	{
		die("<p>Errore durante la connessione: " .$connessione->connect_error. "</p>");
	}
?>