







<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>

<h1 style="text-align:center;font-size: 50px">

<?php
session_start();
echo $_SESSION["accType"].'  :  '.$_SESSION["accId"];
?></h1>

<div class="container">

   <div class="row">
       <div id="title"></div>
</div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="info"><a href="accountInfo.php"  class="btn btn-primary btn-lg accountButton">Account Information</a></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="linkWithdraw"><a href="withdraw.php"  class="btn btn-primary btn-lg accountButton">Withdraw Funds</a></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="deposit"><a href="deposit.php"   class="btn btn-primary btn-lg accountButton">Deposit Funds</a></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="transfer"><a href="transfer.php"   class="btn btn-primary btn-lg accountButton">Transfer</a></div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="changepin "><a href="changePass.php"   class="btn btn-primary btn-lg accountButton">Change Passwoed</a></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="selectAcct.php" style="margin-right: 0px" class="btn btn-danger btn-lg returnCardButton">Select another Account </a></div>
    </div>
</div>




</body>
</html>
