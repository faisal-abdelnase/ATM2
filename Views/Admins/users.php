<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styling.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    
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

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   
}

*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}



.delete-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   margin-right:40px;
   color:var(--white);
   border-radius: 5px;
   
   background-color: var(--red);
   text-decoration: none;
   font-weight:500;
   font-size:17px;

}














.container .shopping-cart{
   padding:20px 0;
   
}

.container .shopping-cart table{
   width: 1100px;
   height:350px;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
}

.container .shopping-cart table thead{
   background-color:#0a4568 ;
   
}

.container .shopping-cart table thead th{
   padding: 23px;
   color:var(--white);
   text-transform: capitalize;
   font-size: 20px;
   
   
}

.container .shopping-cart table .table-bottom{
   background-color: var(--light-bg);
   
}

.container .shopping-cart table tr td{
   padding-left:32px;
   font-size: 19px;
   color:var(--black);
}

.container .shopping-cart table tr td:nth-child(1){
   padding-left: 50px;
   
}


body {
    background:#ddd2d2;
    
    
 }   







</style>    
    

    <title>Users </title>
</head>
<body>
<div  class="container">  
    
    <div class="shopping-cart">
    
    <h1 style="text-align:center;font-size: 60px">All Users That Use ATM :</h1>
    <br>
    <br>

    
       <table >
          <thead>
          <th>PIN Number</th>
             <th>User Name</th>
             <th>  </th>
             <th>User State</th>
             <th></th>
             <th>Delete User</th>
            
            
          </thead>
          <tbody>
             
          
          
             <tr>
                <td>1234</td>
                <td>  Amr Gamal</td>
                <td> </td>
                <td>
                  Valid
                </td>
                <td> </td>
                <td><div href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" >Delete</div></td>

             </tr>
          
             <tr>
                <td>6578</td>
                <td> Fasial</td>
                <td> </td>
                <td>
                 valid
                </td>
                <td> </td>
                <td><div href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" >Delete</div></td>
                
             </tr>

             <tr>
                <td>1689</td>
                <td>   Abdhazim</td>
                <td> </td>
                <td>
                Invalid                </td>
                <td> </td>
                <td><div href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" >Delete</div></td>
                
             </tr>

             <tr>
                <td >9356</td>
                <td> Mohammed</td>
                <td> </td>
                <td>
                  Invalid
                </td>
                <td> </td>
                <td><div href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" >Delete</div></td>
                
             </tr>
             <tr>
                <td>0127</td>
                <td> Ahmed Ali</td>
                <td> </td>
                <td>
                   Invalid
                </td>
                <td> </td>
                <td><div href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" >Delete</div></td>
                
             </tr>

       </tbody>

       </table>
    
    
    
    </div>
          
    </div>
    
    <div class="col-md-8"></div>
    <div class="col-md-8"></div>
    <div class="col-md-8"><a href="admincontrol.php" style="margin-top:120px ;margin-right:225px" class="btn btn-danger btn-lg returnCardButton">Back</a></div>
    <div class="text-center">
      </div>


</body>
</html>