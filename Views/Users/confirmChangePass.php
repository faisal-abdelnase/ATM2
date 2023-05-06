<?php


session_start();
if(isset($_POST['submit'])){
  if(!empty($_POST['newPassword'])){
    if($_POST['newPassword'] != $_SESSION['oldpassword']){
      $_SESSION['newPassword'] = $_POST['newPassword'];

      header('location:confirmChangePass2.php');

    }
    else{
      echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
    <center> <h4>This the old one , please enter new Password number</h4></center> </center>
    </div>';

    header("refresh:2;");
    }

  }
  else{

    echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
    <center> <h4>"Please Enter the New Password"</h4></center> </center>
  </div>';
    header("refresh:2;");

  }
}










// session_start();
// if(isset($_POST['submit'])){
//   if ($_POST['newPIN']!=123){
//     $newPIN=$_POST['newPIN'];
//     $_SESSION['newPIN'] = $newPIN;
//     header('location:confirmChangePIN2.php');
//   }
//   else{
//     echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
//     <center> <h4>This the old one , please enter new PIN number</h4></center> </center>
//     </div>';
//     header("refresh:2;");
 
//   }
// }

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
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
.backButton{
  position: absolute;
  right: 17%;
  top: 74%;
  height:80px;
  width:150px;
  border: 5px outset red;
  cursor:pointer;
  float: right;
  font-size: 32px;
  margin:10px;
}
.backButton:hover{
    background-color: red;
    color:white;
}
</style>

<body>
<div class="container">



  <div class="row">
    <h2 style="text-align: center">Please enter your New Password: </h2>
  </div>
  <form method="post">
<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <p align="center"><input  id="newPIN" name="newPassword" class="PINtext" type="text" placeholder="New Password" maxlength="4"/></p>

  <div id="keyboard" align="center">
      <input class="calcBtn" id="btn1" type="button" onclick="input(this);" value="1" />
      <input class="calcBtn" id="btn2" type="button" onclick="input(this);" value="2" />
      <input class="calcBtn" id="btn3" type="button" onclick="input(this);" value="3"/>
      <br />
      <input class="calcBtn" id="btn4" type="button" onclick="input(this);" value="4"/>
      <input class="calcBtn" id="btn5" type="button" onclick="input(this);" value="5"/>
      <input class="calcBtn" id="btn6" type="button" onclick="input(this);" value="6"/>
      <br />
      <input class="calcBtn" id="btn7" type="button" onclick="input(this);" value="7"/>
      <input class="calcBtn" id="btn8" type="button" onclick="input(this);" value="8"/>
      <input class="calcBtn" id="btn9" type="button" onclick="input(this);" value="9"/>
      <br />
      <input class="calcBtn" id="btnEnt" type="submit" name="submit"  style="color:green" value="Enter"/>
      <input class="calcBtn" id="btn0" type="button" onclick="input(this)" value="0"/>
      <input class="calcBtn" id="btnDel" type="button" style="color:red" value="Delete" onclick="del();" />
  </div>
    </form>


<a href="transactions.php"  class="btn btn-danger btn-lg returnCardButton">Back</a>


<script>
  function input(e) {
    var tbInput = document.getElementById("newPIN");
    if (tbInput.value.length<4){
    tbInput.value=tbInput.value + e.value;
	}
}

function del() {
	var newPIN = document.getElementById("newPIN");
	newPIN.value = newPIN.value.substr(0, newPIN.value.length-1);
}
</script>
</div>
</body>
</html>
