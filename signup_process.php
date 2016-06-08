<?php
/**
*Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-*wei-7b7564103;
*/
//start sessions for persistence login. Log user in on signup. 
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

//extract all post fields from form
$username = $_POST['signup_username'];
$password = $_POST['signup_password'];
$email = $_POST['email'];

//echo($username . $password . $email . $type);

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

$insert_row = $connection->query("INSERT INTO USERS (USERNAME, PASSWORD, EMAIL) VALUES($sql_username, $sql_password, $sql_email)");
//validation
if($insert_row){
//    echo("Sign up successful.");     
    $_SESSION['email'] = $sql_email; 
    $_SESSION['name'] = $sql_username;
}
else{
    //email already exists
    die("Email already exists. Please return to the last page and change it.");
}

//close the connection
mysqli_close($connection);

//link over to add listing
header('Location: add_listing.php');

?>