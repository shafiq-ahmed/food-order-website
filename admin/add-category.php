<?php include "partials/menu.php";?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br>
        <?php 
        
        if(isset($_SESSION['no-title']))
        {   
            echo $_SESSION['no-title'].'<br>';
            unset($_SESSION['no-title']);
        }
            
    ?>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td> <input type="file" name="image"></td>
                </tr>
                <tr>
                    <td>Featured</td>
                    <td>:</td>
                    <td><input type="radio" name="featured" value="Yes" >Yes
                        <input type="radio" name="featured" value="No" checked>No
                    
                    </td>
                </tr>

                <tr>
                    <td>Active</td>
                    <td>:</td>
                    <td><input type="radio" name="active" value="Yes" >Yes
                        <input type="radio" name="active" value="No" checked>No
                    
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="add-category" class="btn-secondary" value="Add Category">

                    </td>
                    
                </tr>

            </table>
        </form>
        <?php
            if(isset($_POST['add-category']))
            {
                //check if title is empty
                //if yes then redirect
                if(empty($_POST['title']))
                {
                    $_SESSION['no-title']='<h3>Title cannot be empty</h3>';
                    header('location:'.SITEURL.'admin/add-category.php');
                }

                //check if image has been chosen
                //if not then leave image field empty on database
                if(isset($_FILES['image']['name']))
                {
                    $imageName=$_FILES['image']['name'];

                    //rename the imagename
                    //get the extension
                    $ext=end(explode('.',$imageName));

                    //renaming the image
                    $imageName='Food_Category_'.rand(000,999).'.'.$ext;
                    $sourcePath=$_FILES['image']['tmp_name'];
                    $destinationPath="../images/category/".$imageName;

                    //take the file from the source and place it on the destination folder
                    $upload=move_uploaded_file($sourcePath,$destinationPath);
                    
                    //if moving file failed then redirect to same page
                    if($upload==false)
                    {
                        $_SESSION['upload']="<h3>The file could not be uploaded</h3>";
                        header('location:'.SITEURL.'admin/add-category.php');
                    }
                }else
                {
                    $imageName="";
                }
                echo $title=$_POST['title'];
                echo $isFeatured=$_POST['featured'];
                echo $isActive=$_POST['active'];
                
                //print_r($_FILES['image']);
                //die();
                
                $sql="INSERT INTO category (title,image_name, featured, active)
                VALUES ('$title','$imageName', '$isFeatured', '$isActive')";

                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                $_SESSION['add']='<h3>Category added successfully</h3>';
                header('location:'.SITEURL.'admin/manage-category.php');
            }
        ?>
     </div>
</div>
<?php include "partials/footer.php";?>