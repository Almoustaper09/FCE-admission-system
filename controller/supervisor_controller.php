<?php

include 'includes.php';
$title = $_POST['title'];
$name = $_POST['name'];

if(is_supervisor_exist($title, $name)){
    $_SESSION['error']="Supervsor already exist";
}
else {
    add_supervisor($title, $name);
    $_SESSION['success'] = "Supervisor added sucessfully";   
}
header('location: ../view/register_student.php');