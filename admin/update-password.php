<?php include('partials/menu.php'); ?>
<div class="main-content">
           <div class="wrapper">
               <h1>Change Password</h1>
        <br/><br/>
        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];

            }
        ?>

        <form action="" method="POST">
        <table class="tbl-30">
                   <tr>
                      <td>Current Password:</td>
                      <td>
                          <input type="password" name="Current_password" placeholder="current password">
                        </td>
                   </tr>
                   <tr>
                      <td>Username:</td>
                      <td><input type="password" name="New_password" placeholder="New password">
                   </tr>
                   <tr>
                       <td>Confirm password:</td>
                       <td><input type="password" name=" Confirm_password" placeholder="Confirm password">
                     
                  </tr>
                  <tr>
                       <td colspan="2">
                       <input type="hidden" name="id" value="<?php echo $id; ?>">
                       <input type="submit" name="submit" value="Change password"class="btn-secondary">
                    </td>
                  </tr>
                </table>


        </form>



   </div> 
</div>
<?php 
      if(isset($_POST['submit']))
      {
          $id=$_POST['id'];
          $Current_password=md5($_POST['Current_password']);
          $New_password=md5($_POST['New_password']);
          $Confirm_password=md5($_POST['Confirm_password']);

          $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$Current_password'";
          $res=mysqli_query($conn,$sql);
          if($res==true)
          {
              $count=mysqli_num_rows($res);
              if($count==1)
              {
               if($New_password==$Confirm_password){
                       $sql2="UPDATE tbl_admin SET 
                          password='$New_password'
                          WHERE id=$id 
                    ";
                    $res2=mysqli_query($conn,$sql2);
                    if($res2==true)
                    {
                        $_SESSION['changed-pwd']="<div class='success'>Changed sucessfully</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else{
                        $_SESSION['changed-pwd']="<div class='error'>Failed to change</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
               }
               else{
                $_SESSION['Not-matched']="<div class='error'>Password not matched</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
               }
          }
       
          else{
           $_SESSION['user-not-found']="<div class='error'>user not found</div>";
           header('location:'.SITEURL.'admin/manage-admin.php');
          }
       }
       

    }
?>




<?php include('partials/footer.php'); ?>