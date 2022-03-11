<?php 
session_start();
    include "connect.php";
    if(!empty($_POST['Name'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $comment = $_POST['Comment'];
    $t = date("h:i:s",time());
    $query = "INSERT INTO Users VALUES(null,'$name','$email','$comment','$t',{$_SESSION['id']})";
    if($res = mysqli_query($conn,$query));
    else
     echo mysqli_error($conn);}
    header("location:blog.php?id={$_SESSION['id']}");
?>