<?php
// session_start();

        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="table";
        $conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

        mysqli_select_db($conn,$dbname);
        $total_credit=" ";
        $total=" ";

        
        if(isset($_POST['semester']))
        {
         $sql3="select sub_code from subject where semester='$_POST[semester]'";
         $result3=mysqli_query($conn,$sql3);
         while($row=mysqli_fetch_array($result3))
            {
                    echo '<option value="'.$row['sub_code'].'">'.$row['sub_code'].'</option>';
            }
        }
        
        if(isset($_POST['sub_code']))
        {
         $sql4="select * from subject where sub_code='$_POST[sub_code]'";
         $result4=mysqli_query($conn,$sql4);

         while($row=mysqli_fetch_array($result4))
         {
               $sub_name=$row['sub_name'];
               $sub_credit=$row['sub_credit'];
            }    
        }
// session_destroy();
?>