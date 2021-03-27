<?php
session_start();
$result = $_SESSION['result']?? null;
session_unset();
?>
