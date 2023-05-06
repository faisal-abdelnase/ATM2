
<?php

require_once '../../Models/person.php';
require_once '../../Controllers/ChangePassController.php';



session_start();

if(isset($_POST['submit'])){
  if(!empty($_POST['confirmnewPassword'])){
    if($_POST['confirmnewPassword'] == $_SESSION['newPassword']){
      $person = new Person;
      $person->setpassword($_POST['confirmnewPassword']);

      $change = new ChangePINController;

      if($change->changePassword($person)){
        header('location:changePassComplete.php');
        $_SESSION["userpassword"] = $_POST['confirmnewPassword'];
        $_SESSION["userSsn"] = $_SESSION["userSsn"];

      }

      else{

        echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
            <center> <h4>The Password you entered is not valid!</h4></center> </center>
            </div>';
            header("refresh:2;");

      }

    }


    else{

        echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
            <center> <h4>The Password you entered does not match!</h4></center> </center>
            </div>';
            header("refresh:2;");

      }
    
  }
  else{

    echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
        <center> <h4>Enter New Password</h4></center> </center>
        </div>';
        header("refresh:2;");

  }
}











// session_start();
// if(isset($_POST['submit'])){
//   if ($_POST['confirmnewPIN']== $_SESSION['newPIN'] ){

//     header('location:changePINComplete.php');
//   }
//   else{
//     echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
//     <center> <h4>The PIN you entered does not match!</h4></center> </center>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/updateBalance.js"></script>
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
  <h2 style="text-align: center">Please confirm your New Password: </h2>
</div>

<form method="post">
<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
<p align="center"><input  id="tbInput" name="confirmnewPassword" class="PINtext" type="text" placeholder="Confirm Password" maxlength="4"/></p>

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
    <input class="calcBtn" id="btnEnt" type="submit" name="submit" style="color:green" value="Enter"/>
    <input class="calcBtn" id="btn0" type="button" onclick="input(this)" value="0"/>
    <input class="calcBtn" id="btnDel" type="button" style="color:red" value="Delete" onclick="del();" />
</div>
</form>
<a href="home.html" style="" class="btn btn-danger btn-lg returnCardButton">Back</a>


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
</div>
</body>
</html>
