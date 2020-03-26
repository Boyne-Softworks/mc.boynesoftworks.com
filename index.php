<?php
  require "header.php";
 ?>
  <br>
  <br>
  <br>
  <br>
    <main class="w3-center">
      <main class="page landing-page">
        <section class="clean-block clean-hero" style="">
            <div class="text">
              <h2>Welcome to the Boyne Softworks Minecraft Server Page</h2>
              <p><a href="https://mega.nz/#F!KiZD2IIZ!E0ZXyhnGyIp9mK22GPR6uw">MODS DOWNLOAD HERE!</a></p>
                <?php
                 if (isset($_SESSION['useruid'])) {
                   echo '<form action="includes/logout.inc.php" method="post">
                     <button class="btn btn-outline-light btn-lg" type="submit" name="logout-submit">Logout</button>';
                  echo '<p class="w3-center">Welcome back</p>' . $_SESSION["useruid"];
                 }

               else {
                   echo '<button class="btn btn-outline-light btn-lg w3-center"><a href="login.php">Login</a></button>
                    <br>
                  <button class="btn btn-outline-light btn-lg w3-center"><a href="signup.php">Signup</a></button>
                   ';
                 }
                  ?>
                </div>
              </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>We are Boyne-Softworks, A non-profit software studio, determined to make code. We live and breathe 1's and 0's.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="getting-started-info"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>What can we offer you and everyone else?</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="material-icons icon">lock</i>
                        <h4>Security</h4>
                        <p>We will put your security first and protect you from data breaches!</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="far fa-eye-slash icon"></i>
                        <h4>Privacy</h4>
                        <p>Your privacy first, everything you type is encrypted on our servers.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon ion-waterdrop icon"></i>
                        <h4>Fluid</h4>
                        <p>Quick, responsive , Fluid.<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>Connect, Adapt and share.<br></h4>
                        <p>We are always creating new ways to advance the technological landscape, why not jump in and join?<br></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
 <?php
  require "footer.php";
  ?>
