<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "newosms";
$db_port = 3306;

//Create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);


// Check database connection
if ($conn->connect_error){
    die('Connection Failed');
 }
 //else{
//     echo 'Connect';
// }
?>