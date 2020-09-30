<?php
    //$conn=mysqli_connect("localhost","root","","users");
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q = "select * from adding";
    $result =mysqli_query($conn,$q);
    /*if($result)
    {
        echo "ahmed";
    }*/
?>
<style>
.list1
{
border: 2px solid green;
text-align:upper;
width: 250px;
margin-left:25px;
height:50px;
font-size:14px;
font-weight:bold;
font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.list1:hover
{
    color: black;
}
h1
{
    color: gray;
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
    <link rel = "icon" href = "image3.png"/>
    <link rel = "stylesheet" href="styles.css">
    <title>Transaction</title>

</head>
<body>
    <div class ="text-center">
        &nbsp;
    <h1> Select SENDER</h1> 
</div>
<div class = "text-center">  
<form  action="detail.php" method="post">

    <table class="flat-table flat-table-1">


    <?php


//$conn=mysqli_connect('localhost','root','','users');
$conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
$q="select * from adding";
$result=mysqli_query($conn,$q);

?>

<br>
  <select name="Name" onchange="this.form.submit()" class="list1">
      <option class = "text-center" > SELECT SENDER</option>
   <?php
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

<?php }
  ?>

        </select>
     </div>

</div>
    </form>

    


</body>
</html>