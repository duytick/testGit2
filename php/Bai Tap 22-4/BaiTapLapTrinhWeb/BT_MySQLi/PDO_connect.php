<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect_PDO</title>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = null;
        try{
            $conn = new PDO("mysql: host=$servername; dbname=demo",$username,$password);
            //set the PDO error mode to exception
            if($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
                echo "connect successfully";
            }
            
            else 
                throw new PDOException("Some error message");
        } catch(PDOException $e){
            echo "Connection failed".$e->getMessage();
        }

    ?>
</head>
<body>
    
</body>
</html>