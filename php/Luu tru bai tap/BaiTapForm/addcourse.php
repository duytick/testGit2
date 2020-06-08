<!doctype html>
<html lang="vi">
<body>
<?php
     $code = $name = $instr =  $dura = $cre = $outl = "";
     $codeErr= $nameErr = $instrErr="";
     //ham kiem tra checkbox
     function Checked($a,$b)
     {
         foreach($a as $value){
            if($value == $b)
                echo "checked";
         }
     }

        if(isset($_GET["error"])){
            if($_GET['error'] == 1){
                $codeErr = "*Course's already exists!";
            }
            if($_GET['error'] == 2){
                $codeErr = "*Course's name is duplication!";
            }
            if($_GET['error'] == 3){
                $instrErr = "*you have to choose one instructor at least!";
            }
            $code = $_GET["Course_code"];
            $name = $_GET["Course_name"];         
            $dura = $_GET["Dura"];
            $cre = $_GET["Cre"];
            $outl = $_GET["outlines"];
            $instr = explode(", ",$_GET["Instructors"]);
            
        
        }
    

    ?>
    <h1>ADD NEW COURSE</h1>
    <?php 
       echo '<b style = "color:Darkorange">'.$codeErr.'</b>';
       echo '<b style = "color:Darkorange">'.$nameErr.'</b>';
       echo '<b style = "color:Darkorange">'.$instrErr.'</b>';
    ?>
 
    <form id="form1" method="post" action="doaddcourse.php">
        <p>
            <label for="">Course code: </label>
            <input type="text" name="Course_code" size="30" value = "<?php echo $code?>" required></p>
        <p>
            <label for="">Course name: </label>
            <input type="text" name="Course_name" size="55" value = "<?php echo $name?>" required></p>
        <p>
            <label for="">Credits:</label>
            <input type="number" name ="Cre" id="Cre" value = "<?php if(isset($_GET["error"])) echo $cre; else echo "1";?>" min = "1" max = "4"></p>
        <p>
            <label for="">Duration:</label>
            <select id="" name="Dura">
                <option value="15" <?php if($dura == 15) echo "selected";?>>15</option>
                <option value="30" <?php if(isset($_GET["error"])){if($dura == 30) echo "selected";} else echo "selected";?>>30</option>
                <option value="45" <?php if($dura == 45) echo "selected";?>>45</option>
                <option value="60"<?php if($dura == 60) echo "selected";?>>60</option>
                <option value="75" <?php if($dura == 75) echo "selected";?>>75</option>
                <option value="90" <?php if($dura == 90) echo "selected";?>>90</option>
            </select></p>
        <p>
            Please choose list of intructors below:<br/>
            <input type="checkbox" name = "Instructors[]" value="Aliba HJ" <?php if(isset($_GET["error"])) Checked($instr,"Aliba HJ");?> >Aliba HJ<br/>
            <input type="checkbox" name = "Instructors[]" value="Jame Hot" <?php if(isset($_GET["error"])) Checked($instr,"Jame Hot");?>>Jame Hot<br/>
            <input type="checkbox" name = "Instructors[]" value="Taliba Adam" <?php if(isset($_GET["error"])) Checked($instr,"Taliba Adam");?>>Taliba Adam<br/>
            <input type="checkbox" name = "Instructors[]" value="John Ken" <?php if(isset($_GET["error"])) Checked($instr,"John Ken");?>>John Ken

        <p>
            Outlines:<br/>
            <textarea cols="70" rows="8" name = "outlines"></textarea></p>
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">

    </form>  
    

</body>
</html>
