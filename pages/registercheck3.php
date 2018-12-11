<?php
include_once ('connect.php');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$stucode=$_POST['studentid'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$userAccount=$_POST['username'];
$password=$_POST['password'];
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


?>
<h3><a href="../index.html">بازگشت به صفحه اصلی</a></h3>
