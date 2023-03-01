<?php
    // kết nối db
    $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

    // lấy dữ liệu từ form
    $matloai = $_POST['txtCatId'];
    $tentloai = $_POST['txtCatName'];
    
    // kiem tra các trường sư liệu
    if($matloai == "" || $tentloai == "" ){
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin!');</script>";
        echo "<script>window.location = 'add_category.php'</script>";

        die();
    }

    // sửa 
    $sql = "UPDATE theloai SET  ten_tloai = '$tentloai' WHERE ma_tloai = '$matloai'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Sửa bài viết thành công!');</script>";
        echo "<script>window.location = 'article.php'</script>";
    } else {
        echo "<script>alert('Sửa bài viết thất bại!');</script>";
        echo "<script>window.location = 'edit_article.php?id=" . $matloai . "'</script>";
}
?>
