
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .newtable{
            margin: 2px auto;
        width: 90%;
        }
       
    </style>
</head>
<body>
    
</body>
</html>

<?php
sleep(1);
include("phpfiles/connection/connect.php"); 
 
if(isset($_POST['request'])){
    $request = $_POST['request'];

    $query = "SELECT * FROM  dishes WHERE c_name='$request' AND  status='0'";
    $result = mysqli_query($db , $query);
    $count = mysqli_num_rows($result);
     
}


?>
<table class="table newtable">
     <?php
     if($count){
    ?>
    <thead>
                          <tr>
                       
                            <th>Food Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Food Image</th>
                            <th>Action</th>
                          </tr>
                          <?php
                             }else{
                                echo "<div class='showNothing'>
                                              <h1>No Food Found</h1>
                                              <span>☹</span>
                                          </div>";
                             }
                          ?>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <tr>
         
            <td>👍 <?php echo $row['title'];?></td>
            <td><?php echo $row['slogan'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><img src="admin/Res_img/dishes/<?php echo $row['img']?>" alt="" class="img-responsive img-thumbnail" width="150"></td>
            <td><?php echo ' <a href="dishes.php?res_id='.$row['d_id'].'" class=" btn btn-success">Order Now</a>'?></td>
        </tr>
       <?php
        }
       ?>
        
    </tbody>
    <?php
 
    ?>
    
</table>
 