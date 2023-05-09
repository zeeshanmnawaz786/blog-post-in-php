   <?php include("./headFoot/header.php") ?>
   <?php include("../db/dbconn.php") ?>

   <div class="container w-200px m-auto text-center">
    <h1>Login Form</h1>
</div>
  <?php
  if (isset($_GET['message'])){
    echo "<h4 class='container w-200px m-auto text-center'>".$_GET['message']."</h4>";
  }

  ?>
<form action="./login.php" method="post" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        </div>
        <div class="modal-body">
    <div class="mb-3">
      <label for="InputUserName" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="InputUserName">
    </div>
    <div class="mb-3">
      <label for="InputEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="InputEmail">
    </div>
  </div>
  <div class="modal-footer d-flex justify-content-between">
    <input type="submit" name="login_click" value="Submit" class="btn btn-success">
    <p>don't have an account <a href="./register_from.php">Register</a></p>
</div>
  </div>
  </div>
</form>


   <?php include("./headFoot/footer.php") ?>
