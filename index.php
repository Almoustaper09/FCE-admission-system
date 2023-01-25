<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
<link  type="text/css" rel="stylesheet" href="res/iconfont/material-icons.css">
<link type="text/css" rel="stylesheet" href="res/css/materialize.min.css">
<link type="text/css" rel="stylesheet" href="res/css/style.css">
<link href="res/img/icon.png" rel="icon" type="image">

        <?php 
        session_start();?>
        <title>Home</title>
    </head>

    <body>
         <div class="navbar-fixed" >
      <nav    role="navigation" class="white darken-4" style="height: 180px">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo" style="margin-left: -110px"><img src="res/img/logo.png" width="700" height="150" ></a>
                
                <ul class="right hide-on-med-and-down green darken-2" style="margin-top: 115px;margin-right:-200px; ">
                   <li ><a href="#" class="breadcrumb"><i class="material-icons">home</i>Home</a></li>
                    
                    <li ><a href="view/create_account.php" class="breadcrumb"><i class="material-icons">send</i>Apply Now
                        </a></li>
                        <li ><a href="view/login.php" class="breadcrumb"><i class="material-icons">lock_open</i>Login
                        </a></li>                    
                </ul>

                <ul id="nav-mobile" class="side-nav red darken-2 white-text">
                    <li ><a href="../view/register_student.php" >Register Student</a></li>
                    
                    <li ><a href="../view/register_project.php" >Register Project
                        </a></li>
                        <li ><a href="../view/archive_project.php" >View Project
                        </a></li> 
                   
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse blue-text"><i class="material-icons">menu</i></a>
            </div>
          </nav> </div>

        <div class="row"style="margin-top: 140px">
    
     <div class="col s6 blue-grey lighten-5 main-content">
         <h3> Admission Processing System</h3><hr>
         <h6>WELCOME </h6> 
You can now apply to our prestigious institution via our portal. all you need to do is to create an account with us, login, fill in the form and wait for your admission letter to be ready and then print.
<p>
    <span class="red-text">Note:</span> Make sure all the information you have provided are valid.
     </div>
     <div class="col s6 main-content main-page " >
      efgh   
     </div>

        </div>
      <footer class="page-footer green
        darken-4" >

                <span style="color:#fff;"> <a href="./view/applicants.php">&COPY;</a>2023 Copyright Department of Computer Science Al-Qalam University Katsina.</span>
         
</footer>
<script src="../res/js/jquery.min.js"></script> 
        <script src="../res/js/materialize.min.js"></script>
        <script src="../res/js/init.js"></script>
    </body>
</html>
        