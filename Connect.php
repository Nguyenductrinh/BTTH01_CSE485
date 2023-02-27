<?php 
    $severname ="localhost";
    $username = "root";
    $password = "";
    $database = "btth01_cse485";

    $conn = mysqli_connect($severname,$username,$password,$database);
    if(!$conn){
        echo ("kết nối thất bại");
    }
    else{
        echo("kết nối thành công");
    }
?>