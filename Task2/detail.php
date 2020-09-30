<?php
    session_start();
    //$conn=mysqli_connect('localhost','root','','users');
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $Name=$_POST['Name'];
    $q="select * from adding where Name='$Name'";
    $result=mysqli_query($conn,$q);
    $row_count=mysqli_num_rows($result);
    $_SESSION['Name']=$Name;

?>
<html>
<head>
   <title>
   SENDER
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="styles.css">

</head>
    <body>
      <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
          background-color: #4CAF50;
          color: white;
        }
        </style>

<h1 class="text-center">User</h1>
<div class = "table-responsive">
       <table class="flat-table flat-table-1">

           <th>Id</th>
           <th>Name</th>
           <th>Credit</th>
           <tr>
           <?php

//$conn=mysqli_connect('localhost','root','','users');
$conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
$Name=$_POST['Name'];
$q="select * from adding where Name='$Name'";
$res=mysqli_query($conn,$q);

$_SESSION['Name']=$Name;
//echo "ahmed";

     $row=mysqli_fetch_array($res);
           ?>
 <td><?php echo  $row["Id"]; ?></td>
  <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>


           </tr>


        </table>
    <style media="screen">

     a:link {


    text-decoration: none;


    }



    </style>

        

        </main>
        </div>
</div>
            <div class = "text-center">
        <a class="btn btn-success" href="index.php" role="button">Home</a>
        <a class="btn btn-success" href="start.php" role="button"> Start Transaction</a>
        </div>


    </body>
</html>
