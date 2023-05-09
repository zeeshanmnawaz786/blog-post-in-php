<?php include("../db/dbconn.php") ?>

<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($username === '' || $email === '' || $pass === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
        echo '<script>window.location.href = "./login_form.php";</script>';
    }
    else{
        $query = "insert into users values(null, '$username', '$email', '$pass')";
        $result = mysqli_query($conn, $query);

        echo $result;

        if($result){
            echo '<script>window.location.href = "./login_form.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>