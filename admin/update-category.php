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
                    <td><input type="text" name="title" placeholder="<?php echo $title;?>" value="<?php echo $title;?>"></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td><img src="<?php echo CATEGORY_IMAGE_SOURCE.$imageName?>" width='100px'></td><br>
                    <td><input type="file" name="image"></td>
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
                    <td><input type="radio" name="active" value="Yes" <?php echo ($featured=="Yes")?"Checked":""?> >Yes
                        <input type="radio" name="active" value="No" <?php echo ($featured=="No")?"Checked":""?>>No
                    
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="add-category" class="btn-secondary" value="Update Category">

                    </td>
                    
                </tr>

            </table>
        </form>
        
     </div>
</div>
<?php include "partials/footer.php";?>