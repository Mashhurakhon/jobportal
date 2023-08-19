<?php 
session_start();
if (!isset($_SESSION['cheked']) || empty($_SESSION['cheked']) || $_SESSION['cheked']  != 1 )
{
    session_unset();
	header("Location: signin.php");
	//unset($_SESSION['cheked']);
 
}
?>