<?php 
 if(isset($_POST['submit']))
{
     $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "admin/img/".$filename; 
     $name=$_POST['name'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $restaurant=$_POST['restroname'];
     
    $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'restrodb');
       
        $q="insert into food(name,category,price,restaurant,image) values ('$name','$category','$price','$restaurant','$filename');";
 if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        if($con->query($q))
        {
           
            session_start();
    
    $_SESSION['msg']="You have successfully added new food!";
            header('Location:../dashboard.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
