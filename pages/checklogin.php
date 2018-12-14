<?php
session_start();

//import Connection File
include_once ('connect.php');

//Check form is fill or not
if(isset($_POST['register'])){


    //hhhhhhhhhhhhhhhhhhhhh
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        
        $captcha=$_POST['g-recaptcha-response'];
  
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeAzH4UAAAAAIScadBtMSu8GYTy-_x4HB33rXAM&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {   
            $_SESSION['err_login']="You are spammer!";
            header('location:login.php');
            
         }
        else{
            //Check UserName is Empty Or Not Empty
    if(empty($_POST['username']))
    {
        $usernameErr="نام کاربری را وارد نمائید";
        
    }
    else{
        //Call Sanitizing Function
        $username=sanitize_data($_POST['username']);
    }
    //Check Password is Empty Or Not Empty
    if(empty($_POST['password']))
    {
        $passwordErr="نام کاربری را وارد نمائید";
    }
    else{
        //Call Sanitizing Function
        $password=sanitize_data($_POST['password']);
    }
    //Check Login Information
    $stmt=$strConn->prepare("SELECT * FROM tbl_admins WHERE username=:us AND password=:ps");
    $stmt->bindParam(':us',$username);
    $stmt->bindParam(':ps',$password);
    $stmt->execute();
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0)
    {   
        $row=$stmt->fetch();
        switch($row['type'])
        {
            case 1:
                $_SESSION['adminId']=$row['lastName'];
                header('Location:adminpanel.php');
                 break;
            case 2:
                 $_SESSION['userId']=$row['lastName'];
                header('Location:userpanel.php');
                break;
        }
    }
    else{
        //Username & Password Incorrect >> Back to the Login Form
        $_SESSION['err_login']="*نام کاربری یا پسورد اشتباه است!";
        header('location:login.php');
    }
           
        }
    
    
    }
    else{
         $_SESSION['err_login']="تیک تایید  ربات نبودن را بزنید! ";
         header('location:login.php');
    }
  
}

   

else{
    //Form is not Submit >> Back to the Login Form
    header('location:login.php');
}
//Sanitizing  Input Data
function sanitize_data($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    
    return $data;
}
?>