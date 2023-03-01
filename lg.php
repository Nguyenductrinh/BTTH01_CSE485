<?php 
    require'connect.php';
    if($_POST){
        $user_name = $_POST['ten_dnhap'];
        $user_pass = $_POST['mat_khau'];
        $sql = "SELECT * FROM user WHERE ten_dnhap='$user_name' AND mat_khau ='$user_pass';";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row) {
            header('Location:./admin/index.php');
        }
    }
?>