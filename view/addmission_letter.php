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
        session_start();
        if (isset($_SESSION['flag']) AND $_SESSION['flag'] == 1) {
            
            ?>
        <title>Admission Letter</title>
    </head>
   
<body>
  <div class="navbar-fixed hidden-print">
      <nav    role="navigation" class="green darken-4">
          <div class="nav-wrapper container hidden-print">
                <a id="logo-container" href="#" class="brand-logo" style="margin-left: -90px">FEDERAL COLLEGE OF EDUCATION</a>
                <ul class="right hide-on-med-and-down hidden-print" style="margin-right: -100px">
                    <li > <a>Welcome <?php echo $_SESSION['applicant']['username'] ?></a></li>
                    
                    <li ><a><img class="circle" height="50" width="50"src="../res/uploads/passport/<?php echo $_SESSION['applicant']['passport']; ?>" style="margin-top: 10px"></a></li>
                        <li class="active" ><a href="../view/login.php" class="">Form
                        </a></li>
                         <li ><a href="../view/login.php" class="">Admission Letter
                        </a></li>
                         <li ><a href="../view/logout.php" class="">logout
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
    <?php
    require '../model/db_conn.php';
    

            if(get_admission_letter($_SESSION['applicant']['jamb_no'])){
    ?><p>

    <div class="container "style="margin-top: 0px" >


        <div class="row">

            <div class="col s9 offset-s1  " style="border: 0px solid black">


                <div class="row"><div class="col s12  "><img src="../res/img/head.png"></div></div>

                <div class="row">
                    <div class="col s6 left" >Name:<?php echo $_SESSION['applicant']['name']  ?></div>
                    <div class="col s3 offset-s3">Date:<?php echo $_SESSION['applicant']['date_admitted'] ?></div>
                    <div class="col s12 ">App No:<?php echo $_SESSION['applicant']['id']?></div>
                </div>
                <div class="row center"><h5 style="color:darkgreen; font-weight: bold;">OFFER OF PROVISIONAL ADMISSION</h5></div>
                <div class="row" style="padding: 20px">Following your application, i am pleased to inform you that you have been offered a provisional admission into Federal College of Education, Katsina to study <?php echo $_SESSION['applicant']['course'] ?></div>

                <div class="row" style="padding: 20px">The offer is made subject to the following condition:</div>
                <div class="row">
                    <ol>
                        <li>
                            That you also possess the minimum requirement for the programme.
                        </li>
                        <li>
                            That you are found physically and mentally fit after a medical examination.
                        </li>
                        <li>
                            That you present for scrutiny, at the time of registration, your original credentials.
                        </li>
                        <li>
                            That you pay your registration fees in full, fees once paid is not refundable.
                        </li>
                        <li>
                            That you renew your registration at the beginning of every Academic Session, if applicable.
                        </li>
                    </ol>
                </div>
                <div class="row" style="padding: 20px">Congratulations.</div>

            </div></div></div>
            <?php } else {?>
<div class="col s12 m4 center" style="margin-top: 10px; border: 1px dotted red; ">
                    Sorry, you have not been admitted yet.
                </div>
            <?php }?>
    <div class="fixed-action-btn horizontal hidden-print" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large blue darken-4">
            <i class="large material-icons">dashboard</i>
        </a>
        <ul>
            <li><a href="logout.php" class="collection-item"><i class="material-icons">lock out</i></a></li>
            <li><a href="javascript:window.print();" class="collection-item"><i class="material-icons center-align">print</i></a></li>

        </ul>
    </div>



    <p>
        </footer>
<script src="../res/js/jquery.min.js"></script> 
        <script src="../res/js/materialize.min.js"></script>
        <script src="../res/js/init.js"></script>
    </body>
</html>
        <?php
        
        }  else {
           header('Location:login.php')   ;
        }