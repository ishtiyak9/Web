<?php
$pagetitle="student data";
include "include/header.php"; ?>

<div class="main">

            <div class="content">


                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Assigning Form</span>
                    <hr class="team_hr team_hr_right hr_gray" />
                </div>  <!-- text-center -->

                <br><br><br>
                <div id="info"></div>
                <!-- <div id="info"></div> -->
 
            <center>

                <form action="subject_entry_action.php" method="post">
                    <div class="row">
                        <div class="form-group">

                        <?php
                        include('dbConfig.php');
                       // $sub_credit=1;

                        $query2 = $db->query("SELECT distinct(dept) from dept");

                        $rowCount = $query2->num_rows;
                        ?>
                        <select name="dept" id="dept" class='form-control2'>
                            <option value="">Select dept</option>
                            <?php
                            if($rowCount > 0){
                                while($row = $query2->fetch_assoc()){ 
                                    echo '<option value="'.$row['dept'].'">'.$row['dept'].'</option>';
                                }
                            }else{
                                echo '<option value="">Dept not available</option>';
                            }
                            ?>
                        </select>
                        </div><br>

                        <div class="form-group">
                        <select name="tea_name" id="tea_name" class='form-control2' >
                            <option value="">Select dept first</option>
                        </select>
                        </div><br>

                        <div class="form-group">
                        <?php
                        //Include database configuration file
                        include('dbConfig.php');
                        
                        //Get all country data
                        $query = $db->query("SELECT distinct(semester) from semester");
                        
                        //Count total number of rows
                        $rowCount = $query->num_rows;
                        ?>
                        <select name="semester" id="semester" class='form-control2'>
                            <option value="">Select Semester</option>
                            <?php
                            if($rowCount > 0){
                                while($row = $query->fetch_assoc()){ 
                                    echo '<option value="'.$row['semester'].'">'.$row['semester'].'</option>';
                                }
                            }else{
                                echo '<option value="">Semester not available</option>';
                            }
                            ?>
                        </select>
                        </div><br>
                        
                        <div class="form-group">
                        <select name="sub_code" id="sub_code" class='form-control2'>
                            <option value="">Select semester first</option>
                        </select>
                        </div><br>
                        
                        <div class="form-group">
                        <select name="sub_name" id="sub_name" class='form-control2'>
                            <option value="">Select sub_code first</option>
                        </select>
                        </div><br>

                        <div class="form-group">
                        <select name="sub_credit" id="sub_credit" class='form-control2'>
                            <option value="">Select sub_code first</option>
                        </select>
                        </div><br>

                        

                        <!-- if($sub_credit>0)
                        {

                           echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';
                        }

                        ?> -->

                        <div id="button"></div>

                        <input classs="mini_green_button" type="submit" name="save" id="submit" value="Submit" disabled />

                    </div>

                </form>
            </center>
    </div> <!-- content -->
    <br><br><br><br><br><br><br><br>

                <!-- <script src="jquery-1.10.2.js"></script> -->
                <script src="jquery.min.js"></script>
                <script>
                 $( "#dept" ).change(function() {
                        $( "#tea_name" ).load( "ajaxData_3.php?dept="+this.value);
                });
                
                $( "#tea_name" ).change(function() {
                    var tea_name = $(this).val();
                    var encoded=encodeURIComponent(tea_name);
                        $( "#info" ).load( "ajaxData_3.php?tea_name="+encoded);
                });

                $( "#semester" ).change(function() {
                        $( "#sub_code" ).load( "ajaxData_3.php?semester="+this.value);
                });

                $( "#sub_code" ).change(function() {
                    $("#sub_name").load( "ajaxData_3.php?sub_code="+this.value);
                    $("#sub_credit").load("ajaxData_3.php?sub_code2="+this.value);
                    $.get("ajaxData_3.php?sub_code3="+this.value, null, function (responseText) {
                        if(parseInt(responseText) <1){
                            $("#submit").prop('disabled', false);
                        }else{
                            $("#submit").prop('disabled', true);
                        }
                    });
                });
                </script>


    <?php include "include/footer.php"; ?>  

