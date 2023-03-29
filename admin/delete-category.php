<?php
    include "partials/menu.php";
    
   
    //this is to ensure that clients are coming by following the link structure we set for the operation
    //in the main page when delete button is clicked id and image_name are passed by the url, we are checking that structure
    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        echo $id=$_GET['id'];
        echo $imageName=$_GET['image_name'];

        //even though the id is set it may be empty
        //image_name may stay empty if the client does not opt for image that is why only id is being checked
        if(empty($id))
        {
            header('location:'.SITEURL.'admin/manage-category.php');
            exit();
        }

        
        //delete row from db
        $sql="DELETE FROM category WHERE id='$id'";
        
        $res=mysqli_query($con,$sql);

        if(mysqli_affected_rows($con)>0)
        {
            $_SESSION['opMsg']="<h3 class='primary'>Category deleted succesfully</h3>";
            
        }else
        {   
            $_SESSION['opMsg']="<h3 class='danger'>Category Deletion Failed</h3>";
        }

        //delete image from storage
        if($imageName!="")
        {
            $imagePath='../images/category/'.$imageName;
            $remove=unlink($imagePath);

            if($remove==false)
            {
                $_SESSION['opMsg']="<h3 class='danger'>Image deletion failed</h3>";
                
            }

        }
        header('location:'.SITEURL.'admin/manage-category.php');
    }else
    {
        header('location:'.SITEURL.'admin/manage-category.php');
    }
    include "partials/footer.php";
?>