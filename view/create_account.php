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
        session_start();?>
        <title>Apply Now</title>
    </head>

 <?php include '../res/includes/header.php'; ?>
        <div class="container" style="margin-top: 100px">

 <div class="row">
     <?php if (isset($_SESSION['error'])){?>
     <div class="s12 m7">
         <ul class="collection">

             <li class="collection-header active center-align"><strong><?php echo $_SESSION['error']; unset($_SESSION['error']);  ?></strong> </li>
        
         </ul>
     </div>
     <?php }?>
            <div class="col s12  m5 offset-m4 " style="padding-bottom: 50px;">

                <h3 class="green-text">Create Account</h3><hr>

                <form method="post" action="../controller/account_controller.php">
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i> 
                        <input type="email" id="user"  name="username" required="">
                        <label for="user">Email</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" id="Password" name="password" required="">
                        <label for="password">Password</label>
                    </div></div>
                     <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" id="cPass" name="cpassword" required="">
                        <label for="cpass">Confirm Password</label>
                    </div></div>

                    <input class=" btn col s12 green" type="submit" name="signup">


                </form></div></div>


        </div>
        <?php
        include '../res/includes/index_footer.php';

        