<?php
//Include database configuration file
include('dbConfig.php');
session_start();

if(isset($_POST["dept"]) && !empty($_POST["dept"])){
    //Get all state data
    $query = $db->query("SELECT teacher_name FROM teacher WHERE dept_name='$_POST[dept]'  ORDER BY teacher_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select tea_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['teacher_name'].'">'.$row['teacher_name'].'</option>';
        }
    }else{
        echo '<option value="">tea_name not available</option>';
    }
}

if(isset($_POST["tea_name"]) && !empty($_POST["tea_name"])){

    $teacher_name=$_POST["tea_name"];

    $query2 = $db->query("SELECT sum(sub_credit) as sum FROM sub_tbl where teacher_name='$_POST[tea_name]' ");
    $rowCount = $query2->num_rows;
    $row = $query2->fetch_assoc();
    $total =15-$row['sum'];
    $_SESSION['total']=$total;

    if($rowCount > 0){
    echo $teacher_name." can take ".$total." more credit.If you put a subject that <br>has more than ".$total." credit,then the page will be simply refreshed";
    }


}

//$sem=$_POST['semester'];

if(isset($_POST["semester"]) && !empty($_POST["semester"])){
    //Get all state data
    $query = $db->query("SELECT sub_code FROM subject WHERE semester = '$_POST[semester]'  ORDER BY sub_code ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select sub_code</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_code'].'">'.$row['sub_code'].'</option>';
        }
    }else{
        echo '<option value="">sub_code not available</option>';
    }
}

if(isset($_POST["sub_code"]) && !empty($_POST["sub_code"])){
    //Get all city data
    $query = $db->query("SELECT sub_name FROM subject WHERE sub_code= '$_POST[sub_code]' ORDER BY sub_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        //echo '<option value="">Select sub_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_name'].'">'.$row['sub_name'].'</option>';
        }
    }else{
        echo '<option value="">sub_name not available</option>';
    }
}


if(isset($_POST["sub_code2"]) && !empty($_POST["sub_code2"])){
    //Get all city data
    $query = $db->query("SELECT sub_credit FROM subject WHERE sub_code= '$_POST[sub_code2]' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        //echo '<option value="">Select sub_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_credit'].'">'.$row['sub_credit'].'</option>';
        }
    }else{
        echo '<option value="">sub_credit not available</option>';
    }
}


if(isset($_POST["sub_code3"]) && !empty($_POST["sub_code3"])){
    //Get all city data
    $query = $db->query("SELECT sub_credit FROM subject WHERE sub_code= '$_POST[sub_code3]' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;

    while($row = $query->fetch_assoc()){ 
          $sub_credit=$row['sub_credit'];  
    }

    if($sub_credit<=$_SESSION['total']){
        echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';
        //unset($_SESSION['total']);
    }
    // else{
    //     echo ' ';
    // }
    //unset($_SESSION['total']);
}


if(isset($_GET['check'])){
    $code = $_GET['check'];
    $res =mysqli_query($conn,"SELECT * from subject WHERE sub_code='{$code}'");
    while($row=mysqli_fetch_assoc($res)){
      echo $row['sub_credit'];

    }
}


?>