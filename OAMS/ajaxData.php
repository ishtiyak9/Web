<?php
//Include database configuration file
include('dbConfig.php');
session_start();

if(isset($_POST["dept"]) && !empty($_POST["dept"])){
    //Get all state data
    $query = $db->query("SELECT tea_name FROM teacher WHERE dept = '$_POST[dept]'  ORDER BY tea_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select tea_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['tea_name'].'">'.$row['tea_name'].'</option>';
        }
    }else{
        echo '<option value="">tea_name not available</option>';
    }
}

if(isset($_POST["tea_name"]) && !empty($_POST["tea_name"])){

    // $sql1 = "SELECT sum(sub_credit) as total FROM sub_tbl WHERE teacher_name= '$_POST[tea_name]'";
    // $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());
    // $row=mysqli_fetch_row($result1 );
    // $total=15-$row[0];
    // echo $total;
    $teacher_name=$_POST["tea_name"];

    $query2 = $db->query("SELECT sum(sub_credit) as sum FROM sub_tbl where teacher_name='$_POST[tea_name]' ");
    $rowCount = $query2->num_rows;
    $row = $query2->fetch_assoc();
    $total =15-$row['sum'];
    $_SESSION['total']=$total;

    if($rowCount > 0){
    echo $teacher_name." can take ".$total." more credit";
    }


    // $query = $db->query("SELECT dept FROM teacher WHERE tea_name = '$_POST[tea_name]' ");
    // $rowCount = $query->num_rows;

    // if($rowCount > 0){
    //     echo '<option value="">Select dept</option>';
    //     while($row = $query->fetch_assoc()){ 
    //         echo '<option value="'.$row['dept'].'">'.$row['dept'].'</option>';
    //     }
    // }else{
    //     echo '<option value="">sub_code not available</option>';
    // }

   
    // echo '<option value="asd"></option>';
//     echo '<script type="text/javascript">
//      alert("Credit Limit is over for this Teacher");
//     window.location.href="index.php"
//     </script>';
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
        echo '<option value="">Select sub_name</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_name'].'">'.$row['sub_name'].'</option>';
        }
    }else{
        echo '<option value="">sub_name not available</option>';
    }
}


// if(isset($_POST["sub_code"]) && !empty($_POST["sub_code"])){

    // $query2 = $db->query("SELECT sub_credit FROM subject WHERE sub_code= '$_POST[sub_code]' ");
    

    // $rowCount = $query->num_rows;
    
    
    // if($rowCount > 0){

    //     while($row = $query2->fetch_assoc()){ 
    //         echo '<option value="'.$row['sub_credit'].'">'.$row['sub_credit'].'</option>';
    //     }
    // }else{
    //     echo '<option value="">sub_credit not available</option>';
    // }

// }

if(isset($_POST["sub_name"]) && !empty($_POST["sub_name"])){

    $query = $db->query("SELECT sub_credit FROM subject WHERE sub_name= '$_POST[sub_name]' ");
    

    $rowCount = $query->num_rows;
    
    
    if($rowCount > 0){
        echo '<option value="">Select sub_credit</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_credit'].'">'.$row['sub_credit'].'</option>';
            $sub_credit=$row['sub_credit'];
        }
    }else{
        echo '<option value="">sub_credit not available</option>';
    }
}

if(isset($_POST["sub_credit"]) && !empty($_POST["sub_credit"])){

//     $sub_credit=$_POST["sub_credit"];

//     $sql1 = "SELECT sum(sub_credit) as total FROM subject ";
//     $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());
//     $row=mysqli_fetch_row($result1 );
//     $total=$row[0]+$sub_credit;

//     if ($total>1)
//     {
//       $_SESSION['error_2']['credit'] = "Credit Limit is over for this Teacher";

//       if(isset($_SESSION['error_2']))
//       {
//         header("location:index2.php");
//         exit;
//       }
     
//     }


//     else{
//         echo '<option value="">sub_credit not available</option>';
//     }
    $sub_credit=$_POST["sub_credit"];
    if($sub_credit<=$_SESSION['total']){
    // if($sub_credit>1){
        echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';
        unset($_SESSION['total']);
    }
}
?>