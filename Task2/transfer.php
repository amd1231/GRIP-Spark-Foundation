<?php
    session_start();
    //$conn=mysqli_connect('localhost','root','','users');
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q="select Name from adding";
    $result=mysqli_query($conn,$q);
    $_SESSION['to']=$_POST['transfer'];
    //echo $_SESSION['to'];
?>
<style>
    html
    {
        padding: 8px;
    }
    h2
    {
        color: Red;
        margin-top: auto;
        padding-top: 2px;
        font-size:14px;
    }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "icon" href = "amount.jpg"/>
    <link rel = "stylesheet" href= "styles1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Credits</title>
</head>
<body>
    
    
    <form action="credits.php" method="post">

<br><br>

<div class="form-row">
    <div class="col-md-3 mb-3">

    <label for="number"><h2>Enter credits</h2></label>
    
<input type="number" name="transfer"  class= "form-control" placeholder="Enter Credits to be trasfered" min="0"/><br>
<br>
</div>
</div>
<br><input class="btn btn-success " type="submit" value="Ok">
</form>
</body>
</html>