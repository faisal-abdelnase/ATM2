<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
</head>

<style>
img {
  position: relative;
  top: 34%;
  left: 37%;
  height: 400px;
  width: 400px;
  margin-top:75px;
}
.center{
    text-align:center;
}
.center div {
    display:inline-block;
    margin-left:50px;
    margin-right:50px;
    margin-top:75px;
}
</style>

<body>
<h1 align="center">You send : <?php
session_start();
 echo  '$'.$_SESSION['recieveramount'];?>
 to  Account which has This PIN :
<?php
echo  $_SESSION['recieverpin'];?>
</h1>
<h2 align="center" style="FONT-SIZE:50PX">Money has been transferred.</h2>

  <div class="row">
    <img style="margin-left:80px"  src="images/wings.png">
  </div>

  <div class="center">
      <div><a href="transactions.php" style="" class="btn btn-primary btn-lg">Perform Another Transaction</a></div>
      <div><a href="index.php" style="" class="btn btn-danger btn-lg">Return Card</a></div>
  </div>

</body>
</html>
