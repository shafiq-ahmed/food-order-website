<?php 
      include "../config/constants.php";
      include "partials/access.php";
      echo "Welcome to the destroyer of dreams";
      echo $id=$_GET['id'];
      
      $sql="DELETE FROM admin WHERE id=$id";

      $res=mysqli_query($con,$sql);
      //even if no rows are effected the result will be true 
      //this will only be false when unable to perform a query on db
      if($res==true)
      {
        $_SESSION['operationMsg']="Admin deleted successfully";
        
      }else
      {
        $_SESSION['operationMsg']=mysqli_error($con);
      }
      header('location:'.SITEURL.'admin/manage-admin.php');
?>