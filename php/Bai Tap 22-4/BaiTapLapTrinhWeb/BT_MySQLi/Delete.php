<h1>This is a tag</h1>
<?php
    $conn  = new mysqli('localhost','root','','demo') or die ("du lieu chua duoc ket noi");
    if(isset($_GET['malop'])){
        $malop = $_GET['malop'];
        $query = "DELETE FROM lop WHERE maLop='$malop'";
        mysqli_query($conn, $query) or die("Error deleting record");
        header("location:connectMySQL.php");
        
        


    }
   

?>