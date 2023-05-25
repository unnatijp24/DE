<?php

// {

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
    if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // echo $name . $email . $message;

    $sql = "INSERT INTO `comments` (`name`, `email`,`message`, `dt`) VALUES ('$name', '$email','$message', current_timestamp());";
    $result=mysqli_query($con, $sql);
    // if(mysqli_query($con, $sql)){
    //     header("Location:Homepage.php");
    // }
    // header("Location:Homepage.php");
   //  $con-> close();
   if($result)
   {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    }
?>