<?php
     $servername = 'localhost';
     $database = 'btth01_cse485';
     $charset = 'utf8mb4';
     $port = '';

     try {
         $conn = new PDO("mysql:host=$servername;dbname=$database;port=3306", 'root','');

         if(isset($_GET["id"])){
            $id = $_GET["id"];
         }
    
         $stmt = $conn->prepare("DELETE FROM tacgia where ma_tgia = :id");
         $stmt->bindParam(':id', $id);
         $stmt->execute();
         
         echo "<script>alert('Thêm dữ liệu thành công!')</script>";
         header("Location: author.php");
         
     } catch (PDOException $e) {
         throw new PDOException($e->getMessage(), $e->getCode());  
     }
 
?>