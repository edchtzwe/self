<?php

//extract all post fields and store as variables
$kitchen_name = $_POST["kitchen_name"];
$kitchen_type = $_POST["kitchen_type"];
if($kitchen_type == 4){
    $kitchen_type = $_POST["kitchen_other"];
}
$loc_number = $_POST["loc_number"];
$loc_suburb = $_POST["loc_suburb"];
$loc_city = $_POST["loc_city"];
$loc_state = $_POST["loc_state"];
$loc_pcode = $POST["loc_pcode"];

$time_mon = $_POST["time_mon"];
$time_tue = $_POST["time_tue"];
$time_wed = $_POST["time_wed"];
$time_thu = $_POST["time_thu"];
$time_fri = $_POST["time_fri"];
$time_sat = $_POST["time_sat"];
$time_sun = $_POST["time_sun"];

$size = $_POST["size"];
$price = $_POST["price"];

$coolroom = $_POST["coolroom"];
$store = $_POST["store"];
$oven = $_POST["oven"];

$other_features = $_POST["other_features"];

//now that we have the variables, it's time to construct the sql queries

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

?>