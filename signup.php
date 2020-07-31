

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
    <title>Backroads || Signup </title>
  </head>
  <body>


 <?php

include 'dbconnection.php';

// if user click on create account the data store in to data base
    if(isset($_POST['submit'])){
// to use special character in database

        $uname = mysqli_real_escape_string($con,$_POST['name']) ;
        $uemail =mysqli_real_escape_string($con, $_POST['email']) ;
        $umobile = mysqli_real_escape_string($con,$_POST['mobile']) ; 
        $upassword =mysqli_real_escape_string($con, $_POST['password']) ;
        $ucpassword = mysqli_real_escape_string($con,$_POST['cpassword']) ;

        // to secure password
        $pass = password_hash($upassword,PASSWORD_BCRYPT);
        $cpass = password_hash($ucpassword,PASSWORD_BCRYPT);

        // to check if the email is already exist or not
        $emailquery = " select * from registrartion where email = '$uemail' ";

        // to apply thequery
        $query = mysqli_query($con,$emailquery);

        // to check the no of email (required = 0 )
        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
             ?>
                        <script>
                        alert("Email already exists");
                        </script>
                        <?php

        }else{
            if ( $upassword === $ucpassword) {

                // insert query 
                $insertquery = " insert into registrartion (name,email,mobile,password,cpassword) values ( '$uname','$uemail','$umobile','$pass','$cpass' )";

                // to impliment query
                $iquery = mysqli_query($con,$insertquery);

                if($iquery){
                      header('location:login.php');

                        }else{
                            ?>
                        <script>
                        alert("No Connection ");
                        </script>
                        <?php
                        }

            }else{
                 ?>
                        <script>
                        alert("password not match ");
                        </script>
                        <?php
            }
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
          <h2>Create account</h2>
          <div class="input_div one">
            <div class="i">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div>
              <h5>Username</h5>
              <input class="input" type="text"  name ="name" required/>
            </div>
          </div>
          <div class="input_div one">
            <div class="i">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h5>Email Address</h5>
              <input class="input" type="text"  name ="email" required/>
            </div>
          </div>
          <div class="input_div one">
            <div class="i">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div>
              <h5>Mobile Number</h5>
              <input class="input" type="text"  name ="mobile" required/>
            </div>
          </div>
          <div class="input_div one">
            <div class="i">
              <i class="fa fa-lock"></i>
            </div>
            <div>
              <h5>Create Password</h5>
              <input class="input" type="password" name ="password" required />
            </div>
          </div>
          <div class="input_div one">
            <div class="i">
              <i class="fa fa-lock"></i>
            </div>
            <div>
              <h5>Conform Password</h5>
              <input class="input" type="password" name ="cpassword" required />
            </div>
          </div>
          <input type="submit" class="btn" value="Create Account" name ="submit"/>
          <h4> Have An Account ?</h4><a href="login.php">Login Now</a>
        </form>
      </div>
    </div>
    <script  src="./js/signup.js"></script>
  </body>
</html>




