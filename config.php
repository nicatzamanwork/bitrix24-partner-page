<?php 


/* Attempt to connect to MySQL database */
$db = mysqli_connect("localhost", "abdul_butagrupaz", "Buta123456!", "abdulkadirbudak_com_butagrupaz");

$db->set_charset('utf-8');
 
// Check connection
if($db === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (!$db->set_charset('utf8mb4')) {
    printf("Error loading character set utf8mb4: %s\n", $mysqli->error);
    exit;
}


?> 