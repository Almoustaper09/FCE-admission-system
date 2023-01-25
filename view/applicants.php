<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../res/includes/framework.php'; ?>
        <title>Applicants</title>
    </head>

    <?php
    include '../res/includes/header.php';
    session_start();
    if (isset($_SESSION['flag']) AND $_SESSION['flag'] == 1) {
        ?>
        <div class="container" style="margin-top: 135px">
            <?php
            include '../model/db_conn.php';

            $GLOBALS['projects'] = get_applicants();
            $projects = $GLOBALS['projects'];
            // echo $_SESSION['error'];
            if(isset($_SESSION['sucess'])){
                echo '<script> alert("Applicant list updated succesfully");</script>';
                unset($_SESSION['sucess']);
            }
            ?>

            <form method="post" action="../controller/applicants_controller.php">
                <div class="row " style="margin: 0px; height: 10px">
                    <div class="input-field col s7">
                        <input type="text" id="query" name="query">
                        <label for="query">Search by Jamb No</label>
                    </div>
                    <div class="input-field col s2">
                        <input type="submit" value="Search" class="btn" name="submit">

                    </div>
                    <div class="col   input-field">
                        <button type="submit" name="acknowledge" value=1 class="btn-floating">
                            <i class="material-icons">check</i>
                        </button>
                    </div> <div class="col   input-field">
                        <button type="submit" name="acknowledge" value=00 class="btn-floating">
                            <i class="material-icons">cancel</i>
                        </button>
                    </div>
                </div>

                <table>
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Passport</th>
                        <th>Jamb No</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <!-- <th>O level Result</th> -->
                        <th>Action</th>
                    </tr>
                    <?php
                    if (empty($_POST['query'])) {

                        $sn = 0;
                        foreach ($projects as $project) {
                            $sn++;
                            ?>
                            <tr><td><input type="checkbox" name="applicants[]"class="black" id="<?php echo $project['jamb_no']; ?>" value="<?php echo $project['jamb_no']; ?>" >
                                    <label for="<?php echo $project['jamb_no'] ?>"></label></td>
                                <td><?php echo $sn ?></td>
                                <td> <img src="../res/uploads/passport/<?php echo $project['passport']; ?>" width="50" height="50"></td>
                                <td><?php echo $project['jamb_no']; ?></td>
                                <td><?php echo $project['name']; ?></td>
                                <td><?php echo $project['gender'] ?></td>
                                <td><?php echo $project['course'] ?></td>

                                <!-- <td>
                                    <a href="../res/uploads/olevel/<?php echo $project['olevel']; ?>"><i class="material-icons">file_download</i></a>
                                </td> -->
                                <td><a href="../controller/applicants_controller.php?jamb_no=<?php echo $project['jamb_no']; ?>&status=1"><i class="material-icons">check</i></a> 
                                    <a href="../controller/applicants_controller.php?jamb_no=<?php echo $project['jamb_no']; ?>&status=00"><i class="material-icons">cancel</i></a> 

                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        $sn = 0;
                        $projects = get_applicant($_POST['query']);
                        foreach ($projects as $project) {
                            $sn++;
                            ?>
                            <tr><td><input type="checkbox" name="applicants[]"class="black" id="<?php echo $project['matric_no']; ?>" value="<?php echo $project['matric_no']; ?>" >
                                    <label for="<?php echo $applicant['id']; ?>"></label></td>
                                <td><?php echo $sn ?></td>
                                <td> <img src="../res/uploads/passport/<?php echo $project['passport']; ?>" width="50" height="50"></td>
                                <td><?php echo $project['jamb_no']; ?></td>
                                <td><?php echo $project['name']; ?></td>
                                <td><?php echo $project['gender'] ?></td>
                                <td><?php echo $project['course'] ?></td>

                                <td>
                                    <a href="../res/uploads/olevel/<?php echo $project['olevel']; ?>"><i class="material-icons">file_download</i></a>
                                </td>
                                <td><a href="COFO.php?application_code=<?php echo $applicant['application_code']; ?>"><i class="material-icons">check</i></a> 
                                    <a href="IndividualAcknowledgementSlip.php?application_code=<?php echo $applicant['application_code']; ?>"><i class="material-icons">cancel</i></a> 

                                </td>
                            </tr>
        <?php }
    } ?>
                </table>
            </form>



        </div>
        <?php
        include '../res/includes/footer.php';
    } else {
        header('Location:logout.php');
    }