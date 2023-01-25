<?php

include 'includes.php';



$username = filter_data($_POST['username']);
$password = filter_data($_POST['password']);
if (isset($_POST['signup'])) {
    $cpassword = filter_data($_POST['cpassword']);
if(is_username_exist($username)){
    echo '<script> alert("Sorry username has been taken");history.back();</script>';
}
    
    elseif ($password != $cpassword) {
        echo '<script> alert("Password does not match");history.back();</script>';
    } else {
        if (add_account($username, $password)) {
             $_SESSION['flag'] = 1;
             $_SESSION['username']=$username;
            echo '<script> alert("Account created succesfully"); window.location="../view/application.php";</script>';
        } else {
            echo '<script> alert("Account creation Failed, try again.");history.back();</script>';
        }
    }
}
if (isset($_POST['login'])) {
    $status = user_login($username, $password);
    if ($status == 0) {
        $_SESSION['flag'] = 1;
        $_SESSION['username']=$username;
        $_SESSION['applicant']=is_applicant($_SESSION['username']);
               if($_SESSION['applicant']['id']>0){
                   
           header('location: ../view/profile.php');
       }else{
          
          header('location: ../view/application.php');
       }
        
        
    }elseif ($status==1) {
        $_SESSION['flag'] = 1;
        header('location: ../view/applicants.php');
    }  else {
    echo'<script>alert("invalid login credential"); history.back();</script>';    
    }
}




    