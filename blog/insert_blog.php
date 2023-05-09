<?php
include "../db/dbconn.php";

if(isset($_POST['add_blog'])){
    $name =  $_POST['name'];
    $blog =  $_POST['blogText'];

    if ($name === '' || $blog === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
        echo '<script>window.location.href = "../index.php";</script>';
    }
    else{
        $query = "INSERT INTO blogpost VALUES(null, '$name', '$blog')";
        $result = mysqli_query($conn, $query);

        if($result){
            echo '<script>window.location.href = "../index.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>
