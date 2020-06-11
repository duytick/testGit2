<?php
    session_start();
    include "config.php";
//thực hiện khi người dùng điền đầy đủ thông tin đẻ submit
    $_SESSION["notification"] = "Xin thực hiện điền đầy đủ thông tin ";
    if(isset($_POST['submit']) && $_POST['username'] !='' && $_POST['password'] != '' ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
       $level = 0;
       
       
       
       
        
        if($password != $repassword){
            $_SESSION['notification'] = "Mật khẩu nhập lại không trùng khớp";
            header("location:register.php");
            die();
        }
            
        $sql = "SELECT * FROM user WHERE username ='$username'";
        $old = mysqli_query($conn, $sql);
        if(mysqli_num_rows($old) > 0){
            $_SESSION['notification'] ="Tên đăng nhập đã tồn tại"  ;

            header("location:register.php");
            //echo mysqli_num_rows($old);
            die();

        }
        else{
            $password = md5($password);
            $sql = "INSERT INTO user(username,password,level) VALUES ('$username','$password','$level')";
            mysqli_query($conn,$sql);
            $_SESSION['notification'] = "Đã đăng ký thành công";
            header("location:login.php");
        }
       
    }
    else{
        header("location:register.php");
    }

?>