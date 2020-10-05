<?php 
 if(isset($_POST['submit']))
{
     $title=$_POST['title'];
     $description=$_POST['description'];
     $restaurant=$_POST['restroname'];
    $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'restrodb');
       
        $q="insert into category(title,description) values ('$title','$description','$restaurant');";

        if($con->query($q))
        {
           
            session_start();
    
    $_SESSION['msg']="You have successfully added new category!";
            header('Location:dashboard.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
