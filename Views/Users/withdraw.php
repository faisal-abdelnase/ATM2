<?php
session_start();
if(isset($_POST['submit'])){
  if ($_POST['val']>0){
	$amountofwithdraW=$_POST['val'];
	$_SESSION['value'] = $amountofwithdraW;
    header('location:confirmWithdrawal.php');
  }
  
  else{
    echo '<center><div  style="width:40%; background:#e69d5e; font:800px" class="alert alert-danger" role="alert">
   <center> <h4>invalid amount</h4></center> </center>
  </div>';
 
}
}

?>
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
    .accountDisplay {
        text-align: center;
                border: 5px;

        position: absolute;
        left: 34%;
        height:80px;
        width:400px;
        margin: 10px;
        font-size: 30px;
        color:black;
    }

    .quickLinkLabel{
        font-size: 30px;
        position: absolute;
        top: 5%;
    }

    #leftLabel{
                left: 1%;

    }

    #rightLabel{
        right: 1%;
    }


    .quickBtn{
        position: absolute;
        border: 5px outset black;
        height:100px;
        width:150px;
        cursor:pointer;
        margin: 10px;
        font-size: 40px;
        color:#fff;
    }
    .quickBtn:hover{
        background-color: lightgrey;
        color:black;
    }
    #twenty{
        top:10%;
        left:0%;
    }

    #forty{
        top:30%;
        left:0%;
    }

    #sixty{
        top:50%;
        left:0%;
    }

    #eighty{
        top:70%;
        left:0%;
    }

    #onehunnit{
        top:10%;
        right:0%;
    }

    #twohunnit{
        top:30%;
        right:0%;
    }

    #threehunnit{
        top:50%;
        right:0%;
    }

    .backButton{
        position: absolute;
        right: 0;
        top: 70%;
        height:100px;
        width:150px;
        border: 5px outset red;
        cursor:pointer;
        float: right;
        font-size: 32px;
        margin:10px;
    }
    .backButton:hover{
        background-color: #4a0000;
        color:white;
    }

    .enterButton{
        position: absolute;
        right: 28%;
        top: 41%;
        height:80px;
        width:150px;
        border: 5px outset green;
        cursor:pointer;
        float: right;
        font-size: 32px;
        margin:10px;
    }
    .enterButton:hover{
        background-color: green;
        color:white;
    }


    .arrow{
        position: absolute;
        height:150px;
        width: 150px;
        left:45%;
    }

  /*  #up100 {
        top:10%;
    }*/

    #up100 {
        top:26%;
    }

    #down100 {
        top:50%;
    }

  /*  #down100 {
        top:66%;
    }*/

    #numba{
        position: absolute;
        top:44%;
        left: 43.5%;
        font-size:40px;
        width: 180px;
        text-align: center;
    }
    #up100{
             background: url("images/uparrow100copy.png");
             background-position: center;
             background-size: contain;
         }

    #up100:hover{
             background: url("images/uparrow100copyhover.png");
        background-position: center;
        background-size: contain;
         }

    #up100:active{
        background: url("images/uparrow100copy.png");
        background-position: center;
        background-size: contain;
    }
    #up20{
        background: url("images/uparrow20copy.png");
        background-position: center;
        background-size: contain;
    }

    #up20:hover{
        background: url("images/uparrow20copyhover.png");
        background-position: center;
        background-size: contain;
    }
    #up20:active{
        background: url("images/uparrow20copy.png");
        background-position: center;
        background-size: contain;
    }

    #down100{
        background: url("images/downarrow100copy.png");
        background-position: center;
        background-size: contain;
    }

    #down100:hover{
        background: url("images/downarrow100copyhover.png");
        background-position: center;
        background-size: contain;
    }

    #down100:active{
        background: url("images/downarrow100copy.png");
        background-position: center;
        background-size: contain;
    }

    #down20{
        background: url("images/downarrow20copy.png");
        background-position: center;
        background-size: contain;
    }
    #down20:hover{
        background: url("images/downarrow20copyhover.png");
        background-position: center;
        background-size: contain;
    }

    #down20:active{
        background: url("images/downarrow20copy.png");
        background-position: center;
        background-size: contain;
    }
</style>
<script>

</script>
<body style="height: 100vh">
<div class="container">
    <h3 style="text-align: center"> Enter the amount to withdraw from 1234567887654321:</h3>
    <p class="quickLinkLabel" id="leftLabel">Quick Links</p>

    <p class="quickLinkLabel" id="rightLabel">Quick Links</p>
<div class="container" >
<div class="row" id="title">
</div>
    <a class="quickBtn btn btn-primary btn-lg " name="20val" onclick="submitForm(600)" id="twenty" >600</a>
    <a class="quickBtn btn btn-primary btn-lg " name="40val" onclick="submitForm(700)" id="forty">700</a>
    <a class="quickBtn btn btn-primary btn-lg " name="60val" onclick="submitForm(800)" id="sixty" >800</a>
    <a class="quickBtn btn btn-primary btn-lg " name="80val" onclick="submitForm(900)" id="eighty" >900</a>

    <a class="quickBtn btn btn-primary btn-lg " name="100val" onclick="submitForm(100)" id="onehunnit">100</a>
    <a class="quickBtn btn btn-primary btn-lg " name="200val" onclick="submitForm(200)" id="twohunnit" >200</a>
    <a class="quickBtn btn btn-primary btn-lg " name="300val" onclick="submitForm(300)" id="threehunnit">300</a>
<br>
<button style="border: none;" class="arrow" id="up100" onclick="add100(this)" value="100"></button>
<button style="border: none;" class="arrow" id="down100" onclick="sub100(this)" value="100"></button>

<input class="backButton btn btn-danger btn-lg " type="button" value="Back" onclick="goBack()"/>


<form method="post">	
    <input type="text" name="val" id="numba" value="0" readonly placeholder="$000">
    <INPUT class="enterButton btn btn-success btn-lg"  readonly type="submit"  name="submit" VALUE="Enter">
</form>
</div>
    </div>
</body>
<script>

   
/*
    function add20(e){
        var val=parseInt(document.getElementById("numba").value);
        var btnVal = parseInt(document.getElementById("up20").value);
        var result=val+btnVal;
        document.getElementById("numba").value=result;
        }
    

    function sub20(e){
        var val=parseInt(document.getElementById("numba").value);
        var btnVal = parseInt(document.getElementById("down20").value);
        if(val>=20){
           var result=val-btnVal;
           document.getElementById("numba").value=result;
           
        }else
           document.getElementById("numba").value=0;
       
           
        
    }
     */

       function sub100(e){
        var val=parseInt(document.getElementById("numba").value);
        var btnVal = parseInt(document.getElementById("down100").value);
        if(val>=100){
           var result=val-btnVal;
           document.getElementById("numba").value=result;
           
        }else
           document.getElementById("numba").value=0;
    
        }
        function add100(e){
        var val=parseInt(document.getElementById("numba").value);
        var btnVal = parseInt(document.getElementById("up100").value);
        
           var result=val+btnVal;
           document.getElementById("numba").value=result;
        }

    function submitForm(value) {
        var result=value;
        document.getElementById("numba").value=result;
    }

    function goBack() {
        location.href = 'transactions.php' ;
    }
   
</script>
</html>

