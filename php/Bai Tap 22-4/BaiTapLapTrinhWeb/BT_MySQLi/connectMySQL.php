<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNECT PHP</title>
</head>
<body>
    <h1>LINH</h1>
    <?php
    $serverName = "localhost";
    $userName = "root";
    $passport = "";
    $conn = new mysqli($serverName,$userName,$passport,'demo');
    mysqli_query($conn,'SET NAMES UTF8');
    //check my connect
    if($conn->connect_error){
        die('connection failed:'.$conn->connect_error);

    }
    else echo "connected successfully";
    //tao cau query
    $query = 'SELECT ngaysinh,hoten,noiSinh FROM SinhVien';
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $i = 0;
        while($row = mysqli_fetch_array($result)){
            $i++;
            echo "<br> $i:  ".$row['ngaysinh'].":".$row['hoten'].":".$row['noiSinh'];

        }
    }
    else{
        echo "khong co ban ghi nao";

    }
    

    echo "<br>check1";
    //$row1 = mysqli_fetch_assoc($result);
        echo '<pre>';
       print_r($result);
        echo '</pre>';

    ?>
    <table style = "width: 100%; text-align:center">
        <tr>
            <th>so thu tu</th>
            <th>ma lop</th>
            <th>ten lop</th>
            <th>xu ly</th>
        </tr>
    <?php 
        $query = 'SELECT maLop,tenLop FROM lop';
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                
                $i++;
                echo '<tr><td>'.$i.'</td>'; 
                echo '<td>'.$row['maLop'].'</td>'; 
                echo '<td>'.$row['tenLop'].'</td>'; 
                echo '<td><a href="Delete.php?malop='.$row["maLop"].'">Xoa</a>' ;
                echo '<a href="UpdateDB.php?malop='.$row["maLop"].'&tenlop='.$row['tenLop'].'">Sua</a></td>';
                echo "<tr>";
            }
        }
        
    //$conn->close();
    ?>
    </table>
    <form action="" method="POST">
        Ma Lop:  <input type="text" name="maLop" ><br><br>
        Ten Lop:  <input type="text" name="tenLop" id="">
        <input type="submit" name="submit" value="Submit" >
    </form>
    <?php

        if(isset($_POST['submit'])){

        
        $malop = $_POST['maLop'];
        echo $malop;
        $tenlop = $_POST['tenLop'];
        echo $tenlop;
        $query = "INSERT INTO lop(maLop,tenLop) VALUES('$malop','$tenlop')";
        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
            header("location:connectMySQL.php");
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
          }
          //header("location:connectMySQL.php");
        }
       
                
    //$conn->close();
        //header("location:connectMySQL.php");
        echo "<br>check2";
        //$row1 = mysqli_fetch_assoc($result);
            echo '<pre>';
           print_r($result);
            echo '</pre>';
    
        ?>
    ?>
</body>
</html>