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
        
                <?php
                 
                    if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
                        echo "ten truy cap: ".$_SESSION['user']."<br>";
                        echo "mat khau:".$_SESSION['pass'];
                    }
                    else
                        echo "Session khong ton tai";

                ?>
                <br><a href="Session.php">Tro ve trang Session</a>
                <br><a href ="deleteSession.php">Delete Session</a>
      
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