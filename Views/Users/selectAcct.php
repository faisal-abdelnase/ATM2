

<?php
require_once '../../Controllers/AccountController.php';
$account = new AccountController;
$result = $account->selectAllAccounts();

if(isset($_POST["selectAccount"])){
   $id=$_POST["accId"];
   $type=$_POST["accType"];
   $_SESSION["accId"]=$id;
   $_SESSION["accType"]=$type;
   header('location:transactions.php');
   
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
</head>

<body>

<div class="container">

    <div class="row">
        <h1 style="text-align: center">Select Account</h1>
    </div>

<?php
foreach($result as $res){
?>

<div class="row">
    <form  method="POST">

        <input type="hidden" name="accId" value="<?php echo $res["accountId"];?>">
        <input type="hidden" name="accType" value="<?php echo $res["accountType"];?>">

        <div class="col-md-2"></div>
        <div class="col-md-8"> <button type="submit" name="selectAccount" class="btn btn-primary btn-lg accountButton">
        <?php echo $res["accountType"] .' : '. $res["accountId"]; ?> 
        </button> </div>
        <div class="col-md-2"></div>

    </form>
</div>  
    
<?php
}
?>

    

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><a href="../Auth/index.php"  class="btn btn-danger btn-lg returnCardButton">Back</a></div>
    </div>
</div>




</body>
</html>
