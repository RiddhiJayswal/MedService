<?php  
$conn = mysqli_connect("localhost:3307","root","","medservice_database"); 
if (mysqli_connect_errno()) { 
    printf("Conection failed", mysqli_connect_error()); 
    exit(1); 
} 
 
// $conn = array( 
//     'hostname' => 'localhost:3307', 
//     'username' => 'root', 
//     'password' => '', 
//     'database' => 'medservice_database', 
// );