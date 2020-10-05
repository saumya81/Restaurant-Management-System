<?php 



$host = "localhost";
$user= "root";
$pwd = "";
$database = "restrodb";
try {
    $con = new PDO("mysql:host=$host; dbname=$database", $user, $pwd, array( PDO::ATTR_PERSISTENT => true ));
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    throw new Exception();
    
}


?>