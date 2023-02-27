<?php 
    require'connect.php';
    if(isset($_POST['btn-lg'])){
        $username = $_POST['ten_dnhap'];
        $passwword = $_POST['mat_khau'];

        if(!empty($username) && !empty($password)){
            //insert dữ liệu
            // echo"<pre>";
            // print_r($_POST);

            $sql = "SELECT * FROM user WHERE ten_dnhap= '".$username."' and mat_khau='".$passwword."'";

            if($conn->query($sql)===TRUE){
                header('localhost:admin/index.php');
            }
            else{
                echo"Lỗi {$sql}".$conn->errno;
            }
        }
        else{
            echo"Tài khoản hoặc mật khẩu sai.Vui lòng nhập lại!";
        }
    }
?>