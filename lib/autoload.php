<?php
session_start();
$_SESSION["head_printed"] = false;

require_once "pdo.php";                         //database functies
require_once "view_functions.php";      //basic_head, load_template, replacecontent...
require_once "authorisation.php";      //controle login e.d.
require_once "show_messages.php";

//redirect naar NO ACCESS pagina als de gebruiker niet ingelogd is en niet naar
//de loginpagina gaat
if ( ! isset($_SESSION['usr']) AND ! $login_form AND ! $register_form AND ! $no_access)
{
    header("Location: /wdev_anneleen/oef62/no_access.php");
}
