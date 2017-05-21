<?php 
include('core/dbconfig.php');

$table_countries = "CREATE TABLE IF NOT EXISTS countries (
  country_id int(11) NOT NULL,
  country_name varchar(30) CHARACTER SET utf8 NOT NULL,
  status tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
)";



$table_states="CREATE TABLE IF NOT EXISTS states (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ";

$table_cities="CREATE TABLE IF NOT EXISTS cities (table
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
)";

?>