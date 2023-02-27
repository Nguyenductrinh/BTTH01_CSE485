<?php 
    $host ="localhost";
    $username = "root";
    $password = "";
    $database = "btth01_cse485";

    $conn =new mysqli($host,$username,$password,$database);

    if($conn -> connect_errno){
        die("Kết nối không thành công:".$conn->connect_errno);
    }
    
?>