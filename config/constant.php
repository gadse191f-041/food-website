<?php

//create constant for repeating values
//execute query in save data in database

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food_order')
    $con=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());//database connection
    $db_select=mysqli_select_db(DB_NAME) or die(mysqli_error());

?>