<?php 
include ("./headFoot/header.php");
include ("../db/dbconn.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from blogpost where id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo "No blog found" . mysqli_error($conn);
    }
    else{
      $row = mysqli_fetch_array($result);

      if(isset($_POST['update_blog'])){
          $name = $_POST['name'];
          $blog = $_POST['blogText'];

          if ($name === '' || $blog === '' ){
              echo '<script>alert("Please fill in all the fields")</script>';
          }
          else{
              $query = "update blogpost set name = '$name', blog = '$blog' where id = $id";
              $result = mysqli_query($conn, $query);
              if (!$result) {
                  echo mysqli_error($conn);
              }
              else{
                  header('location:../index.php');
                  exit();
              }
          }
      }
?>
    <div class="m-auto w-50 border p-4">
        <form action="update_blog.php?id=<?php echo $id; ?>" method="post">
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
                <label for="inputBlog" class="form-label">Blog</label>
                <textarea class="form-control" name="blogText" id="inputBlog" rows="3" ><?php echo $row['blog']; ?></textarea>
            </div>
            <input type="submit" name="update_blog" value="UPDATE" class="btn btn-success">
        </form>
    </div>
<?php 
    }
}
else{
    echo "No blog ID specified";
}
include("./headFoot/footer.php"); 
?>
