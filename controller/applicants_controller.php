<?php

include 'includes.php';


if(isset($_POST['acknowledge'])){
   $status=$_POST['acknowledge'];
   $applicant=$_POST['applicants'];
foreach($applicant as $applicant){
    update_applicant($applicant, $status);
} 
header('location: ../view/applicants.php');
$_SESSION['sucess']="1";
}
if(isset($_GET['jamb_no'])){
   $status=$_GET['status'];
   $jamb_no=$_GET['jamb_no'];

   update_applicant($jamb_no, $status) ;
header('location: ../view/applicants.php');
$_SESSION['sucess']="1";
}

//if (!is_student_exist($matric_no)) {
//    if (register_student($name, $matric_no, $sex, $department)) {
//        $_SESSION['success'] = "Registration completed succesfully";
//    }
//} else {
//    $_SESSION['error'] = "A student has already been registered with " . $matric_no;
//}
//
