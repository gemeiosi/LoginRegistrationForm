<?php $title = "Login"; ?>
<?php
include_once("header.php");
?>

      <section class="container">
            <div class="wrapper">
                  <h2>Login</h2>
                  <form class="forms" name="myForm" action="includes/login.inc.php" method="POST">
                        <input type="text" name="username" placeholder="Username/E-mail">
                        <p class="color" id="resultusername"></p>
                        <input type="password" name="password" placeholder="Password">
                        <p class="color" id="resultpassword"></p>
                        <button type="submit" name="submit">Login</button>
                        <a href="forgotpassword.php">Forgot Password</a>
                  </form>
            </div>
      </section>
<?php

include_once("footer.php");

?>