<?php include('partials/menu.php'); ?>
<!--main content starts-->
<div class="main-content">
           <div class="wrapper">
               <h1>Add Admin</h1>

               <br/><br>
               <?php 
                   if(isset($_SESSION['add']))
                   {
                       echo $_SESSION['add'];
                       unset($_SESSION['add']);
                   }
                ?>
                
               <form action="" method="POST">
               <table class="tbl-30">
                   <tr>
                      <td>Full Name:</td>
                      <td>
                          <input type="text" name="full_name" placeholder="Enter Your Name">
                        </td>
                   </tr>
                   <tr>
                      <td>Username:</td>
                      <td><input type="text" name="Username" placeholder="Your Username"></td>
                   </tr>
                   <tr>
                      <td>Password:</td>
                      <td><input type="text" name="Password" placeholder="Your Password"></td>
                   </tr>
                   <tr>
                       <td colspan="2">
                       <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                  </tr>
                </table>
           </div>
</div>
<?php include('partials/footer.php')?>
<?php
//process the value frm form and save
//chk if the button is clicked
if(isset($_POST['submit'])){
 $full_name=$_POST['full_name'];
 $Username=$_POST['Username'];
$Password=md5($_POST['Password']);//password encription
//sql query to save in database
$sql="INSERT INTO tbl_admin SET 
      full_name='$full_name',
      Username='$Username',
      Password='$Password'
     ";
//execute query and save data 
 
$res=mysqli_query($conn,$sql) or die(mysqli_error());

//to chck if data is inserted
    if($res==TRUE)
   {
      $_SESSION['add']="Admin Added successfully";
    //redirect 
     header("location:".SITEURL.'admin/manage-admin.php');
}
    else
    {
        $_SESSION['add']="Failed to add admin";
    //redirect 
        header("location:".SITEURL.'admin/add-admin.php');

    }

}
?>