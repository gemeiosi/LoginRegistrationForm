<?php $title = "Digital Library"; ?>
<?php
include_once("header.php");
?>

      <section class="container">
            <div class="wrapper">
                  <?php

                        if(isset($_SESSION['u_id'])){
                              echo '<h2>Digital Library</h2>';
                              echo "You are logged in!";
                        }
                  ?>
            </div>
      </section>
<?php

include_once("footer.php");

?>