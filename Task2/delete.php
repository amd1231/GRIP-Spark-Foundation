<?php
    
  //  $conn = mysqli_connect('localhost','root','','users');
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q = "select * from adding";
    $result = mysqli_query($conn,$q);
    $id = $_GET['id'];
    $sql = "delete from adding where id = '$id'";
    $val = mysqli_query($conn,$sql);
    if($val)
    {
    header('location: users.php');
    };

?>