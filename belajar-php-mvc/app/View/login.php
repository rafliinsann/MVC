<?php 

namespace RafliInsan\BelajarPhpMvc\View;

class Login
{    function login(): void
    {
        echo "";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <center>
        <h1>Halaman Login</h1>
        <form action="prosesLogin.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" autocomplete="off">
            <br>
            <label style="margin-right: 4px;">Password</label>
            <input type="password" name="password">

            <br>
            <br>

            <input type="submit" name="submit" value="Login">
            <p>Lanjutkan Sebagai <a href="lndex">Tamu</a></p>
        </form>
    </center>
</body>
</html>