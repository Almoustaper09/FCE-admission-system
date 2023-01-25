<?php

//CONNECTORS
// <editor-fold defaultstate="collapsed" desc="open database connection">
function open_conn() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "fce_admission_system";

    $conn = new mysqli($host, $user, $password, $databaseName);
    return $conn;
}

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="close database connection">
function close_conn() {
    open_conn()->close();
}

// </editor-fold>

// INSERT INTO DATABASE
// <editor-fold defaultstate="collapsed" desc="update applicant">
function update_applicant($jamb_no, $status) {
    $flag = FALSE;
    $today=date('Y-m-d'); 
    $query = "UPDATE applicant set status=$status, date_admitted='$today'   WHERE jamb_no='$jamb_no'";
    $conn = open_conn();
    if ($conn->query($query) == TRUE) {
        $flag = TRUE;
    } else {
        echo $conn->error;
        $flag = FALSE;
    }
    close_conn();
    return $flag;
}

// </editor-fold>


// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Add applicant info to database">
// function register_applicant($username,$name, $gender,$dob, $state, $lga, $nat, $jamb_score, $jamb_no, $course, $subjects, $passport, $olevel) {
function register_applicant($username,$name, $gender,$dob, $state, $lga, $nat, $jamb_score, $jamb_no, $course, $subjects, $passport) {
    $flag = FALSE;
    $query = "INSERT INTO applicant(name,"
            . "gender,"
            . "dob,"
            . "state,"
            . "lga,"
            . "nationality,"
            . "jamb_score,"
            . "jamb_no,"
            . "course,"
            . "subject_combination,"
            . "passport,"
            . "olevel,"
            . "username) "
            . "VALUES "
            . "("
            . "'$name',"
            . "'$gender',"
            . "'$dob',"
            . "'$state',"
            . "'$lga',"
            . "'$nat',"
            . "'$jamb_score',"
            . "'$jamb_no',"
            . "'$course',"
            . "'$subjects',"
            . "'$passport',"
            . "'$olevel',"
            . "'$username'"
            . ")";
    $conn = open_conn();
    if ($conn->query($query) == TRUE) {
        $flag = TRUE;
    } else {
        echo $conn->error;
        $flag = FALSE;
    }
    close_conn();
    return $flag;
}

// </editor-fold>
// 

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Add applicant OLevel result to database">
function save_Olevel($username,$s1, $g1,$s2,$g2,$s3,$g3,$s4,$g4,$s5,$g5,$s6,$g6,$s7,$g7,$s8,$g8,$s9,$g9) {
    $flag = FALSE;
    $query = "INSERT INTO olevel(applicant_username,subj1,"
            . "subj2,"
            . "subj3,"
            . "subj4,"
            . "subj5,"
            . "subj6,"
            . "subj7,"
            . "subj8,"
            . "subj9,"
            . "grade1,"
            . "grade2,"
            . "grade3,"
            . "grade4,"
            . "grade5,"
            . "grade6,"
            . "grade7,"
            . "grade8,"
            . "grade9)"
            . "VALUES "
            . "("
            . "'$username','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9',"
            . "'$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$g9'"
            . ")";
    $conn = open_conn();
    if ($conn->query($query) == TRUE) {
        $flag = TRUE;
    } else {
        echo $conn->error;
        $flag = FALSE;
    }
    close_conn();
    return $flag;
}

// </editor-fold>
// 

function get_result($username){
    $query="SELECT * FROM olevel WHERE applicant_username='$username'";
    $conn=  open_conn();
    $result=$conn->query($query);
    return $result->fetch_array();
}

// <editor-fold defaultstate="collapsed" desc="Add admin">
function add_account($username, $password) {
    $flag=FALSE;
    $conn = open_conn();
    
        $sql = "INSERT INTO account (username, password) VALUES('$username','$password')";
        if ($conn->query($sql) == TRUE) {
           $flag=TRUE;
        } else {
            $flag=FALSE;
            echo $conn->error;
        }
  
    close_conn();
    return $flag;
}

// </editor-fold>

//FETCH INFORMATION FROM DATABASE


// <editor-fold defaultstate="collapsed" desc="get applicants list">
function get_applicants() {
    $applicants = array();
    $query = "SELECT * FROM applicant WHERE status=2";
    $conn = open_conn();
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $applicants[] = $row;
    }

    close_conn();
    return $applicants;
}

// </editor-fold>
function get_admission_letter($jamb_no) {
    $flag = FALSE;
    $query = "SELECT * FROM applicant WHERE status=1 AND jamb_no='$jamb_no'";
    $conn = open_conn();
    $result = $conn->query($query);
   if($result->num_rows>0){
       $flag=TRUE;
   }  else {
   $flag=FALSE;    
   }

    close_conn();
    return $flag;
}
// <editor-fold defaultstate="collapsed" desc="get  applicants">
function get_applicant($query) {
    $applicants = array();
    $query = "SELECT * FROM applicant WHERE jamb_no = '$query' ";
    $conn = open_conn();
    $result = $conn->query($query);
   
   while ($row = $result->fetch_assoc()) {
        $applicants[] = $row;
    }

    close_conn();
    return $applicants;
}

// </editor-fold>

//AUTHENTICATORS
// <editor-fold defaultstate="collapsed" desc="Authenticate admin">
function user_login($username, $password) {
    $conn = open_conn();
    $flag = -1;
    $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row= $result->fetch_assoc();
        
        $flag = $row['status'];
    } else {
        echo $conn->error;
    }
    close_conn();
    return $flag;
}

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="check if a Applicant has registered with the username">
function is_applicant($username) {
    
    $conn = open_conn();
    $sql_check="SELECT * FROM applicant WHERE username='$username'";
    if($conn->query($sql_check)){
        $row=$conn->query($sql_check);
   $result= $row->fetch_assoc();
    return $result;
    }  else {
        echo $conn->error;    
    }
}

// </editor-fold>
function is_username_exist($username) {
    $flag = FALSE;
    $conn = open_conn();
    $sql_check = $conn->query("SELECT * FROM account WHERE username='$username'");
    if ($sql_check->num_rows > 0) {
        $flag = TRUE;
    } else {
        $flag = FALSE;
    }
    return $flag;
}

// <editor-fold defaultstate="collapsed" desc="check if an applicant with the jamb number has registered>
function is_applicant_exist($jamb_no) {
    $flag = FALSE;
    $conn = open_conn();
    $sql_check = $conn->query("SELECT * FROM applicant WHERE jamb_no='$jamb_no'");
    if ($sql_check->num_rows > 0) {
        $flag = TRUE;
    } else {
        $flag = FALSE;
    }
    return $flag;
}

// </editor-fold>