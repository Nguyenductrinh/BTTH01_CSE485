<?php
    // kết nối db
    $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

    // lấy dữ liệu từ form
    $matgia = $_POST['txtCatId'];
    $tentgia = $_POST['txtCatName'];
    $hinhanh = $_POST['hinhanh'];
    
    // kiem tra các trường sư liệu
    if($matgia == "" || $tentgia == "" ){
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin!');</script>";
        echo "<script>window.location = 'add_author.php'</script>";

        die();
    }

    // sửa 
    $sql = "UPDATE tacgia SET  ten_tgia = '$tentgia', hinh_tgia = '$hinhanh' WHERE ma_tgia = '$matgia'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Sửa bài viết thành công!');</script>";
         echo " <script>window.location = 'author.php'</script> ";
    } else {
        echo "<script>alert('Sửa bài viết thất bại!');</script>";
        echo " <script>window.location = 'author.php'</script>";
}
?>