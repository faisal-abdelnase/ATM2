<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['Password'])){

        if(!isset($_SESSION["userpin"])){

            session_start();
        }
        if($_SESSION["userRole"] == "user" && $_SESSION["userpassword"] == $_POST['Password']){

                header('location:../Users/selectAcct.php');

        }

        if(!isset($_SESSION["userpin"])){

            session_start();
        }
        if($_SESSION["userRole"] == "admin" && $_SESSION["userpassword"] == $_POST['Password']){
        
            header('location:../Admins/admincontrol.php');
        
        }


        if(!isset($_SESSION["userpin"])){

            session_start();
        }
        if($_SESSION["userRole"] == "bank cleark" && $_SESSION["userpassword"] == $_POST['Password']){
        
            header('location:../BankClerks/bankclerkcontrol.php');
        
        }
        

    
    else{

        if(!isset($_SESSION["userpin"])){

        session_start();
        }

        $_SESSION["errMsg"] = "You have entered wrong Password";

        echo '<center><div  style="width:40%; background:#e69d5e; " class="alert alert-danger" role="alert">
        <center> <h4 style="font-weight:bold">'.$errMsg = $_SESSION["errMsg"].'</h4></center> </center>   </div>';
        header("refresh:3;");


    }

    }
    else{

    echo '<center><div  style="width:40%; background:#e69d5e; " class="alert alert-danger" role="alert">
    <center> <h4 style="font-weight:bold">'."Please Enter the Password".'</h4></center> </center>   </div>';
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
    <script src="js/updateBalance.js"></script>
</head>

<style>

.PINtext {
	font-size:40px;
	width: 300px;
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
<div class="container">
<h1 style="text-align:center;font-size: 100px">Welcome <span style="color:#be4e0d"><?php session_start();   echo $_SESSION["userName"];?></span></h1>
<div class="row">
    <h2 style="text-align: center">Please enter your Password: </h2>
</div>

<form method="post">

<p align="center"><input  style="width:470px ;font-size:45px"  name='Password' id="tbInput" class="PINtext" type="password" placeholder="Enter Password" maxlength="4"/></p>
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
    value="#"/>
    <input class="calcBtn" id="btnDel" type="button" style="color:red" value="Delete" onclick="del();" />
    <br>
    <input style="width: 350px;color:red" class="calcBtn" type="submit" name="submit" value="Enter" class="form-btn">
</div>
</form>
<span id="PIN"></span>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="index.php" style = "" class="btn btn-danger btn-lg returnCardButton">Return Card</a></div>
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
</div>
</body>
</html>