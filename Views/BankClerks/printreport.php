<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
    --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 8px 10px rgba(11,11,11,.2);
   --border:2px solid var(--#f18f38);
}



.delete-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   margin-right:40px;
   color:var(--white);
   border-radius: 5px;
   
   background-color: #aad6fc;
   text-decoration: none;
   font-weight:500;
   font-size:17px;

}



td, th {
    border: 1px solid #fff;
    text-align: left;
    padding: 8px;
}table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:700px;
    font-size:60px;
}


tr:nth-child(even) {
    background-color: #f59b4d;
    color:white;
}

#p1{
 text-align: center;
}









 

.container .shopping-cart{
   padding:20px 0;
   
}

.container .shopping-cart table{
   margin-left:230px;
  color:white;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color:#e4a56f;
}

.container .shopping-cart table thead{
   background-color: #f59b4d;
   
}

.container .shopping-cart table thead th{
   padding: 23px;
   color:var(--white);
   text-transform: capitalize;
   font-size:60px;
   color:white;
   
   
}

.container .shopping-cart table .table-bottom{
   background-color: var(--light-bg);
   
}

.container .shopping-cart table tr td{
   padding:30px;
   padding-left:20px;
   font-size:28px;
   color:white;
}

.container .shopping-cart table tr td:nth-child(1){
    padding-left:50px;
    color:white;
   
}
.container .shopping-cart table tr td:nth-child(2){
    color:white;
   
}






body {
    background:#ddd2d2;
    
    
 }   

 





</style>    
    

    <title>Report Details </title>
</head>
<body>
<div  class="container">  
    
    <div  class="shopping-cart">
    
    <h1 style="text-align:center;font-size: 60px"> Report Details</h1>
    <br>
    <br>

    
       <table  >
         
          <tbody>
             
          
          
             <tr>
                <td>Report Number :</td>
                <td> 44</td>
              
             </tr>
             <tr>
                <td>Admin ID :</td>
                <td> 22</td>
              
             </tr>
             <tr>
                <td>Date of Report :</td>
                <td> 2/4/2023</td>
              
             </tr>
             <tr>
                <td>Number of Withdraw :</td>
                <td> 22</td>
              
             </tr>
             <tr>
                <td>Number of Deposit :</td>
                <td> 22</td>
              
             </tr>
             <tr>
                <td>Number of Transfer :</td>
                <td> 22</td>
              
             </tr>
          
         <!--    <tr>
                <td>2</td>
                <td> 333</td>
                <td>
                  3/4/2032
                </td>
            
                <td><a style="text-decoration:none"  href="printreport.php" class="delete-btn" >Open </a></td>

             </tr>

             <tr>
                <td>3</td>
                <td> 444</td>
                <td>
                  3/4/2032
                </td>
            
                <td><a style="text-decoration:none"  href="printreport.php" class="delete-btn" >Open </a></td>

             </tr>

             <tr>
                <td>4</td>
                <td> 222</td>
                <td>
                  3/4/2032
                </td>
            
                <td><a style="text-decoration:none"  href="printreport.php" class="delete-btn" >Open </a></td>

             </tr>
             <tr>
                <td>5</td>
                <td> 444</td>
                <td>
                  3/4/2032
                </td>
                <td><a style="text-decoration:none"  href="printreport.php" class="delete-btn" >Open </a></td>

             </tr>-->
       </tbody>

       </table>
    
    
    
    </div>
          
    </div>
    
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"><a href="bankclerkcontrol.php" style="margin-top:120px ;margin-right:130px ;background-color:#f18f38" class="btn btn-danger btn-lg returnCardButton">Back</a></div>
    <div class="text-center">
    <button style="background-color:#f18f38 ; color:white ;margin-top:0px" onclick="window.print();" class="btn btn-safe btn-lg " id="print-btn">Print</button>

      </div>

      


</body>
</html>