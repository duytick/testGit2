<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap trinh PHP va mySQL</title>

</head>

<body>
    <div id="box">
        <div class="tieude">Bai Tap Thuc Hanh</div>
        <div class="noidung">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="upload">
                <input type="submit" value="Upload du lieu" name ="submit">

            </form>
            <?php
                    if(isset($_POST['submit'])){
                        if($_FILES['upload']['error'] > 0)
                        {
                            echo "Co loi trong viec Upload file";
                        }
                        else{
                            move_uploaded_file($_FILES['upload']['tmp_name'], 
                            'upload/' .$_FILES['upload']['name']);
                            echo '<br>Upload du lieu len Server thanh cong!';
                            echo '<pre>';
                            print_r($_FILES['upload']);
                            echo '<pre>';

                        }
                        $st = "upload/".$_FILES['upload']['name'];
                        echo "<br><br><a href ='$st'>Download ve may tinh</a>";
                    }
            
            ?>
        </div>
    </div>
    <style type="text/css">
        #box {
            margin: 0 auto;
            width: 600px;
            border: 2px solid blue;
            border-radius: 7px;
        }
    </style>

</html>