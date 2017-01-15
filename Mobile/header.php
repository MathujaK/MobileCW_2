<!--Author :- Mathuja 2013050-->
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once 'dbconnect.php';
?>
<div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://disputebills.com"><img class="logo" src="images/logo1.png" alt="Dispute Bills"></a>
		
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><i class="fa fa-home fa-lg" ></i>Home</a></li>
          <li><a href="foodsdrinks.php"><i class="fa fa-cutlery fa-lg" aria-hidden="true"></i>Foods & Drinks</a></li>
          <li><a href="hotel.php"><i class="fa fa-bed fa-lg" aria-hidden="true"></i>Hotel</a></li>
		  <li><a href="offer.php"><i class="fa fa-gift fa-lg" aria-hidden="true"></i>Hot Offers</a></li>
		  <li><a href="about.php"><i class="fa fa-users fa-lg" aria-hidden="true"></i>About</a></li>
		  <li><a href="contact.php"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg" aria-hidden="true"></i>Account <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
			<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
              <li><a href="login.php"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> LogIn</a></li>              
              <li class="divider"></li>              
              <li><a href="register.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> SignUp</a></li>
			  <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>