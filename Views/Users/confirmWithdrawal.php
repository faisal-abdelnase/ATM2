<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <script src="https://use.fontawesome.com/70aff799b3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/updateBalance.js"></script>
</head>

<style>

#result{
  font-size: 60px;
}
.Button{
    position: absolute;
    
  background-color: white;
  cursor:pointer;
  font-size: 32px;
  margin:30px;
  height:200px;
  width:200px;
}

.Button:hover{
    color:white;
}

#yes{
      border: 5px outset green;
      top: 40%;
    left:30%;

}
#yes:hover{
    background-color: green;

}

#no{
      border: 5px outset red;
      top: 40%;
    right:30%;
}

#no:hover{
    background-color: red;
}
</style>

<body>
<div class="container">

<h1 style="text-align:center;font-size: 50px">Are you sure you want to withdraw the amount specified?<br> <br>
<?php
session_start();
  echo '$'.$_SESSION['value']; ?>
</h1> 
<br>
<br>
<p id="result" align="center"></p>


<div class="row">
    <div class="col-sm-6"><a  href="moneyPrinted.php" style="float: right" class="btn btn-primary btn-lg btn-success confirmationBtn enterButton">YES</a></div>
    <div class="col-sm-6"><a  href="withdraw.php" class="btn btn-primary btn-lg btn-danger confirmationBtn backButton">NO</a></div>
  </div>







</SCRIPT>
</div>
</body>
</html>