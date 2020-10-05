<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="img/flogo.png" height="50" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
      
     
         
          
                <?php  
            
              if(isset($_SESSION['customername'])){
            echo "<a class='nav-link' href='#'>Hi ".$_SESSION['customername']."<span></a><li class='nav-item'>
          <a class='nav-link' href='./customer/logout.php' ?>logout</a>
        </li></span>";
                  
                } 
          else
              echo "<a class='nav-link' href='customer/customerlogin.php'>login</a></li> <li class='nav-item'>
          <a class='nav-link' href='customer/customerregister.php'>Register</a>
        </li>";?>
            <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
           
      </ul>
    </div>
  </div>
</nav>