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

//this chunk over here takes care of the checkboxes and text for availability
//can be changed to only include timeslots
//if timeslot is empty, then the day is unavailable.
$mon_check = $_POST["mon"];
$time_mon = $_POST["time_mon"];
$tue_check = $_POST["tue"];
$time_tue = $_POST["time_tue"];
$wed_check = $_POST["wed"];
$time_wed = $_POST["time_wed"];
$thu_check = $_POST["thu"];
$time_thu = $_POST["time_thu"];
$fri_check = $_POST["fri"];
$time_fri = $_POST["time_fri"];
$sat_check = $_POST["sat"];
$time_sat = $_POST["time_sat"];
$sun_check = $_POST["sun"];
$time_sun = $_POST["time_sun"];

$size = $_POST["size"];
$price = $_POST["price"];

$coolroom = $_POST["coolroom"];
$store = $_POST["store"];
$oven = $_POST["oven"];

$other_features = $_POST["other_features"];

?>