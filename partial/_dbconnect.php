<?php
$server="localhost";
$username="root";
$password="";

//Check database is existing?
$dbconn=mysqli_connect($server,$username,$password);
if($dbconn){
   $dbcreate="CREATE DATABASE IF NOT EXISTS webdoc2";
   $result =mysqli_query($dbconn,$dbcreate);
   mysqli_close($dbconn);
}
// Connect to the database

$database="webdoc2";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
   die("error".mysqli_connect_error());
}

?>