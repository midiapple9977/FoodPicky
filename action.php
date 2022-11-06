 <?php
 $conn = new mysqli("localhost", "root","","foodpicky_db");
 
 if($conn->connect_error){
     
    die("Failed" . $conn->connect_error);
 }
 if(isset($_POST['query'])){
    
    $inputText = $_POST['query'];
    $query= "SELECT * FROM dishes WHERE title LIKE '%$inputText%' AND status='0'";
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            
            echo  "<img src='phpfiles/search.png' id='TheSearcjIcon'><a href='#' class='list-group-item list-group-item-action border-1' id='theFilereditems'>".$row['title']."</a>";
            
        }
        
    }else{
        echo "<p class='list-group-item border-1' id='norecordBar'>No record</p>";
        
    }
 }
 
 ?>