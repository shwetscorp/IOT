<?php

if(isset($_GET['submit'])){

$input_pins = $_GET['input_pins'];
$output_pins = $_GET['output_pins'];
$sensor_id = $_GET['sensor_id'];
$board_id = $_GET['board_id'];
$smodel_id = $_GET['smodel_id'];
$bmodel_id = $_GET['bmodel_id'];

$file_name="";
$file="";


if($board_id=='Arduino' && $sensor_id=='Button')
{
$file = "programs/Button/Button.php";
$file_name="programs/Button/name.php";
}
if($board_id=='Arduino' && $sensor_id=='Bluetooth')
{
$file = "programs/bluetooth/bluetooth.php";
$file_name="programs/bluetooth/name.php";
}



}

?>