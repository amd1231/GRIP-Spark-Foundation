<?
   // $conn = mysqli_connect("localhost","root","","users");
    $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $q = "Select * from transaction";
    $result = mysqli_query($conn,$q);
    if($conn)
    {
        echo "ahmed";
    };






?>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    </head>
<style>
        body
        {
    background-image: url("./image2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  
}
.container 
{ 
    height: 200px;
    position: relative;
    
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  
}

table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          text-align: left;
          padding: 8px;
        }


        th {
          background-color: #4CAF50;
          color: white;
        }
        </style>
</style>


    <body>
        <div class="container">
        <div class="col-log-12">
            <br><br>
            
            
            <h1 class="text-center">Transaction History</h1>

                <div class="table-responsive">
                <table class=" table table-bordered text-center">
<br>
            <thead class ="thead-dark">
                  
            <tr class="text-center">
                    <th>From</th>
                    <th>To</th>
                    <th>Credits Transfered</th>
                    
                </tr>
                <?php
                // $conn = mysqli_connect("localhost","root","","users");
                 $conn = mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
                 $q = "Select * from transaction";
                 $query = mysqli_query($conn,$q);
        while($res = mysqli_fetch_array($query))
        {

?>
                
                <tr class="text-center">
                    <td> <?php echo $res['from'] ;?></td>
                    <td><?php echo $res['to'] ;?></td>
                    <td><?php echo $res['Credits'] ;?></td>
                   
                    

                    </tr>
                <?php 
                    }
                ?>
            </table>

        </div>
        </div>
        <div class = "container center">
        <a class="btn btn-success" href="index.php" role="button">Home</a>
        </div>
    </body>
</html>