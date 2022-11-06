<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <link rel="stylesheet" href="../css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #ff3300;
		  transition: 0.1s all ease-in-out;
	  }
	  #buttn:hover{
	        	cursor: pointer;
              opacity: 0.7;
              transition: 0.1s all ease-in-out;
	  }
	  #thisistheone{
		margin-bottom: 5px;
		color: red;
	  }
	  #CreatenEWaCCOUNT{
		margin-left: 5px;
	  }
	  #CreatenEWaCCOUNT:hover{
		text-decoration: underline;
	  }
	  .starlight{
		width:1000px;
		height:600px;
		position: absolute;
               z-index: -10;
	  }
	  .theRedAlertDiv{
            margin: 0px auto;
            top: 0px;
          display: flex;
		  align-items: center;
            height: 60px;
            background-color: rgba(255, 0, 0, 0.148);
            }
			.theRedAlertDiv span{
				color: red;
				position: relative;
				margin-left: 20px;
			}
			#showOfflineDiv{
				display: none;
				width: 100%;
				height: 720px;
				background-color: rgba(255, 0, 0, 0.148);
			}
			#logInTile{
			}
			#logInForm{
			}
			#LogInPage{
			}
			#linkedinaccount{
				text-decoration: none;
				position: relative;
				top: 10px;
				color: rgba(0, 0, 255, 0.729)
			}
			#linkedinaccount:hover{
				text-decoration: underline;
			}

			.footer {
				text-align: center;
				margin: 10px auto;
				position: relative;
				top: 80px;
    
}
			@media screen and (max-width: 800px){
            .starlight{
				 display: none;
			}
				
			}
	  </style>
  
</head>

<body>
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions

 
 

if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."' && status=1"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	 
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=../index.php"); // redirect to index.php page
	                            }
								
								 else{
									$message = "Incorect Username or password or verify your E-mail";
								}
								 
								
								
								
								 
							    
	 }
	
	
}
?>

<div class=" ">


</div>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->

<div id="showOfflineDiv">
<p id="Showthestatus">Off dwadwdline</p>
</div>
<div class="pen-title" id="LogInPage">
  <h1>Login Page</h1>
</div>
<!-- Form Module-->
<div class="module form-module" id="logInTile">
  <div class="toggle">
   
  </div>
  <div class="form" id="logInForm">
    <h2>Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="registration.php" style="color:#f30;" id="CreatenEWaCCOUNT"> Create an account</a></div>
</div>



<footer class="footer"> © Saegis campus 2022 All rights reserved. Developed &#x1F49C; by <b><a href="#">Mithila Dilshan</a></b><br>
     <p> <a href="https://www.linkedin.com/in/mithila-dilshan-473905228" id="linkedinaccount" target="_blank">LinkedIn</a></p>

</footer>
<script type="text/javascript">
 
   window.addEventListener('online', function () {
	document.getElementById("showOfflineDiv").innerHTML='Your are Onliwdadwadwne';
   })

   window.addEventListener('offline', function () {
	document.getElementById("showOfflineDiv").innerHTML='Your are Offline';
	
   })
  </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   


  <script src="starlight.js"></script>

  
</body>

</html>
