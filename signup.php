<?php

//start sessions for persistence login. Log user in on signup. 
session_start();

//extract all post fields from form
$username = $_POST['signup_username'];
$password = $_POST['signup_password'];
$email = $_POST['email'];

//store username for persistent login.
$_SESSION['username'] = $username;

?>