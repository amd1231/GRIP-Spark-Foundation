<?php
    //$conn=mysqli_connect('localhost','root','','users');
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q="select * from adding";
    $result=mysqli_query($conn,$q);
     /*if($conn)
    {
        echo "<p>Successfully connected to server</p>";
    }
    else{
        echo "<p>Try again</p>";
    }*/
?>
    <style>
        td
        {
            color: black;
        }
        td:hover
        {
        color: tomato;
        }
        #div
        {
            button-align: center;
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "icon" href = "image3.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Users</title>
</head>
<body>
            <h1 class="text-center">Users</h1>  
            
        <div class="table-responsive">
            <table class="table table-hover table-bordered .table-sm"><br>
            <thead class ="thead-dark">    
        
        <tr class="text-center">
            <th>ID</th>
            <th>Name</th>
            <th>Credits</th>
            <th>Delete</th>
            
            </tr>
           
        <?php
           // $conn=mysqli_connect('localhost','root','','users');
            $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
            $q="select * from adding";
            $result=mysqli_query($conn,$q);
       
            
            
        while($row = mysqli_fetch_array($result))
            {
            ?>
           
           <tr class="text-center">
                    <td> <?php echo $row['Id'] ;?></td>   
                    <td><?php echo $row['Name'] ;?></td>
                    <td><?php echo $row['Credit'] ;?></td>
                    <td><a href="delete.php?id=<?php echo $row['Id'];?>" class= "btn btn-danger" >Delete</a></td>
     
                    </tr>
            
            <?php
            }
            ?>
            
            
            </table>
        </div>
        </div>
        </div>
            <div class = "text-center">
        <a class="btn btn-success" href="add.php" role="button">Add</a>
        <a class="btn btn-success" href="transaction.php" role="button">Transaction</a>
        <a class="btn btn-success" href="history.php" role="button">Transaction Record</a>
            </div>

        
</body>
</html>