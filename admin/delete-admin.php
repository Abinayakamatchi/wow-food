<?php 
include('../config/constants.php');
 //get the id of admin to be deleted 
$id=$_GET['id'];
 //create sql query to delete again 
 $sql="DELETE FROM tbl_admin WHERE id=$id";
 //redirect to manage admin page with message
 $res=mysqli_query($conn,$sql);
if($res==true)
{
   $_SESSION['delete']= "<div class='success'>Admin Deleted Successful.</div>";
   header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
   $_SESSION['delete']= "<div class='error'>Failed to Delete Admin.Try Again Later.</div>";
   header('location:'.SITEURL.'admin/manage-admin.php');
}

?>