<!doctype html>
<html lang="vi">
<body>
    <h1>ADD NEW COURSE</h1>
    <?php
        $cname = isset($_GET['name']) ? $_GET['name'] : "";
        $ccode = isset($_GET['code']) ? $_GET['code'] : "";
        $ccredit = isset($_GET['credit']) ? $_GET['credit'] : "1";
        $cduration = isset($_GET['duration']) ? $_GET['duration'] : "";
        
        if (isset($_GET["chk1"])){
            $check1 = (($_GET["chk1"]) == "c") ? "checked" : "unchecked";
        }

        if (isset($_GET["chk2"])){
            $check2 = (($_GET["chk2"]) == "c") ? "checked" : "unchecked";
        }
        
        if (isset($_GET["chk3"])){
            $check3 = (($_GET["chk3"]) == "c") ? "checked" : "unchecked";
        }

        if (isset($_GET["chk4"])){
            $check4 = (($_GET["chk4"]) == "c") ? "checked" : "unchecked";
        }
        
        if(isset($_GET["error"])){
            if($_GET["error"] == "1") {
                echo "<strong>*Course's Code đã tồn tại !</strong>";
            } 
            else if ($_GET["error"] == "2"){
                echo "<strong>*Course's Name đã tồn tại !</strong>";
            }
            else if ($_GET["error"] == "3"){
                echo "<strong>*Vui lòng chọn ít nhất 1 giảng viên !</strong>";
            }
        }
    ?>
    <form id="form1" method="post" action="doaddcourse.php">
        <p>
            <label for="courseCode">Course Code: </label>
            <input type="text" id="courseCode" name="courseCode" size="30" maxlength="3" required placeholder="Tối đa 3 kí tự" 
            value="<?php echo $ccode;?>" ></p>
        <p>
            <label for="courseName">Course Name: </label>
            <input type="text" id="courseName" name="courseName" size="50" required value="<?php echo $cname;?>"></p>
        <p>
            <label for="courseCredits">Credits:</label>
            <input type="number" name ="courseCredits" id="courseCredits" value="<?php echo $ccredit;?>" min="1" max ="4"></p>
        <p>
            <label for="courseDuration">Duration:</label>
            <select id="courseDuration" name="courseDuration">
                <option <?php if($cduration == 15) echo 'selected';?> value="15">15</option>
                <option value="30" selected>30</option>
                <option <?php if($cduration == 45) echo 'selected';?> value="45">45</option>
                <option <?php if($cduration == 60) echo 'selected';?> value="60">60</option>
                <option <?php if($cduration == 75) echo 'selected';?> value="75">75</option>
                <option <?php if($cduration == 90) echo 'selected';?> value="90">90</option>
            </select></p>
        <p>
            Please choose list of intructors below:<br/>
            <input type="checkbox" name="checkbox[0]" id="check" <?php if(isset($check1)) echo $check1; ?> 
            value="Aliba HJ" >Aliba HJ<br/>
            <input type="checkbox" name="checkbox[1]" id="check" <?php if(isset($check2)) echo $check2; ?> 
            value="Jame Hot">Jame Hot<br/>
            <input type="checkbox" name="checkbox[2]" id="check" <?php if(isset($check3)) echo $check3; ?> 
            value="Taliba Adam">Taliba Adam<br/>
            <input type="checkbox" name="checkbox[3]" id="check" <?php if(isset($check4)) echo $check4; ?> 
            value="John Ken">John Ken</p>
            <p>
            Outlines:<br/>
            <textarea name="courseOut" cols="60" rows="8"></textarea></p>
        <p>
            <input type="submit" name="dopost" id="submit" value="Submit" onclick=myFunction() >
            <input type="reset" name="reset" value="Reset">
        </p>
        <!-- <script type="text/javascript"> 
            function myFunction() {
                var checkbox = document.getElementsByName('checkbox');
                var text = "";
                for (var i = 0; i < checkbox.length; i++) {
                    if (checkbox[i].checked) {
                        text += checkbox[i].value + ", ";
                    }
                }
                return text;
            }
        </script> -->
    </form>  
</body>
</html>