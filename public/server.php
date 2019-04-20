<?php

$databaseHost = 'localhost';
$databaseName = 'registration';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (!$mysqli){
    die("Database Failed" . mysqli_error($connection));
 }
?>