<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>عضویت در انجمن علمی</title>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/register.css">
    <script type="text/javascript">
        function sendForm(){
            var pws1=document.getElementById('pws1').value;
            var pws2=document.getElementById('pws2').value;
            if(pws1 != pws2){
                window.alert("رمز عبور یکسان نیست!")
            }
            else{
                frmregister.submit();
            }
        }
    </script>
</head>
<body>
    <div id="wrapper">
        <img id="regbanner" src="../images/registrationbanner.png" alt="بنر فرم ثبت نام">
        <br>
        <h1>فرم ثبت نام در انجمن علمی</h1>
        <form action="registercheck.php" name="frmregister" method="post">
            <fieldset >
            <legend>اطلاعات شخصی:</legend>
            <input type="text" name="firstname" placeholder="نام" required autofocus>
            <span class="redstar">*</span>
            <span style="color:red">
            <?php
                
                if(!empty($_SESSION['usernameError']))
                {
                    echo $_SESSION['usernameError'];
                    unset($_SESSION['usernameError']);
                }
            ?>
            </span>
            <br>
            <input type="text" name="lastname" placeholder="نام خانوادگی" required>
            <span class="redstar">*</span>
            <br>
            <input type="text" name="studentid" placeholder="شماره دانشجویی" required>
            <span class="redstar">*</span>
            <br>
            <input type="email" name="email" placeholder="Email: info@example.com" required>
            <span class="redstar">*</span>
            <br>
            <input type="text" name="mobile" placeholder="شماره تلفن همراه">
        </fieldset>
        <fieldset>
            <legend>حساب کاربری:</legend>
            <input type="text" name="username" placeholder="نام کاربری" required>
            <span class="redstar">*</span>
            <br>
            <input type="password" name="password" id="pws1" placeholder="رمز عبور" minlength="4" required>
            <span class="redstar">*</span>
            <span>بیشتر از 4 کاراکتر باشد</span>
            <br>
            <input type="password" name="password2" id="pws2" placeholder="تکرار رمز عبور" minlength="4" required>
            <span class="redstar">*</span>
        </fieldset>
        <fieldset>
            <legend>سایر موارد</legend>
            <input type="checkbox" name="agreeTick" id="">
            <span>
                <a href="">قوانین</a>
                عضویت در انجمن علمی را می پذیرم
            </span>
            <br><br>
            <input type="submit" value="ثبت اطلاعات" name="submitbtn" onclick="sendForm()">
            <input type="reset" value="پاک کردن فرم">
        </fieldset>
        </form>


    </div>
</body>
</html>