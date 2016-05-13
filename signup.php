<?php

//start sessions for persistence login. Log user in on signup. 
session_start();

//extract all post fields from form
$username = $_POST['signup_username'];
$password = $_POST['signup_password'];
$email = $_POST['email'];
$type = $_POST['type'];

//echo($username . $password . $email . $type);

//store username for persistent login.
$_SESSION['username'] = $username;
//echo($_SESSION['username']);

//connect to dbms
//credentials
$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "sproutkitchen";

//connect
$connection = new mysqli($db_host, $db_username, $db_password, $db_name);
//exception handling
if($connection->connect_error){
    die("Connection to database could not be established. Please check if server is running and credentials.");       
}
/*
else{
    echo("Successful connection.");
}
*/

//add to database
$sql_username = '"' . $connection->real_escape_string($username) . '"';
$sql_password = '"' . $connection->real_escape_string($password) . '"';
$sql_email = '"' . $connection->real_escape_string($email) . '"';
$sql_type = '"' . $connection->real_escape_string($type) . '"';

$insert_row = $connection->query("INSERT INTO USERS (USERNAME, PASSWORD, EMAIL, TYPE) VALUES($sql_username, $sql_password, $sql_email, $sql_type)");

//validation
if($insert_row){
    echo("Sign up successful.");
}
else{
    //insert code to count existence of email
}

?>