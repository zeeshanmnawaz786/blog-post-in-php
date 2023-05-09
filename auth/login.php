   <?php include "../db/dbconn.php"; ?>

   <?php session_start(); ?>

   <?php if (isset($_POST["login_click"])) {
     $username = $_POST["username"];
     $email = $_POST["email"];

     $query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
     $result = mysqli_query($conn, $query);

     if (!$result) {
       die("Query failed" . mysqli_error());
     } else {
       $row = mysqli_num_rows($result);
       echo $row;
       if ($row > 0) {
         $_SESSION["username"] = $username;
         header("location:../index.php");
       } else {
         header("location:./login_form.php?message=Email or password is incorrect");
       }
     }
   }
?>
