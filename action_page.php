<!-- INSERT INTO `comments` (`name`, `email`, `message`, `dt`) VALUES ('Unnati', 'unnati@gmail.com', 'looking for more information...', current_timestamp()); -->

<?php

// if(isset($_POST['name'])){

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";

    $con = mysqli_connect($server,$user,$password,$database);

    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // else{
    //   echo "connected";
    // }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo $name . $email . $message;

    $sql = "INSERT INTO `comments` (`name`, `email`,`message`, `dt`) VALUES ('$name', '$email','$message', current_timestamp());";

    if(mysqli_query($con, $sql)){
        header("Location:central-jobs.html");
    }
    else{
        echo "ERROR: $sql1 <br> $con->error";
    }
   
    

   //  $con-> close();
// }

?>
