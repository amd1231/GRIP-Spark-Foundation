<?php
    session_start();
    //$conn=mysqli_connect('localhost','root','','users');
    $conn=mysqli_connect("localhost","id14959604_localhost","NeverSettle@3763","id14959604_users");
    $Name1=$_SESSION['Name'];
    $q="Select Credit from adding where Name='$Name1'";
   // echo $q; query
   // echo "<br>"; 
    $result=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($result);
    $var=$row['Credit'];
    //echo $var;  credits 
    //echo "<br>";
    
    $from=$_SESSION['Name'];
   // echo $from; sender
   // echo "<br>";
    
    $to=$_SESSION['to'];
    //echo $to;  Reciver
    //echo "<br>";
  //  echo $_SESSION['Name'];
        $q1="Select Credit from adding where Name='$to'";
       // echo $q1; query
       // echo "<br>";
        $result1=mysqli_query($conn,$q1);
     
        $row1=mysqli_fetch_array($result1);
        $var1=$row1['Credit']; 
        //echo $var1; reciver credits
        //echo "<br>";
    session_destroy();
if(  $var > $_POST["transfer"]  )
{

    //echo $var    sender credits;
    //echo "<br>";
    //echo $_POST['transfer'] credits to be transfered;
    //echo "<br>";
    $sub=$var-$_POST["transfer"];
    //echo $sub;
    //echo "<br>";
    $q="update adding set Credit='$sub' where Name='$from' ";
    //echo $q;
    //echo "<br>";
    $result=mysqli_query($conn,$q);
    $sum=$var1+$_POST["transfer"];
    //echo $sum;
    //echo "<br>";
    $q="update adding set Credit='$sum' where Name='$to' ";
    //echo $q;
    //echo "<br>";
    $result=mysqli_query($conn,$q);

    if(isset($_POST['done']))
    {
    $from = $row['from'];
    $to = $row['to'];
   
    }
    
    $q="INSERT INTO `transaction`(`from`,`to`,`Credits`) VALUES ('$from','$to','$_POST[transfer]')";
    
    $tns=mysqli_query($conn,$q);
    if(!$tns){
     echo mysqli_error($conn);
    }
    echo"<script type='text/javascript'>alert('Transfered successfully');
   </script>";
    include 'users.php';

}
else
{

   echo"<script type='text/javascript'>alert('Insufficient Balance');
   </script>";
    include 'users.php';

}
?>



