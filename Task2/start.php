<?php
session_start();
//$conn = mysqli_connect('localhost','root','','users');
$conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
$Name = $_SESSION['Name'];
$q="Select Name from adding where  Name != '$Name'";
$result=mysqli_query($conn,$q);
//echo $_SESSION['Name'];
?>

<html>
<head>
   <title>Select user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel ="icon" href= "image3.png">
    <link rel="stylesheet" href="styles1.css">
    </head>
    <body>
   

<h1 class = "text-center">Select Reciever</h1>
   <hr>     
        <form action="transfer.php" method="post" style="position: relative; left: 4%;">
        
       <table class ="table  table-borderless table-hover  ">
        
           <?php
     while($row = $result->fetch_assoc()) { ?>


   <tr class= "text-center">
       <td> <input type="radio" name="transfer" value="<?php echo $row["Name"]; ?>" class="rdo"><?php echo $row["Name"]; ?></td>

   </tr>
<?php }
  ?>



        </table>
<div class= "text-center">
<br><input class="btn btn-success " type="submit" value="Transfer">
     </div>
        </form>
        </div>
    </body>
</html>
