<?php   
    header('Access-Control-Allow-Origin: ');        
    header('Access-Control-Allow-Headers:');    
    header('Access-Control-Allow-Methods:  *');    
    $servername = "azureuser@20.171.25:176";   
    $database = "data";    
    $username = "root";    
    $password = "password";    
    $port = "3306";    
    $conn = new mysqli($servername, $username, $password,$database,$port);    
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);    
    else die();   
    echo "connected";
?>