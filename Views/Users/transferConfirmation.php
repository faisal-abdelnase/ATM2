<!DOCTYPE html>
<html>
<style>
.okBtn {
	font-size: 40px;
	width: 70px;
}
</style>

<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/updateBalance.js"></script>
</head>

<body>
<div class="container-fluid"> <br> <br>
  <h1 class="infoText" align="center">Are you sure you want to Transfer the amount specified?</h1>
  <br>
  <h1 align="center"><?php
session_start();
 echo  '$'.$_SESSION['recieveramount'];?></h1>
<br>
<br>
<br> 
  <div class="row">
    <div class="col-sm-6"><a href="transferProcessed.php" style="float: right" class="btn btn-primary btn-lg btn-success confirmationBtn enterButton">YES</a></div>
    <div class="col-sm-6"><a href="transfer.php" class="btn btn-primary btn-lg btn-danger confirmationBtn backButton">NO</a></div>
  </div>
</div>
</body>


</html>
