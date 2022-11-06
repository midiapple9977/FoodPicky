


<!DOCTYPE html>
<html lang="en" >
<?php
include("../phpfiles/connection/connect.php");
error_reporting(0);
session_start();
//authenticate the admin for log in
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{      
									if($row['usertype'] == 'admin'){
										$_SESSION["adm_id"] = $row['adm_id'];
										 header("refresh:1;url=dashboard.php");
									}elseif($row['usertype'] == 'cashire'){
										$_SESSION["adm_id"] = $row['adm_id'];
										header("refresh:1;url=casheir.php");
									}else{
										echo "nooo";
									}
                                    	
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!";
                                }
	 }
	
	
}
//Create new account for the admin
if(isset($_POST['submit1'] ))
{
     if(empty($_POST['cr_user']) ||
   	    empty($_POST['cr_email'])|| 
		empty($_POST['cr_pass']) ||  
		empty($_POST['cr_cpass']) ||
		empty($_POST['code']))
		{
			$message = "All required* fields must be filled";
		}
	else
	{
		
	
	$check_username= mysqli_query($db, "SELECT username FROM admin where username = '".$_POST['cr_user']."' ");
	
	$check_email = mysqli_query($db, "SELECT email FROM admin where email = '".$_POST['cr_email']."' ");
	
	  $check_code = mysqli_query($db, "SELECT adm_id FROM admin where code = '".$_POST['code']."' ");

	
	if($_POST['cr_pass'] != $_POST['cr_cpass']){
       	$message = "Password does not match";
    }
	
    elseif (!filter_var($_POST['cr_email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid email address.. Please type a valid email!";
    }
	elseif(mysqli_num_rows($check_username) > 0)
     {
    	$message = 'Username already exists!';
     }
	elseif(mysqli_num_rows($check_email) > 0)
     {
    	$message = 'Email Already exists!';
     }
	 if(mysqli_num_rows($check_code) > 0)           // if code already exist 
             {
                   $message = "Unique Code Already Redeem!";
             }
	else{
       $result = mysqli_query($db,"SELECT id FROM admin_codes WHERE codes =  '".$_POST['code']."'");  //query to select the id of the valid code enter by user! 
					  
                     if(mysqli_num_rows($result) == 0)     //if code is not valid
						 {
                            // row not found, do stuff...
			                 $message = "Invalid code!";
                         } 
                      
                      else                                 //if code is valid 
					     {
	
								$mql = "INSERT INTO admin (username,password,email,code,usertype) VALUES ('".$_POST['cr_user']."','".md5($_POST['cr_pass'])."','".$_POST['cr_email']."','".$_POST['code']."','".$_POST['usertype']."')";
								mysqli_query($db, $mql);
								if($_POST['usertype'] == "admin"){
									$success = "Admin Added successfully!";
								}else{
										$success = "Admin Added successfully!";
								}
									
						 }
        }
	}

}
?>

<head>
  <meta charset="UTF-8">
  <title>Food Picky Adm-Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
 

      <link rel="stylesheet" href="css/login.css">
<style>
	.form-select{
		width: 100%;
                position: relative;
                height: 35px;
                margin-bottom: 10px;
				font-family: Arial, Helvetica, sans-serif;
                font-size: 13px;
	}
</style>
  
</head>

<body>

  <!-- Admin create new acount-->
<div class="container">
	<img src="Spinner.gif" alt="" width="10px" height="10px">
  <div class="info">
    <h1>Food Picky</h1><span>Admin login page</span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  
  <form class="register-form" action="index.php" method="post">
    <input type="text" placeholder="Username" name="cr_user"/>
    <input type="text" placeholder="Email address"  name="cr_email"/>
	 <input type="password" placeholder="Password"  name="cr_pass"/>
	  <input type="password" placeholder="Confirm password"  name="cr_cpass"/>
	  <input type="password" placeholder="Unique-Code"  name="code"/>

	  <select class="form-select" name="usertype" aria-label="Default select example">
		<option selected >User Type</option>
		<option value="admin" selected>Admin</option>
		<option value="cashire">Cashire</option>
	 
		</select>

   <input type="submit"  name="submit1" value="Create" />
    <p class="message">Already registered? <a href="">Sign In</a></p>
  </form>
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
  <form class="login-form" action="index.php" method="post">
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="password"/>
 
    <input type="submit"  name="submit" value="Login" />
    <p class="message">Not registered? <a href="#"   >Create an account</a></p>
  </form>
  <!--log in the admin -->
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/index.js'></script>   

 
 
</body>

</html>
