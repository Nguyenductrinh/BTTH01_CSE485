
<?php
$servername = 'localhost';
$database = 'btth01_cse485';
$charset = 'utf8mb4';
$port = '';

// kết nối db
$con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

    $mabaiviet = $_POST['txtCatId'];
    $tieude = $_POST['txtTieuDe'];
    $t_bhat = $_POST['txtBaiHat'];
    $theloai = $_POST['txtMaTheLoai'];
    $tomtat = $_POST['txtTomTat'];
    $noidung = $_POST['txtNoiDung'];
    $tgia = $_POST['txtMaTacGia'];
    $hinhanh = $_POST['hinhanh'];
    echo $mabaiviet;


    // sửa 
    $sql = "UPDATE `baiviet` SET `tieude`='$tieude',`ten_bhat`='$t_bhat',`ma_tloai`='$theloai',`tomtat`='$tomtat',`noidung`='$noidung',`ma_tgia`='$tgia',`hinhanh`='$hinhanh' WHERE ma_bviet = '$mabaiviet'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Sửa bài viết thành công!');</script>";
         echo " <script>window.location = 'article.php'</script> ";
    } else {
        echo "<script>alert('Sửa bài viết thất bại!');</script>";
        echo " <script>window.location = 'article.php'</script>";
}

?>