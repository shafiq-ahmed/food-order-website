<?php include "partials/menu.php";?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>
        <br>
        <?php
            echo $id=$_GET['id'];
        ?>
        <form action="" method="post">
            <table class="tbl-30">
                <?php
                    $sql="SELECT * FROM category WHERE id='$id'";

                    $res=mysqli_query($con,$sql);

                    if(mysqli_num_rows($res)==1)
                    {
                        $row=mysqli_fetch_assoc($res);
                        $title=$row['title'];
                        $featured=$row['featured'];
                        $active=$row['active'];
                        $imageName=$row['image_name'];
                    }
                ?>
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td><input type="text" name="title" value="<?php echo $title;?>" ></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td><img src="<?php echo CATEGORY_IMAGE_SOURCE.$imageName?>" width='100px'></td><br>
                    <td><input type="file" name="image" value="<?php echo CATEGORY_IMAGE_SOURCE.$imageName?>"></td>
                </tr>

                <tr>
                    <td>Featured</td>
                    <td>:</td>
                    <td><input type="radio" name="featured" value="Yes" <?php echo ($featured=="Yes")?"Checked":""?> >Yes
                        <input type="radio" name="featured" value="No" <?php echo ($featured=="No")?"Checked":""?>>No
                    
                    </td>
                </tr>

                <tr>
                    <td>Active</td>
                    <td>:</td>
                    <td><input type="radio" name="active" value="Yes" <?php echo ($active=="Yes")?"Checked":""?> >Yes
                        <input type="radio" name="active" value="No" <?php echo ($active=="No")?"Checked":""?>>No
                    
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="add-category" class="btn-secondary" value="Update Category">

                    </td>
                    
                </tr>

            </table>
        </form>
        <?php
            if(isset($_POST['add-category']))
            {
                //if title is empty redirect to current page with id
                if(empty($_POST['title']))
                {
                    $_SESSION['no-title']='<h3>Title cannot be empty</h3>';
                    header('location:'.SITEURL.'admin/update-category.php?id='.$id);
                }
                echo $title.'<br>';
                echo $featured=$_POST['featured'].'<br>';
                echo $active=$_POST['active'].'<br>';
                if(isset($_POST['image']['name']))
                {
                    echo $image=$_POST['image']['name'];
                }
            }
        ?>
     </div>
</div>
<?php include "partials/footer.php";?>