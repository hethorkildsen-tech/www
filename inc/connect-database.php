<?php
//Denne funksjonen kobler til databsen og har en standardverdi.
function kobleTil ($databasenavn="bedriftsdagenn"){
	$vert = "sql27.webhuset.no";
	$bruker = "bedriftsdagenn";
	$passord = "2FOpreDY";
	$tilkobling = mysql_connect($vert, $bruker, $passord);
	mysql_query('SET NAMES utf8');

	if (!$tilkobling) {
			die("Kunne ikke koble til: " . mysql_error());
	}

	$valgtDB = mysql_select_db($databasenavn, $tilkobling);
	if (!$valgtDB) {
			die("Kunne ikke bruke databasen: " . mysql_error());
	}
	return $tilkobling; //skjer bare hvis alt gikk bra
}//kobleTil
//Denne funksjonen er fin for å skrive ut spørringer på en rask måte
function testSQL ($sqltest){
	echo "<pre>";
	echo $sqltest."<p>";
	echo "</pre>";
}
?>

