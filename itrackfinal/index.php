<?php
require "viewingheader.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
      <?php
      if(isset($_SESSION['userId'])) {
        if($_SESSION['isAdmin']){
          header("Location: homeitrack.php");
        }
        else{
          header("Location: complainant_view.php         ");
        }
        
      }
    
      ?>


  </div>
</main>


<?php

  // require "footer.php";

?> 