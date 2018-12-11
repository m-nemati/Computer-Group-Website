<?php
session_start();

//import Connection File
include_once ('connect.php');


if (isset($_POST['submitbtn'])){

    //Check UserName is Empty Or Not Empty
    if(empty($_POST['firstname'])){
        $_SESSION['usernameError']="نام خود را وارد کنید";
        //back to Register Form Page
        header('location:register.php');
    }
    else{
        //Call Sanitizing Function
        $fname=sanitizeData($_POST['firstname']);
    }

    
    $lname=$_POST['lastname'];
    $stucode=$_POST['studentid'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $userAccount=$_POST['username'];
    $password=hashValue($_POST['password']);
    $password2=$_POST['password2'];

    $stmt=$strConn->prepare("INSERT INTO tbl_users (firstName, lastName, stuCode, email, tel, userAccount, password)
                        VALUES (:fname, :lname, :stucode, :email, :tel, :userAccount, :password)");


    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':stucode', $stucode);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $mobile);
    $stmt->bindParam(':userAccount', $userAccount);
    $stmt->bindParam(':password', $password);

    $stmt->execute();
    $strConn=null;

    echo ("ثبت نام شما با موفقیت انجام شد.");
    echo ("<br>");

}
else{
    //back to Register Form Page
    header('location:register.php');
}


//Sanitizing  Input Data
function sanitizeData($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    
    return $data;
}

//Hash Function
function hashValue($value){
    return hash("sha512", $value);
}
?>
<h3><a href="../index.html">بازگشت به صفحه اصلی</a></h3>
