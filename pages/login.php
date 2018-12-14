<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ورود اعضا</title>
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="main">
        <h1>ورود به پنل کاربری</h1>
        <img src="../images/logicon.png" alt="login icon">
        <form action="checklogin.php" method="post">
            
            <input type="text" name="username" placeholder="نام کاربری" autofocus required>
            <br><br>
            
            <input type="password" name="password" placeholder="رمز عبور" required>
            <br><br>
        <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeAzH4UAAAAACHl4JxDT_OcqUz9XpJz1upIku3V"></div>
        <br>
            <input type="submit" value="ورود" name="register">
            <input type="reset" value="تصحیح">
        </form>
        <br>
        <p id="errorMassageLogin">
            <?php
                
                if(!empty($_SESSION['err_login']))
                {
                    echo $_SESSION['err_login'];
                    unset($_SESSION['err_login']);
                }
            ?>
        </p>
        <br>
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>