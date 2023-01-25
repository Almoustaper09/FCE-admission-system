<?php

include 'includes.php';
$GLOBALS['errors'] = array();
$GLOBALS['success'] = array();

function upload_passport() {
    $target_dir = "../res/uploads/passport/";
    $main_file = $target_dir . basename($_FILES["passport"]["name"]);
    $flag = TRUE;
    // Check if file already exists
    if (file_exists($main_file)) {
        $GLOBALS['errors'][0] = "this passport already exists.";
        $flag = FALSE;
    }
// Check file size
    if ($_FILES["passport"]["size"] > 2000000) {
        $GLOBALS['errors'][1] = "this passport file is too large.";
        $flag = FALSE;
    }
// Check if flag is set to false by an error
    if ($flag == FALSE) {
        $GLOBALS['errors'][2] = "passport file was not uploaded.";
    }
    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES["passport"]["tmp_name"], $main_file)) {
            $GLOBALS['success'][0] = "The passport file " . basename($_FILES["passport"]["name"]) . " has been uploaded.";
        } else {
            $GLOBALS['errors'][3] = "There was an error uploading your main file.";
        }
    }
    return $flag;
}



$name = filter_data($_POST['name']);
$gender = filter_data($_POST['gender']);
$dob = filter_data($_POST['dob']);
$state = filter_data($_POST['state']);
$lga = filter_data($_POST['lga']);
$nat = filter_data($_POST['nat']);
$jamb_score = filter_data($_POST['jamb_score']);
$jamb_no = filter_data($_POST['jamb_no']);
$course = filter_data($_POST['course']);
$subject1 = filter_data($_POST['subject1']);
$subject2 = filter_data($_POST['subject2']);
$subject3 = filter_data($_POST['subject3']);
$subjects = $subject1 . ', ' . $subject2 . ', ' . $subject3;

$s1 = $_POST['subj1'];
$s2 = $_POST['subj2'];
$s3 = $_POST['subj3'];
$s4 = $_POST['subj4'];
$s5 = $_POST['subj5'];
$s6 = $_POST['subj6'];
$s7 = $_POST['subj7'];
$s8 = $_POST['subj8'];
$s9 = $_POST['subj9'];

$g1 = $_POST['grade1'];
$g2 = $_POST['grade2'];
$g3 = $_POST['grade3'];
$g4 = $_POST['grade4'];
$g5 = $_POST['grade5'];
$g6 = $_POST['grade6'];
$g7 = $_POST['grade7'];
$g8 = $_POST['grade8'];
$g9 = $_POST['grade9'];
// $olevel = $_FILES['olevel']["name"];
// echo $olevel;
$passport = $_FILES['passport']["name"];

if (is_applicant_exist($jamb_no)) {
    $GLOBALS['errors'][8] = "An applicant has already been registered with the Jamb No: " . $jamb_no;
} else {
    if (!upload_passport()) {
       $GLOBALS['errors'][9] = "Passport failed to upload";
        $_SESSION['error'] = $GLOBALS['errors'];
    }  else {
        // register_applicant($_SESSION['username'],$name, $gender, $_POST['dob'],$state, $lga, $nat, $jamb_score, $jamb_no, $course, $subjects, $passport, $olevel);
        register_applicant($_SESSION['username'],$name, $gender, $_POST['dob'],$state, $lga, $nat, $jamb_score, $jamb_no, $course, $subjects, $passport);
        save_Olevel($_SESSION['username'],$_POST['subj1'], $_POST['grade1'], $_POST['subj2'], $_POST['grade2'], $_POST['subj3'], $_POST['grade3'], $_POST['subj4'], $_POST['grade4'], $_POST['subj5'], $_POST['grade5'], $_POST['subj6'], $_POST['grade6'], $_POST['subj7'], $_POST['grade7'], $_POST['subj8'], $_POST['grade8'], $_POST['subj9'], $_POST['grade9']);
        unset($_SESSION['error']);
        $GLOBALS['success'][2] = "Applicant registered succesfully!";
        $_SESSION['sucess'] = $GLOBALS['success'];
    }
}
 
header('location: ../view/application.php');
