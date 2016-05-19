<?php
session_start();
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

//for user id
$user_id = $_SESSION['user_id'];

/*
INSERT CODE TO EXTRACT ID FOR BRANCHING PURPOSES HERE
//if user ID already exists, then the user is starting a branch, so we will have to add a suffix to it.
//use ascii to determine next ascii
$sql = $connection->query("SELECT COUNT(*) FROM KITCHEN WHERE ID LIKE '8%'");
*/

//extract all post fields and store as variables

//basic details
$kitchen_name = '"' . $connection->real_escape_string($_POST["kitchen_name"]) . '"';
$kitchen_type = $_POST["kitchen_type"];
if($kitchen_type == 4){
    $kitchen_type = '"' . $connection->real_escape_string($_POST["kitchen_other"]) . '"';
}
$kitchen_phone = '"' . $connection->real_escape_string($_POST["kitchen_phone"]) . '"';

//address
$loc_number = '"' . $connection->real_escape_string($_POST["loc_number"]) . '"';
$loc_suburb = '"' . $connection->real_escape_string($_POST["loc_suburb"]) . '"';
$loc_city = '"' . $connection->real_escape_string($_POST["loc_city"]) . '"';
$loc_state = '"' . $connection->real_escape_string($_POST["loc_state"]) . '"';
$loc_pcode = '"' . $connection->real_escape_string($POST["loc_pcode"]) . '"';

$time_mon = '"' . $connection->real_escape_string($_POST["time_mon"]) . '"';
$time_tue = '"' . $connection->real_escape_string($_POST["time_tue"]) . '"';
$time_wed = '"' . $connection->real_escape_string($_POST["time_wed"]) . '"';
$time_thu = '"' . $connection->real_escape_string($_POST["time_thu"]) . '"';
$time_fri = '"' . $connection->real_escape_string($_POST["time_fri"]) . '"';
$time_sat = '"' . $connection->real_escape_string($_POST["time_sat"]) . '"';
$time_sun = '"' . $connection->real_escape_string($_POST["time_sun"]) . '"';

$size = '"' . $connection->real_escape_string($_POST["size"]) . '"';
$price = '"' . $connection->real_escape_string($_POST["price"]) . '"';

$coolroom = $_POST["coolroom"];
$store = $_POST["store"];
$oven = $_POST["oven"];

//use binary code as text to depict which feature is covered
//eg, 111 will mean the kitchen has all features
//101 means the kitchen has coolroom(s) and oven(s)
$features = "";
if(isset($coolroom)){    
    $features = $features . "1,";    
}
else{
    $features = $features . "0,";
}
if(isset($store)){
    $features = $features . "1,";
}
else{
    $features = $features . "0,";
}
if(isset($oven)){
    $features = $features . "1";
}
else{
    $features = $features . "0";
}

$features = '"' . $connection->real_escape_string($features) . '"';

$other_features = '"' . $connection->real_escape_string($_POST["other_features"]) . '"';

//construct the sql statements
//handle basic details section
$row = $connection->query("INSERT INTO KITCHEN (user_id, name, type, phone, size, price, features, other_features) VALUES($user_id, $kitchen_name, $kitchen_type, $kitchen_phone, $size, $price, $features, $other_features)");

if($row){
    echo("Success");
}
else{
    die("Failed");
}

?>