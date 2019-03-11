<?php $title = "Sign Up"; ?>
<?php
include_once("header.php");
?>
      <section class="container">
            <div class="wrapper">
                  <h2>Sign Up</h2>
                  <form class="forms" name="myForm" action="includes/signup.inc.php" method="POST">
                        <input type="text" onkeyup="usernameValidation()" name="username" placeholder="Username">
                        <p class="color" id="resultusername"></p>
                        <input type="password" onkeyup="passwordValidation()" name="password" placeholder="Password">
                        <p class="color" id="resultpassword"></p>
                        <input type="text" onkeyup="fnameValidation()" name="fname" placeholder="Firstname">
                        <p class="color" id="resultname"></p>
                        <input type="text" onkeyup="snmValidation()" name="lname" placeholder="Lastname">
                        <p class="color" id="resultsname"></p>
                        <input type="text" onkeyup="emailValidation()" name="email" placeholder="E-mail">
                        <p class="color" id="resultemail"></p>
                        <button type="submit" name="submit">Sign Up</button>
                  </form>
            </div>
      </section>
<?php

include_once("footer.php");

?>