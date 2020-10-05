<?php  
             session_start();


?>
 <?php include'includefile/header.php' ?>
    <body>
    <!-- Navigation -->
<?php include'includefile/navindex.php' ?>
     <h1><center>   <?php


if(isset($_SESSION['customermsg']))
{
    $msg=$_SESSION['customermsg'];
    
    echo $msg;
     unset($_SESSION['customermsg']);
    
}


?></center></h1>

<!-- Page Content -->

        <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/3.png" alt="chicken" width="1550" height="500">
      <div class="carousel-caption">
        <h1 >Saumya's Kitchen</h1>
        <p>Get the best food in your doorstep</p>
      </div>   
    </div>
    <div class="carousel-item" >
      <img src="img/2.jpeg" alt="chicken" width="1550" height="500">
      <div class="carousel-caption" >
        <h1>Fresh and tasty</h1>
        <p>Fresh food leads to a fresh mind and body</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="chicken" width="1550" height="500">
        
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    
<!--slider ends-->
<!--      our restro-->
<section class="my-5 ml-5">
        <div class="py-5">
    <h2 class="text-center"> ABOUT US</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12"> 
            <img src="img/8.webp" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12"> 
            <h2 class="display-4">Hey Guys</h2>
            <p class="py-3">Hey everyone . We are one of the most renowed restaurant which provide all the food at your doorstep with free delivery .Our food is fresh and cleanily prepared.I hope you like our service.</p>
            <a href="aboutus.php" class="btn btn-danger">Click here to know more</a>
        </div>
    
    </div>
    
    </div>    
        </section>         
        
 <!--   Categories -->  
        <section class="my-5">
            
<h2 class="text-center"> We  have so many categories of food</h2>
        
        <br><br>
        <?php include'includefile/category.php' ?>
        
        </section>
        <section class="my-5">
            
<h2 class="text-center"> Our food menu</h2>
         <br><br>
        
        <?php include'includefile/food.php' ?>
        
        </section>
       
         <?php include'includefile/ourservice.php' ?>
        <?php include'includefile/ourmotto.php' ?>
        
   <br><br>     
        
        
<!-- seller registration       -->
        
        <?php include'includefile/footerindex.php' ?>