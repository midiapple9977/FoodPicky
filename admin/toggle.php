<?php
include("../phpfiles/connection/connect.php");
$catId = $_POST['catId'];
$sql = "SELECT * From dishes WHERE d_id= $catId";
$result= mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($result);
$status = $data['status'];

if($status == '1'){
    $status = '0';
}else{
    $status = '1';
}

$update = "UPDATE dishes SET status='$status' WHERE d_id=$catId "; 
$result1= mysqli_query($db, $update);
if($result1){
    echo $status;
}
?>