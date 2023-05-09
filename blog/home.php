   <?php include "./headFoot/header.php"; ?>
   <?php include("../db/dbconn.php") ?>

   <?php session_start(); ?>
   <?php
   if (isset($_SESSION["username"])){
      echo "<h2 class='container w-200px m-auto text-center'>Welcome ".$_SESSION["username"]."</h2>";
   }
   else{
      header("location:../index.php");
   }
   ?>

<div class="container m-auto w-75 text-left border p-4 mt-4">
  <div class="d-flex justify-content-between">
  <a href="../auth/logout.php">
    <button class="btn btn-danger mb-2">Log out</button>
  </a>
    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Blog</button>
</div>

  <!-- Blog Start -->
  
   <table class="table table-hover table-border table-striped">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Blog</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = "select * from blogpost";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo "No Blog found".mysqli_error($conn);
    }
    else{
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['blog']; ?></td>
          <td><a href="./update_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
          <td><a href="delete_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>

        <?php
      }
    }

    ?>
    </tbody>
    </table>

  <form action="insert_blog.php" method="post" >
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
          </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="inputBlog">Blog</label>
                  <textarea class="form-control" name="blogText" id="inputBlog" rows="3" placeholder="Enter your Blog"></textarea>
                </div>
                <input type="submit" name="add_blog" value="Submit" class="btn btn-primary">
            </div>
        <div class="modal-footer">
  </div>
  </div>

</form>
  <!-- Blog End -->
 <?php include "./headFoot/footer.php"; ?>
