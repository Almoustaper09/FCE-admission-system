<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Application</title>
        <?php
        include '../res/includes/framework.php';
        session_start();
        ?>
    </head>
    <?php
    include '../res/includes/header.php';
    session_start();
    if (isset($_SESSION['flag']) AND $_SESSION['flag'] == 1) {
        

        ?>

        <div class="container" style="margin-top: 90px; margin-bottom: 50px">
            <div class="row">
                <div class="col s12 m4 right" style="margin-top: 10px; border: 1px dotted red">
                    <ul class="collection">

                        <?php
                        
                        if (isset($_SESSION['error'])) {
                            $error = $_SESSION['error'];
                            foreach ($error as $error) {
                                ?>
                                <li class="collection-item"><?php echo $error; ?></li>
                                <?php
                            }
                            unset($_SESSION['error']);
                        } elseif (isset($_SESSION['sucess'])) {
                            $sucess = $_SESSION['sucess'];
                            foreach ($sucess as $sucess) {
                                ?>
                                <li class="collection-item"><?php echo $sucess; ?></li>
                                <?php
                            }
                            unset($_SESSION['sucess']);
                        }
                        ?>
                    </ul>
                 </div>
                <div class="col s12 m8">
                    <form  class="col s12 m" method="post" enctype="multipart/form-data" action="../controller/application_controller.php">
                        <div class="col s12 green-text"><h5>Application Form<hr></h5></div>

                        <div class="row  ">
                            <div class="input-field col s6 form_margin">
                                <input id="fname" name="name" type="text"  required>
                                <label for="fname">Full Name</label>
                            </div>
                            <div class="input-field col s3 form_margin">	     

                                <select class="browser-default" name="gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label class="active">Gender</label>
                            </div>
                            <div class="input-field col s3 form_margin">	     

                                <input type="date" name="dob">
                                    
                                <label class="active">Date of Birth</label>
                            </div>
                        </div>

                        <div class="row  ">
                            <div class="input-field col s4 form_margin">      

                                <input type="text" id="state" name="state" required>
                                <label for="state">State</label>
                            </div>

                            <div class="input-field col s4 form_margin">      

                                <input type="text" id="lga" name="lga" required>
                                <label for="lga">Local Government Area</label>

                            </div>
                            <div class="input-field col s4 form_margin">      

                                <input type="text" id="nat" name="nat" required>
                                <label for="nat">Nationality</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4 form_margin">      

                                <input type="number" id="jamb" name="jamb_score" required>
                                <label for="jamb">Jamb Score</label>
                            </div>
                            <div class="input-field col s4 form_margin">      

                                <input type="text" id="jamb_no" name="jamb_no" required>
                                <label for="jamb_no">Jamb No</label>
                            </div>
                            <div class="input-field col s4 form_margin">      

                                <input type="text" id="int" name="course" required>
                                <label for="int">Course of Interest</label>
                            </div>
                        </div>
                        <h6>Subject Combination</h6><hr>
                        <div class="row">
                            <div class="input-field col s4 form_margin">	     
                                <label class="active">Subject 2</label>
                                <select class="browser-default" name="subject1">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            <div class="input-field col s4 form_margin">	     
                                <label class="active">Subject 3</label>
                                <select class="browser-default" name="subject2">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            <div class="input-field col s4 form_margin">	     
                                <label class="active">Subject 4</label>
                                <select class="browser-default" name="subject3">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="file-field  input-field col s12 form_margin">

                                <div class="btn">
                                    <span>Upload Passport</span>
                                    <input type="file"  name="passport" id="fileToUpload" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate"  type="text">
                                </div>
                            </div>


                        </div>
                        <h6>O Level Result</h6><hr>
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj1">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade1">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj2">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade2">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj3">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade3">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj4">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade4">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj5">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade5">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj6">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade6">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj7">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade7">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj8">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade8">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6 form_margin">	     
                                <label class="active">Subject</label>
                                <select class="browser-default" name="subj9">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Literature in English">Literature in English</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Islamic Studies">Islamic Studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Government">Government</option>
                                    <option value="Principle of Account">Principle of Account</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Christen Religion Knowledge">Christen Religion Knowledge</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s6 form_margin">
                              <label class="active">Grade</label>
                                <select class="browser-default" name="grade9">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="input-field col s12"><input  type="submit" name="apply" value="Apply" class="btn "></div>



                    </form>  
                </div></div></div>

        <?php
        include '../res/includes/footer.php';
     //   }
    } else {
        header('Location:logout.php');
    }