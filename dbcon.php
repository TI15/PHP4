<?php 


 
// Definera en funktion som sköter uppkoppling till databasen
function connect_db() { 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'klubben';

		// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
		// DittAnvändarID, DittLösen och den databas du har skapat tabellerna i.

	$mysqli = new mysqli($host, $user, $password, $database);

		//Kontrollerar teckentabell
	if (!$mysqli->set_charset("utf8")) {
		echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
	} 

	if ($mysqli->connect_errno) {
		echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}


?>