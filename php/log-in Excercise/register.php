<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
</head>

<body>
    <h1>Đăng ký thành viên</h1>
    <form action="register_submit.php" method="post">
        <table>
        <?php
            session_start();
             if(isset($_SESSION['notification']))
              echo $_SESSION['notification'];
              unset($_SESSION['notification']);
            ?>
            <tr>
                                                             
                
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật Khẩu:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập Lại Mật Khẩu:</td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Đăng Ký</button>
                    <button type="reset">Làm Mới</button>
                </td>
            </tr>

        </table>
    </form>

</body>

</html>