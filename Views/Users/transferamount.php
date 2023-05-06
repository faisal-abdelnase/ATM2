<?php
session_start();
if(isset($_POST['submit'])){
  if ($_POST['recieveramount']!=0){
    $recieveramount=$_POST['recieveramount'];
	$_SESSION['recieveramount'] = $recieveramount;

    header('location:transferConfirmation.php');
  }
  else{
    echo '<center><div  style="width:40%; background:#f5923c; font:white ; font-size:90px" class="alert alert-danger" role="alert">
   <center> <h4 style="font:bold">Invalid Amount</h4></center> </center>
  </div>';
  header("refresh:3;");
 
}
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<style>
.PINtext {
	font-size:40px;
	width: 500px;
	text-align: center;
}
.calcBtn {
	font-size: 30px;
	width: 100px;
  height: 100px;
  margin: 10px;
}
</style>

<body>

<div class="row">
	<h2 style="text-align: center">Enter the Amount that you send below:</h2>
</div>


<form method="post">
  <?php
        if(isset($error)){
           foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
           };
        };
        ?>


<p align="center"><input  name='recieveramount' id="tbInput" class="PINtext" type="password" placeholder="Enter valid Amount" maxlength="4"/></p>
<div id="VirtualKey" align="center">
    <input class="calcBtn" id="btn1" type="button" onclick="input(this);" value="1" />
    <input class="calcBtn" id="btn2" type="button" onclick="input(this);" value="2" />
    <input class="calcBtn" id="btn3" type="button" onclick="input(this);" 
    value="3"/>
    <br />
    <input class="calcBtn" id="btn4" type="button" onclick="input(this);" 
    value="4"/>
    <input class="calcBtn" id="btn5" type="button" onclick="input(this);" 
    value="5"/>
    <input class="calcBtn" id="btn6" type="button" onclick="input(this);" 
    value="6"/>
    <br />
    <input class="calcBtn" id="btn7" type="button" onclick="input(this);" 
    value="7"/>
    <input class="calcBtn" id="btn8" type="button" onclick="input(this);" 
    value="8"/>
    <input class="calcBtn" id="btn9" type="button" onclick="input(this);" 
    value="9"/>
    <br />
    
    <input class="calcBtn" id="btn0" type="button" onclick="input(this)" 
    value="0"/>
    <input   class="calcBtn" id="btn0" type="button" onclick="input(this)" 
    value="."/>
    <input class="calcBtn" id="btnDel" type="button" style="color:red" value="Delete" onclick="del();" />
    <br>
    <input style="width: 350px;color:red" class="calcBtn" type="submit" name="submit" value="Enter" class="form-btn">
</div>
</form>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4"></div>
	<div class="col-sm-4"><a href="transfer.php"  class="btn btn-danger btn-lg returnCardButton">Back</a></div>
</div>
<script>
function input(e) {
    var tbInput = document.getElementById("tbInput");
    if (tbInput.value.length<4){
    tbInput.value=tbInput.value + e.value;
	}
}

function del() {
	var tbInput = document.getElementById("tbInput");
	tbInput.value = tbInput.value.substr(0, tbInput.value.length-1);
}

</script>
</body>
</html>
