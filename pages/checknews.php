<?php
include_once ('connect.php');

$newsTitle=$_POST['newsTitle'];
$newsContent=$_POST['newsContent'];


$stmt=$strConn->prepare("INSERT INTO tbl_news (newsTitle, newsContent)
                        VALUES (:newsTitle, :newsContent)");

$stmt->bindParam(':newsTitle',$newsTitle);
$stmt->bindParam(':newsContent', $newsContent);

$stmt->execute();
$strConn=null;

echo ("ثبت نام شما با موفقیت انجام شد.");
echo ("<br>");

?>

<h3><a href="../index.php">بازگشت به صفحه اصلی</a></h3>