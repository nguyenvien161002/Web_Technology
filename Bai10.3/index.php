<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <form action=" dangnhap_xuly.php" method="post"style="width: 400px; margin: 100px auto;">
        <h1 class="text-center">Đăng Nhập</h1>
        <table class="table table-dark">
            <tr>
                <td><label for="name">Username:</label></td>
                <td><input type="text" name="username" id="name"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" name="password" id="pass"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember"><span>Remember</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-danger float-end" type="submit" value="cancel" name="cancel">
                    <input class="btn btn-primary float-end me-3" type="submit" value="login" name="login">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>