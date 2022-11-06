

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #emaildiv{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 90%;
            height: 500px;
            margin: 10px auto;
        }
        #emaildiv img{
            width: 500px;
            height: 500px;
        }
        #thetile{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            color: rgb(1, 160, 1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php 

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
 
if(isset($_GET['code'])){

  
 
    $verification_code = $_GET['code'];
    $queryyyy = "SELECT * FROM users WHERE verification_code= '$verification_code'  ";
 

$resultttt = mysqli_query($db, $queryyyy);
 $rowssss = mysqli_fetch_assoc($resultttt);

if(mysqli_num_rows($resultttt) == 1){
    $_SESSION['confirmed_login'] = $rowssss['status'];
    
    $queryrr = "UPDATE users SET status=1,verification_code=NULL WHERE verification_code = '{$verification_code}' LIMIT 1 ";
    $result = mysqli_query($db,$queryrr);

    if(mysqli_affected_rows($db) == 1){
      
        echo '
        
        <h1 id="thetile">E-mail verified successfully</h1>
        
        <div id="emaildiv">
        <img src="newemailicon.png" alt="">
        </div>';
       
    }else{
        echo "invalid";
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
</head>
<body>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("#emaildiv").slideDown(1000);

});
</script>
</body>
</html>