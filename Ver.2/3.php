<?php
session_start();
if(!isset($_SESSION['result']))
{
	header('Location:1.php');
}
$result=$_SESSION['result'] ?? null;
session_unset();
?>