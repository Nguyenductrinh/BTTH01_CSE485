<?php
    require'connect.php';
    if(isset($_POST['btn-reg'])){
        $username = $_POST['ten_dnhap'];
        $password = $_POST['mat_khau'];

        if(!empty($username) && !empty($password)){
            //insert dữ liệu
            // echo"<pre>";
            // print_r($_POST);

            $sql = "INSERT INTO `user` (`ten_dnhap`,`mat_khau`) VALUES('$username','$password')";

            if($conn->query($sql)===TRUE){
                echo"Lưu dữ liệu thành công";
            }
            else{
                echo"Lỗi {$sql}".$conn->errno;
            }
        }
        else{
            echo"Bạn cần nhập đầy đủ thông tin trước khi đăng nhập";
        }
    } 
?>
<br>
<a href="login.php">Quay lại trang đăng nhập</a>