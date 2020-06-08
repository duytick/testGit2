<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h1>ADD NEW COURSE</h1>
    <?php
    $instrutorErr ="";
  
    ?>
   
    <form id="form1" method="post" action="doaddcourse.php">
        <p>
            <label for="">Course code: </label>
            <input type="text" name="Course_code" size="30" required value = "<?php if(isset($_POST["Course_code"])) echo $code;?>">
            <span class = "error" ><?php if (isset($_POST["Course_code"])) echo $codeErr;?></span></p>
        <p>
            <label for="">Course name: </label>
            <input type="text" name="Course_name" size="55" required value = "<?php if(isset($_POST["Course_name"]))echo $name;?>">
            <span class = "error" ><?php if(isset($_POST["Course_name"])) echo $nameErr;?></span></p>
        <p>
            <label for="">Credits:</label>
            <input type="number" name ="Cre" id="Cre" min="1" max="4" value = "<?php if(isset($_POST["Cre"]))echo $cre; else echo "1";?>"></p>
        <p>
            <label for="">Duration:</label>
            <select id="" name="Dura">
                <option value="15" <?php if(isset($_POST["Dura"])){if($dura == 15)echo"selected";}?>>15</option>
                <option value="30" <?php if(isset($_POST["Dura"])){if($dura == 30)echo"selected";} else echo "selected";?>>30</option>
                <option value="45" <?php if(isset($_POST["Dura"])){if($dura == 45)echo"selected";}?>>45</option>
                <option value="60"<?php if(isset($_POST["Dura"])){if($dura == 60)echo"selected";}?>>60</option>
                <option value="75"<?php if(isset($_POST["Dura"])){if($dura == 75)echo"selected";}?>>75</option>
                <option value="90"<?php if(isset($_POST["Dura"])){if($dura == 90)echo"selected";}?>>90</option>
            </select></p>
        <p>
            Please choose list of intructors below:<br/>
            
           <span class = "error" > <?php if(!isset($_POST["instructors"])) echo "*You have to choose one instructor at least<br>";?></span>
            <input type="checkbox" name = "instructors[]" value="Aliba HJ" <?php if (isset($_POST["instructors"]))checked($_POST["instructors"],"Aliba HJ"); ?>>Aliba HJ<br/>
            <input type="checkbox" name = "instructors[]" value="Jame Hot" <?php if (isset($_POST["instructors"]))checked($_POST["instructors"],"Jame Hot"); ?>>Jame Hot<br/>
            <input type="checkbox" name = "instructors[]" value="Taliba Adam" <?php if (isset($_POST["instructors"]))checked($_POST["instructors"],"Taliba Adam"); ?>>Taliba Adam<br/>
            <input type="checkbox" name = "instructors[]" value="John Ken" <?php if (isset($_POST["instructors"]))checked($_POST["instructors"],"John Ken"); ?>>John Ken

        <p>
            Outlines:<br/>
            <textarea cols="70" rows="8" name = "outlines"></textarea></p>
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">

    </form>  
    

</body>
</html>
