<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
$_SESSION['email'] = "";
$_SESSION['page'] = "";
$_SESSION['name'] = "";
$_SESSION['error'] = "";
session_destroy();
header('Location: landing_page.php')
?>