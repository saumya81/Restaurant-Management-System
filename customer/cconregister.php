<?php 
 if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $number=$_POST['number'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     if (($_POST['password'] !== $_POST['confirmpassword'])) {
  $_SESSION['msg']="<h1>Invalid mobile number !!</h1>"; 
         header('Location:customerregister.php');
}
    if(!preg_match('/^[0-9]{10}+$/', $number))
         {
   $_SESSION['msg']="<h1>Invalid mobile number !!</h1>"; 
         header('Location: customerregister.php');
}
     
    $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'restrodb');
       
        $q="insert into customerdb(name,password,email,number) values ('$name',$password,'$email','$number');";

        if($con->query($q))
        {
           
            session_start();
    
         $_SESSION['customermsg']="You have successfully registered Please login !";
            header('Location: ../index.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
