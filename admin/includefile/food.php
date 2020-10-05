
<div class='container'> 
        <div class='card-columns'>
       
   <?php 
         $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'restrodb');

        $q="select * from food";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        <div class='card shadow p-3 mb-5 bg-white rounded'>
        <img src='img/".$row['image']."' width='315' height='200' />
        <h3 class='card-title'>".$row['name']."</h3>
        <div class='card-body bg-danger text-center'><h6>Price: Rs ".$row['price']."/-<br>Restaurant:".$row['restaurant']."</h6>
       
        </div>
        </div>";
            
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>
            