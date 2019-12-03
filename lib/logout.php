<?php
session_start(); //de sessie starten
session_destroy(); // de sessie stoppen
unset($_SESSION); // en gaan we de sessie voor de zekerheid leegmaken

session_start(); // we heropenen de sessie
session_regenerate_id(); // een nieuw id genereren voor de zekerheid
$_SESSION["msg"][] = "U bent afgemeld!"; // bericht geven dat je bent afgemeld
header("Location: /wdev_anneleen/oef62/login.php"); // ga terug naar de login pagina
?>