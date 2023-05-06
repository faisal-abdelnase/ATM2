<?php

@include 'config.php';

if(isset($_POST['submit'])){
    if(!empty($_POST['email']))
   {
    $success[]='report sened successfully';
    header("refresh:5;");
     
   }else{

    $error[] = 'error';
    header("refresh:5;");
   }


} 

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
   margin-top:-280px;
   
}

.form-container form{
   height: 600px;
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.2);
   background:white;    /* form backgroung*/
   text-align: center;
   width: 750px;
   margin-top: 170px;
   
   margin-left: 60px;
}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   color:#f3f3f3;
}

.form-container form input,
.form-container form select{
   width: 60%;
   padding:10px 15px;
   font-size: 17px;
   margin-right:40px;
   margin-top:22px;
   
   background: #eee;
   border-radius: 5px;
}
span{
margin-left:0px;
margin-right:10px;

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
body{
    background:#f1decd;


}
   </style>

</head>
<body>
<h1 style="text-align:center;font-size: 50px;">Daily Report for ATM </h1>
<h1 style="text-align:center;font-size: 50px;">Date : 2/4/2023 </h1>

<br>
<br>
<h4 style="text-align:left;font-size: 50px;margin-left:50px">Number of Withdraws on This Day :894 </h4>
<br>
<br>
<h4 style="text-align:left;font-size: 50px;margin-left:50px">Number of Deposits on This Day :136 </h4>
<br>
<br>
<h4 style="text-align:left;font-size: 50px;margin-left:50px">Number of Transfers on This Day :87 </h4>


   
<div class="form-container">






   <form action="" method="post">
      <h3 style="color:#f38619" > ATM Report</h3>
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
      <span style="font-size:20px;font-weight:500; margin-right:75px" > The ATM Name : </span>
      <input  value ="" type="text" name="id" placeholder="enter the id">
      <br>
      <span style="font-size:20px;font-weight:500 ;margin-right:70px" > The Date Today : </span>

      <input  type="date" name="cpassword" placeholder="enter the password">
      <br>

      <span style="font-size:20px;font-weight:500; " >Number of Withdraws :</span>
      <input      type="number" name="name"  placeholder="enter the PIN number">
      <br>
      <span style="font-size:20px;font-weight:500 ;margin-right:20px" >Number of  Transfers : </span>
      <input type="number" name="name"  placeholder="enter the name">
      <br>
      <span style="font-size:20px;font-weight:500 ;margin-right:30px" >Number of  Deposits : </span>
      <input value='' type="number" name="email"  placeholder="enter the email">
      <br>
      
      <br>
      <br>
      <br>
      
      <input  style="MARGIN-LEFT:85px; "type="submit" name="submit" value="Send Report" class="form-btn">
      
   </form>
<br>
<br>
   <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="admincontrol.php" style="margin-top:1000px; background: #f38619;" class="btn btn-danger btn-lg returnCardButton">Back</a></div>
    </div>
  
   

</div>

</body>
</html>