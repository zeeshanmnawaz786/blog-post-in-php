   <?php include("./headFoot/header.php") ?>
   <?php session_start(); ?>


   <?php
   if (isset($_SESSION["username"])){
      echo "<h2 class='container w-200px m-auto text-center'>Welcome ".$_SESSION["username"]."</h2>";
   }
   else{
      header("location:./index.php");
   }
   ?>

   <div class="container w-200px m-auto text-center">
      <a href="./auth/logout.php">
         <button  class="btn btn-danger">Log out</button>
      </a>
   </div>
   <?php include("./headFoot/footer.php") ?>
