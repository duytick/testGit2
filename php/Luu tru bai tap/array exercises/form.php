<!DOCTYPE html>
<html lang="en">
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
<?php
    $name = $gender = $email = $comment = $website = "";
    $nameErr = $genderErr = $emailErr = $commentErr = $websiteErr = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(empty($_POST["name"]))
            
            $nameErr = "Name is required";
        else
            $name = test_input($_POST['name']);

        if(empty($_POST["email"]))
            $emailErr = "Email is required";
        else
            $email = test_input($_POST['email']);
            
        if(empty($_POST["website"]))
            $websiteErr = "";
        else
            $website = test_input($_POST['website']);

        if(empty($_POST["comment"]))
            $commentErr = "";
        else
            $website = test_input($_POST['comment']);

         if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
              }


    }
    function test_input($data){
        // $data = trim($data);
        // $data = stripslashes($data);
        // $data = htmlspecialchars($data);
        return $data;
    }
    

?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Name: <input type = "test" name = "name" required><span class = "error">*<?php echo $nameErr?></span> <br><br>
        Email: <input type = "email" name = "email" autocomplete="on"><span class = "error">*<?php echo $emailErr?></span> <br><br>
        Website: <input type = "test" name = "website"><br><br>
        Comment:<br> <textarea name="comment" cols="30" rows="10"></textarea><br>
        Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class = "error">*<?php echo $genderErr?></span>
            <br><br>
        <input type = "submit" name = "submit" value = "Submit">
    </form>
    <?php
    echo "name: ".$name."<br>";
    echo "nameErr: ".$nameErr."<br>";
    ?>
</body>
</html>