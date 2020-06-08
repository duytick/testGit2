<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap trinh PHP va mySQL</title>
    
</head>
<body>
<div id = "box">
                <div class ="tieude">Bai Tap Thuc Hanh</div>
                <div class="noidung">
            <form action="" method="post">
                Ten dang nhap: <input type="text" name="user" id=""><br><br>
                Mat khau     : <input type="password" name ="pass"><br><br>
                <input type="submit" value="Dang nhap he thong" name ="login"> 
               
        </form>
        <?php
                    if(isset($_POST['login'])){
                        $_SESSION['user'] = $_POST['user'];
                        $_SESSION['pass'] = $_POST['pass'];
                        header("location:showSession.php");
                    }
                    else
                        echo "khong the submit";
                ?>
        </div>
</div>
    <style type = "text/css">
    #box{
        margin:0 auto;
        width: 600px;
        border: 2px solid blue;
        border-radius: 7px;
    }
    </style>
</html>