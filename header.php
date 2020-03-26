<?php
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <title>Boyne-Softworks</title>
	<link rel="favicon" href="./assets/img/Icons/favicon-32x32.png" />
	<link rel="apple-touch-icon" href="./assets/img/Icons/apple-touch-icon.png" />
    <meta name="description" content="Non-Profit Software development company">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/w3.css">
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
	</head>
	<header>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top w3-grey clean-navbar">
     <div class="container"><a class="navbar-brand logo" href="./">Boyne Softworks</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav ml-auto">
		 <li class="nav-item" role="presentation"><a class="nav-link active" href="./">Home</a></li>
	<li class="nav-item" role="presentation">Products
		<ul>
			<!-- <li><a href="#">Poke</a></li>
		 	<li><a href="#">Chime</a></li> -->
			 <li><a href="https://mc.boynesoftworks.com">Minecraft Server!</a></li>
		</ul>
		</li>
			<li class="nav-item" role="presentation"><a class="nav-link active" href="./about.php">About Us</a></li>
			 <?php
				if (isset($_SESSION['useruid'])) {
					echo '
					<br>
					<br>
					<li class="nav-item" role="presentation"><a class="nav-link active" href="account.php"><i class="fas fa-user"></i>View your account</a></li>';
				}
					else {
				echo '<li class="nav-item" role="presentation"><a class="nav-link active" href="./login.php">Sign in <i class="fas fa-sign-in-alt"></i></a></li>
	 				 <li class="nav-item" role="presentation"><a class="nav-link active" href="./signup.php">Sign up <i class="fas fa-user-plus"></i></a></li>';
					}
						?>
			</ul>
		</div>
        </div>
     </nav>
	</header>
