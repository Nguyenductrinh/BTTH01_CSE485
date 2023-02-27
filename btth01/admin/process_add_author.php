<?php
    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "btth01_cse485";
    $conn = mysqli_connect($servename,$username,$password,$dbname);
    $sql = "INSERT INTO tacgia(ma_tgia,ten_tgia,hinh_tgia) values ('".$_POST['ma']."','".$_POST['ten']."','".$_POST['hinh']."')";
    mysqli_query($conn,$sql);
    header('Location:author.php');
?>

