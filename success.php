<?php 
   if(!empty($_GET['tid'] && !empty($_GET['product']))){
       $_GET=filter_var_array($_GET,FILTER_SANITIZE_STRING);


       $tid=$_GET['tid'];
       $product=$_GET['product'];
   }else{
       header('Location : index.php');
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Thank You</title>
</head>
<body>
<div class="container mt-4">
<h2>Successfull <?php echo $product;  ?></h2> 
<hr> 
<p>Your transaction ID is <?php echo $tid; ?></p>
<p>Check your email for more info</p>
<p><a href="index.php" class="btn btn-light mt-2">Go Back</a></p>
</div>
    
</body>
</html>