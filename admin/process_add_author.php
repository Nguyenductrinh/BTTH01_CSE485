<?php
     $servername = 'localhost';
     $database = 'btth01_cse485';
     $charset = 'utf8mb4';
     $port = '';

     try {
         $conn = new PDO("mysql:host=$servername;dbname=$database;port=3306", 'root','');
     } catch (PDOException $e) {
         throw new PDOException($e->getMessage(), $e->getCode());
     }

    //nhận dữ liệu từ form
    if(isset($_POST["them"])){
        $ma_tgia = $_POST['tieude'];
        $hinhanh = $_POST['hinhanh'];

    }

    // thêm dữ liệu
    $stmt = $conn->prepare("INSERT INTO tacgia(ten_tgia, hinh_tgia) VALUES (?, ?)");
    if($stmt->execute([$ma_tgia,$hinhanh])){
        echo "<script>alert('Thêm dữ liệu thành công!')</script>";
        header('Location: author.php');         
    }else{
        echo "<script>alert('Thêm dữ liệu thất bại!')</script>";
        header('Location: author.php');
    }
?>