<!DOCTYPE html>
<html>
<head>
  
  <script src="https://use.fontawesome.com/70aff799b3.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
</head>

<style>
h1{
  text-align: center;
  position: absolute;
  top:10%;
  left: 29%;
}

img{
  position: absolute;
  top:20%;
  left: 37%;
  height: 400px;
  width: 400px;
}

.okButton{
  position: absolute;
  right: 10%;
  top: 80%;
  height:100px;
  width:150px;
  border: 5px outset green;
  cursor:pointer;
  float: right;
  font-size: 32px;
  margin:10px;
}
.okButton:hover{
    background-color: green;
    color:white;
}

</style>

<body style="height: 100vh">
<div class="container">
<h2 align="center">Your PIN has been changed successfully.</h2>
<img src="images/checkmark.png">
<input class="okButton btn btn-success btn-lg" type="button" value="OK" onclick="location.href='transactions.php';"/>
</div>
</body>
</html>
