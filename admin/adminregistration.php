 
 
 <?php
 
 include("../connection/connect.php");
error_reporting(0);
session_start();
 



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
		
	
	$check_username= mysqli_query($db, "SELECT username FROM admin where username = '".$_POST['cr_user']."' "); //username of username
	
	$check_email = mysqli_query($db, "SELECT email FROM admin where email = '".$_POST['cr_email']."' "); // Emali of the user
	
	  $check_code = mysqli_query($db, "SELECT adm_id FROM admin where code = '".$_POST['code']."' "); // given code of the admin

	
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
	
								$mql = "INSERT INTO admin (username,password,email,code) VALUES ('".$_POST['cr_user']."','".md5($_POST['cr_pass'])."','".$_POST['cr_email']."','".$_POST['code']."')";
								mysqli_query($db, $mql);
									$success = "Admin Added successfully!";
						 }
        }
	}

}
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">


 </head>
 <body>
    
 <div class="container">
  <div class="info">
    <h1>Food Picky</h1><span>Admin login page</span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  
  <form class="register-form" action="" method="post">
    <input type="text" placeholder="Username" name="cr_user"/>
    <input type="text" placeholder="Email address"  name="cr_email"/>
	 <input type="password" placeholder="Password"  name="cr_pass"/>
	  <input type="password" placeholder="Confirm password"  name="cr_cpass"/>
	  <input type="password" placeholder="Unique-Code"  name="code"/>
   <input type="submit"  name="submit1" value="Create" />
    <p class="message">Already registered? <a href="">Sign In</a></p>
  </form>
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/index.js'></script>   

 </body>
 </html>