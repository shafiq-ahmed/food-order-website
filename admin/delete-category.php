<?php
    include "partials/menu.php";
    
   

    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        echo $id=$_GET['id'];
        echo $imageName=$_GET['image_name'];
        if(empty($id))
        {
            header('location:'.SITEURL.'admin/manage-category.php');
        }
    }else
    {
        header('location:'.SITEURL.'admin/manage-category.php');
    }
    include "partials/footer.php";
?>