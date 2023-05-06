<?php

@include 'config.php';

if(isset($_POST['submit'])){
   if(!empty($_POST['email']))
   {
    $success[]='Admin Added successfully';
    header("refresh:5;");
     
   }else{

    $error[] = 'error';
    header("refresh:5;");
   }

   
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <title>Add Admin</title>

   <!-- custom css file link  
   <link rel="stylesheet" href="css/style.css"> -->
   <style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}
  

h3{

   color:#fff
}



.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   margin-left:300px;
   margin-top:-130px;
}

.form-container form{
   height: 540px;
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.2);
   background:white;    /* form backgroung*/
   text-align: center;
  
   width: 650px;
   margin: 10px;
}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   color:#f3f3f3;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: #f38619;
   color:#fafafa;
   text-transform: capitalize;
   font-size: 22px;
   font-weight:bold;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #eee;
   color:#f38619;
   transform: 4s;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:crimson;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
   </style>

</head>
<body>
<h1 align="center">WELCOME BankClerk</h1>
<div class="form-container">

   <form action="" method="post">
      <h3 style="color:#f38619" >Add Admin</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<div  style="font-size:20px" class="alert alert-danger" role="alert">'.$error.'</div>';
           
         };
         echo '<style>.form-container form{height: 680px;}</style>';
      };
      if(isset($success)){
        foreach($success as $success){
           echo '<div style="font-size:20px" class="alert alert-success" role="alert">'.$success.'</div>';
          
        };
        echo '<style>.form-container form{height: 680px;}</style>';
     };
      ?>
      <input  value ="" type="password" name="id" placeholder="enter the id">
      <input      type="text" name="name"  placeholder="enter the PIN number">

      <input  name="name"  placeholder="enter the name">
      <input value='' name="email"  placeholder="enter the email">
      <input  name="cpassword" placeholder="enter the password">
      <br>
      <br>
      <input type="submit" name="submit" value="Add Admin" class="form-btn">
      
   </form>
  
  <br>
  <br>
  
   <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="bankclerkcontrol.php" style="margin-top:800px; background: #f38619;" class="btn btn-danger btn-lg returnCardButton">Back</a></div>
    </div>
   

</div>

</body>
</html>