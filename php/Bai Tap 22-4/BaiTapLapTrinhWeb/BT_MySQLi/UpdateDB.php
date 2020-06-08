<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
    $conn  = new mysqli('localhost','root','','demo') or die ("du lieu chua duoc ket noi");
          
    ?>
    <h1>UploadDB</h1>
    <form action="" method='POST'>
        Ten Lop: <input type="text" name="tenlop" value="<?php echo $_GET['tenlop'];?>">
        <input type="submit" name="submit" value="Upload">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $tenlop = $_POST['tenlop'];
            if(isset($_GET['malop'])){
                $malop = $_GET['malop'];
                $query = "UPDATE lop SET tenLop='$tenlop' WHERE maLop='$malop'";
                mysqli_query($conn, $query) or die("Error deleting record");
                header("location:connectMySQL.php");
                
            }      
        }
   
    
?>
    
</body>
</html>