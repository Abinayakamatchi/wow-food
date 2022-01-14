<?php include('../config/constants.php');?>
<html>
    <head>
        <title>Login-Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
<body>
      <div class="login"> 
          <br>
          <h1 class="text-center">Login</h1>
          <br>
          <?php
              if(isset($_SESSION['login']))
              {
                  echo $_SESSION['login'];
                  unset($_SESSION['login']);
              }
              if(isset($_SESSION['no-login-message']))
              {
                  echo $_SESSION['no-login-message'];
                  unset($_SESSION['no-login-message']);
              }
           ?>
        <br><br> 
        <!--login form-->
        <form action="" method="POST" class="text-center">
        Username:<br>
        <input type="text" name="Username" placeholder="enter username"><br><br>
        Password:<br>
        <input type="text" name="Password" placeholder="enter password"><br><br>
        <input type="submit" name="submit" value="Login" class="btn-primary"> 
        <br><br>
        </form>
          <p class="text-center">Created By-<a href="www.abinaya.com">Abinaya</a></p><br>
      </div>  
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
   
   $Username=$_POST['Username'];
   $Password=md5($_POST['Password']);

   $sql="SELECT * FROM tbl_admin WHERE Username='$Username' AND Password='$Password'";
   $res =mysqli_query($conn,$sql);

   $count=mysqli_num_rows($res);
   if($count==1){
         $_SESSION['login']="<div class='success'>login successful</div>";
         $_SESSION['user']=$Username;
         header('location:'.SITEURL.'admin/');
   }
   else{
    $_SESSION['login']="<div class='error text-center'>username or password is wrong</div>";
    header('location:'.SITEURL.'admin/login.php');
   }

}






?>