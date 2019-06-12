<?php
$connection = mysqli_connect('localhost', 'u932309184_lovek', 'sl8EoOC5hEaR','u932309184_love');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
} 
	
$select_db = mysqli_select_db($connection, 'u932309184_love');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}  
?>