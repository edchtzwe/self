<?php
/**
*Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-*wei-7b7564103;
*/
//start sessions for persistence login. Log user in on signup. 
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

//extract all post fields from form
$email = $_POST['login_email'];
$password = $_POST['login_password'];

//echo($email . $password    );

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
//else{
//    echo("Successful connection.");
//}

//add to database
$sql_email = '"' . $connection->real_escape_string($email) . '"';
$sql_password = '"' . $connection->real_escape_string($password) . '"';

$result = $connection->query("SELECT email FROM users WHERE email = $sql_email AND password = $sql_password");

if($result->num_rows > 0){
//    echo "<script type='text/javascript'>alert('Login Successful');</script>";
    //close the connection
    $name = $connection->query("SELECT username FROM users WHERE email = $sql_email AND password = $sql_password");
    if($name->num_rows > 0){
        $_SESSION['name'] = $name->fetch_object()->username;
        $_SESSION['email'] = $sql_email;
//        die($email);
//        die($_SESSION['name']);
    }
    else{
        die("Error: Contact vendor quoting login_process, line " . __LINE__);
    }
//    die($name->fetch_object()->username);
    mysqli_close($connection);    
    //link over to add listing
    header('Location: add_listing.php');
}
else{
    $_SESSION['error'] = "User not found.";
    header("Location: error_message.php");
}

?>