<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

// $username=$_POST['username'];
// $email=$_POST['email'];
// $password=$_POST['password'];

if(isset($_POST['submit']))
{

    $username=$_POST['username'];
    $email= $_POST['email'];
    $sql1 = "SELECT * FROM signup_tbl WHERE email = '$email'";
    $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());

    $sql2 = "SELECT * FROM signup_tbl WHERE username = '$username'";
    $result2 = mysqli_query($conn,$sql2) or die(mysqli_error());

    if (mysqli_num_rows($result2) > 0)
    {
      $_SESSION['error']['username'] = "This Username is already used.";

      if(isset($_SESSION['error']))
      {
        header("Location: http://localhost:8082/FINALPROJECT2/user/signup.php");
        exit;
      }
     
    }

    else if (mysqli_num_rows($result1) > 0)
    {
      $_SESSION['error']['email'] = "This Email is already used.";

      if(isset($_SESSION['error']))
      {
        header("Location: http://localhost:8082/FINALPROJECT2/user/signup.php");
        exit;
      }
     
    }

    

    else
    {
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];

      $q1=mysqli_query($conn,"insert into signup_tbl values('$username','$email','$password',' ')");
      if($q1)
      {

        // echo "<script type='text/javascript'>
      
        //          alert('Successfully added');
        //       </script>";

      // http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
      ini_set("SMTP", "smtp.gmail.com");//confirm smtp

      $to      = $email; // Send email to our user
      $subject = "Signup | Verification"; // Give the email a subject
      $message = " 
       
      Thanks for signing up!
      Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
       
      ------------------------
      Username: '.$username.'
      Password: '.$password.'
      ------------------------
       
      Please click this link to activate your account:
      http://localhost:8080/FINALPROJECT/login_user.php
       
      "; // Our message above including the link
                           
      $header = "From: tuhin.edru@gmail.com"; // Set from headers
      $sentmail = mail($to, $subject, $message, $header); // Send our email

      if($sentmail)
      {

         echo "<script type='text/javascript'>
      
                  alert('Your Confirmation link Has Been Sent To Your Email Address');
               </script>";
      }


    }
    else
    {

    echo"Cannot Add Your Record" ;
    }
    }

    

}
?>

