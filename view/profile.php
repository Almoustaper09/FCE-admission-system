<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
       <?php include '../res/includes/framework.php';
 include '../model/db_conn.php';
        session_start();
        if (isset($_SESSION['flag']) AND $_SESSION['flag'] == 1) {?>
        <title>profile</title>
    </head>
   
<body>
  <div class="navbar-fixed">
      <nav    role="navigation" class="green darken-4">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo" style="margin-left: -90px">FEDERAL COLLEGE OF EDUCATION</a>
                <ul class="right hide-on-med-and-down" style="margin-right: -100px">
                    <li > <a>Welcome <?php echo $_SESSION['applicant']['username'] ?></a></li>
                    
                    <li ><a><img class="circle" height="50" width="50"src="../res/uploads/passport/<?php echo $_SESSION['applicant']['passport']; ?>" style="margin-top: 10px"></a></li>
                        <li class="active" ><a href="../view/login.php" class="">Form
                        </a></li>
                        <li ><a href="../view/addmission_letter.php" class="">Admission Letter
                        </a></li>
                         <li ><a href="../view/login.php" class="">logout
                        </a></li>
                        
                   
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li class="active"><a href="../../view/index.php">Home</a></li>
                    
                    <li ><a href="../../view/signUp.php" class="">Apply
                        </a></li>
                        <li ><a href="../../view/login.php" class="">Login
                        </a></li>
                   
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
          </nav> </div>
     <div class="container" style="margin-top: 0px; margin-bottom: 50px">
            <div class="row">
                 <div class="col s12 green-text"><h5>Application Form<hr></h5></div>
                <div class="col s12 m4 right" style="margin-top: 10px; ">
                   <div class="row">
                        
                            <div class="input-field col s6 form_margin">
                                OLevel Result<hr>
                                <table class="table">
                                    <tr>
                                       
                                        <th>Subject</th>
                                        <th>Grade</th>
                                    </tr>
                                     <?php $row=  get_result($_SESSION['username']);
 $i=2; 
 while ($i<20){
                                     ?>
                                    <tr>
                                        <td><?php //echo $row[$i]; ?></td>
                                         <td><?php //echo $row[$i+1] ?></td>
                                    </tr>
        <?php
        $i=$i+2;
        
 }?>
 
                                </table>
                        </div>                </div>
                </div>
                <div class="col s12 m8">
                    <form  class="col s12 m" method="post" enctype="multipart/form-data" action="../controller/application_controller.php">
                        

                        <div class="row">
                            <div class="input-field col s8">
                                <input id="fname" value="<?php echo $_SESSION['applicant']['name'] ?>" readonly="1" type="text"  required>
                                <label for="fname">Full Name</label>
                            </div>
                            <div class="input-field col s4">	     

                               <input id="fname" value="<?php echo $_SESSION['applicant']['gender'] ?>" readonly="1" type="text"  required>
                                <label for="fname">Gender</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">      

                                <input type="text" id="state" value="<?php echo $_SESSION['applicant']['state'] ?>" readonly="1" required>
                                <label for="state">State</label>
                            </div>

                            <div class="input-field col s4">      

                                <input type="text" id="lga" value="<?php echo $_SESSION['applicant']['lga'] ?>" readonly="1" required>
                                <label for="lga">Local Government Area</label>

                            </div>
                            <div class="input-field col s4">      

                                <input type="text" id="nat" value="<?php echo $_SESSION['applicant']['nationality'] ?>" readonly="1" required>
                                <label for="nat">Nationality</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">      

                                <input type="number" id="jamb" value="<?php echo $_SESSION['applicant']['jamb_score'] ?>" readonly="1">
                                <label for="jamb">Jamb Score</label>
                            </div>
                            <div class="input-field col s4">      

                                <input type="text" id="jamb_no" value="<?php echo $_SESSION['applicant']['jamb_no'] ?>" readonly="1">
                                <label for="jamb_no">Jamb No</label>
                            </div>
                            <div class="input-field col s4">      

                                <input type="text" id="int" value="<?php echo $_SESSION['applicant']['course'] ?>" readonly="1">
                                <label for="int">Course of Interest</label>
                            </div>
                        </div>
                        <h6>Subject Combination</h6><hr>
                        <div class="row">
                            <div class="input-field col s12 ">	     
                                <input type="text" id="int" value="<?php echo $_SESSION['applicant']['subject_combination'] ?>" readonly="1">
                                <label for="int">Subject Combination</label>
                        </div>
                   
                    </form>  
                </div></div></div>
         <footer class="page-footer green darken-4" >

                        &COPY; 2017 Copyright FCE
         


     <?php
        include '../res/includes/index_footer.php';

 } else {
        header('Location:logout.php');
    }