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
                    if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
                        echo "ten truy cap: ".$_COOKIE['user']."<br>";
                        echo "mat khau:".$_COOKIE['pass'];
                    }
                    else
                        echo "Cookie khong ton tai";

                ?>
                <br><a href="cookie.php">Tro ve trang Cookie</a>
                <br><a href ="deleteCookie.php">Delete Cookie</a>
      
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