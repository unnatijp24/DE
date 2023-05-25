<?php

if(isset($_POST["fmail"])){

    $server = "localhost";
    $user = "root";
    $password = ""; 
    $database = "mydb";

    $con = mysqli_connect($server,$user,$password,$database);

    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    else{
      echo "connected";
    }

    $fmail = $_POST['fmail'];
    $fpassword = $_POST['fpassword'];

   echo $fmail;
   echo $fpassword;

    $sql = "SELECT `fmail`, `fpassword` FROM `log` WHERE (fmail = $fmail AND fpassword = $fpassword)";
    echo $sql;
    echo "<pre>";
    if(mysqli_query($con, $sql)){
        header("Location:Homepage.html");
    }
    else{
        echo "ERROR: $sql1 <br> $con->error";
    }
   //  $con-> close();
}
?>