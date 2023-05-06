




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

<div class="container-fluid">
<br>
<br>
  <h1 class="infoText" align="center">Are you sure you want to deposit the amount specified?<br> <br><?php
session_start();
 echo  '$'.$_SESSION['amonut'];

?></h1>
  <br>
  <br>
  <div id="div1">

    <h2 class="infoText" align="center" id='result'></h2>

  </div>



  <div class="row">

    <div class="col-sm-6"><a href="depositComplete.php" style="float: right" class="btn btn-primary btn-lg btn-success confirmationBtn enterButton">YES</a></div>

    <div class="col-sm-6"><a href="deposit.php"  class="btn btn-primary btn-lg btn-danger confirmationBtn backButton">NO</a></div>

  </div>

</div>

</body>





</html>

