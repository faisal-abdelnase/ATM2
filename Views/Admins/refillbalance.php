<?php
session_start();
if(!isset($_POST['submit'])){

  }
  else{
    echo '<center><div  style="width:40%; background:#f5923c; font:white ; font-size:90px" class="alert alert-danger" role="alert">
   <center> <h4 style="font:bold">There is no one have this PIN</h4></center> </center>
  </div>';
  header("refresh:3;");
 
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refill Balance</title>

    <style> 
input
{
   width: 25%;
   padding:10px 15px;
   font-size: 30px;
  
   margin-top:90px;
   
   background: #eee;
   border-radius: 5px;
}


</style>
</head>
<body>
<h1 style="text-align:center;font-size: 60px"> ATM Balance is : <?php  $balance=1487; echo $balance." $";  ?></h1>  

<form action="" method="post">
<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     
      
      <span style="font-size:37px;font-weight:700;margin-left:580px;" > Balance : </span>
      <input style="font-size:29px;font-weight:500;"  value ="100000" type="number" readonly name="id" placeholder="enter the amount">
      <INPUT style="font-size:29px;font-weight:500;margin-top:75px;margin-right:150px ; WIDTH:260px;" class="enterButton btn btn-success btn-lg"  readonly type="submit"  name="end" VALUE="Shutdown ATM">
      <INPUT style="font-size:29px;font-weight:500;margin-top:-80px;margin-right:1500px ; width:190px;" class="enterButton btn btn-success btn-lg"  readonly type="submit"  name="start" VALUE="Start ATM">

      <INPUT style="font-size:29px;font-weight:500;margin-top:100px;margin-right:830px" class="enterButton btn btn-success btn-lg"  readonly type="submit"  name="submit" VALUE="Enter"> 

      <br>
    </form>
   <div> <a href="admincontrol.php" style="font-size:29px;font-weight:500;margin-top:190px;margin-left:700px ;margin-right:148px; WIDTH:150px;" class="enterButton btn btn-success btn-lg"  readonly> Back</a></div>



</body>
</html>