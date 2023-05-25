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
      echo "connected\n";
    }

    $fmail = $_POST['fmail'];
    $fpassword = $_POST['fpassword'];

//    echo $fmail;
//    echo $fpassword;

   $query = "SELECT 'fmail', 'fpassword' FROM log WHERE (fmail='".$fmail."' AND fpassword='".$fpassword."');";
    $sql =mysqli_query($con, $query);
    //echo $sql;
    echo "<pre>";
    if(mysqli_num_rows($sql) > 0){
        header("Location:Homepage.php");
    }
    else{
        header("location:signup.php");
    }
   //  $con-> close();
}
?>