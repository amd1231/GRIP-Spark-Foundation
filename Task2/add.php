<?php
   // $conn = mysqli_connect("localhost","root","","users");
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q= "select * from adding";
    $result= mysqli_query($conn,$q);
    /*if($conn)
    {
        echo "ahmed";
    };*/
    ?>
<?php

if(isset($_POST['done'])){
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Credit = $_POST['Credit'];

$q="INSERT INTO `adding`(`Id`,`Name`,`Credit`) VALUES ('$Id','$Name','$Credit')";

$query = mysqli_query($conn,$q);
if($query)
{
    header("location:users.php");
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "icon" href = "image3.png"/>
    <link rel= "stylesheet" href = "styles1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>insert</title>
  



</head>
<body>


    <h1 class= "text-center">Add Users</h1>
    <br>
    <form class="form-group"  method="post" >
    <div class="container" style="width: 300px;">
    
    <label for="ID"><b>Id</b></label>
      <input type="number" placeholder="Enter Id" name="Id" min="0" required>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" pattern="^[a-zA-Z]+$" name="Name" required>
      <hr>
      <label for="Credit"><b>Credits</b></label>
      <input type="number" placeholder="Enter Credits" name="Credit" min="0" required>
      <br><br><hr>
      <div class="text-center">
      <button type="submit" name="done">Submit</button>
      <a class = "btn btn-danger" href = "index.php" >Cancel</a>
     
</div>
</div>
</form>

</body>
</html>