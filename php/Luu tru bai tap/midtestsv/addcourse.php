<!doctype html>
<html lang="vi">
<body>
    <h1>ADD NEW COURSE</h1>
    <form id="form1" method="post" action="doaddcourse.php">
        <p>
            <label for="">Course code: </label>
            <input type="text" name="" size="30" ></p>
        <p>
            <label for="">Course name: </label>
            <input type="text" name="" size="55" ></p>
        <p>
            <label for="">Credits:</label>
            <input type="number" name ="" id="" value="1"></p>
        <p>
            <label for="">Duration:</label>
            <select id="" name="">
                <option value="15">15</option>
                <option value="30" selected>30</option>
                <option value="45">45</option>
                <option value="60">60</option>
                <option value="75">75</option>
                <option value="90">90</option>
            </select></p>
        <p>
            Please choose list of intructors below:<br/>
            <input type="checkbox" value="Aliba HJ">Aliba HJ<br/>
            <input type="checkbox" value="Jame Hot">Jame Hot<br/>
            <input type="checkbox" value="Taliba Adam">Taliba Adam<br/>
            <input type="checkbox" value="John Ken">John Ken
        <p>
            Outlines:<br/>
            <textarea cols="70" rows="8"></textarea></p>
        <p>
            <input type="submit" name="dopost" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </p>
    </form>  
</body>
</html>