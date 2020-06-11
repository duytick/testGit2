<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    session_start();
    if(isset($_SESSION['notification']))
    {
        echo $_SESSION['notification'];
        unset($_SESSION['notification']);
    }
    ?>
    <form action="login_submit.php" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>