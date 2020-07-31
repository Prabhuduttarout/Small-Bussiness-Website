<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <?php include 'links.php'?>
    <!-- style sheet -->
    <style>
   <?php include './css/signup.css'?>
    </style>
    <title>Backroads || Login </title>
  </head>
  <body>


<?php
   
   include 'dbconnection.php';

   if(isset($_POST['submit'])){
       $uemail =$_POST['email'];
       $upassword =$_POST['password'];

       $email_search = "select * from  registrartion where email='$uemail' ";
       $equery = mysqli_query($con ,$email_search);
       
       $email_count = mysqli_num_rows($equery);
       

       if($email_count){
           $email_pass = mysqli_fetch_assoc($equery);
           $db_pass = $email_pass['password'];

        //    fetch user name frm db to disply on home page

           $_SESSION ['name'] = $email_pass['name'];

        //    to verify password
        $verify_pass = password_verify($upassword,$db_pass);
        if($verify_pass){
          
            ?>
            <script>
            location.replace("backroad.php");
            </script>

            <?php

        }else{
          ?>
            <script>
           alert('Password Incorrect');
            </script>

            <?php

           
        }
       }else{

           ?>
            <script>
           alert('Invalid Email');
            </script>

            <?php

       }
   }


   ?>


    <img src="./image/wavep.png" alt="" class="wave" />
    <div class="container">
      <div class="img">
        <img src="./image/camping_noc8.svg" alt="" />
      </div>
      <div class="login_container">
        <form action="" method="post">
          <img
            src="./image/undraw_profile_pic_ic5t.svg"
            alt=""
            class="avtar"
          />
          <h2>Welcome</h2>
          <div class="input_div one">
            <div class="i">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div>
              <h5>Email</h5>
              <input class="input" type="text"  name ="email" required/>
            </div>
          </div>
          <div class="input_div two">
            <div class="i">
              <i class="fa fa-lock"></i>
            </div>
            <div>
              <h5>Password</h5>
              <input class="input" type="password" name ="password" required />
            </div>
          </div>
          <input type="submit" class="btn" value="Login" name ="submit"/>
          <h4>Don't Have Account ?</h4><a href="signup.php">Signup Now</a>
        </form>
      </div>
    </div>
    <script  src="./js/signup.js"></script>
  </body>
</html>



