<?php 
      include "../config/constants.php";
      echo "Welcome to the destroyer of dreams";
      echo $id=$_GET['id'];

      $sql="DELETE FROM admin WHERE id=$id";

      $res=mysqli_query($con,$sql);

      if($res==true)
      {
        $_SESSION['operationMsg']="Admin deleted successfully";
        
      }else
      {
        $_SESSION['operationMsg']=mysqli_error($con);
      }
      header('location:'.SITEURL.'admin/manage-admin.php');
?>