<?php include "partials/menu.php"?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>
        </br></br>
        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        </br></br>
                <!--Add admin button -->
                <a href="<?php echo SITEURL.'admin/add-category.php'?>" class="btn-primary">Add Category</a>
                </br></br></br>
                <table class="tbl-full">
                    <tr>
                        <th>Serial No.</th>
                        <th>Title</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                        $sql="SELECT * FROM category";
                        $res=mysqli_query($con,$sql) or die($con);

                        if(mysqli_num_rows($res)>0)
                        {
                            $count=0;
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $title=$row['title'];
                                $featured=$row['featured'];
                                $active=$row['active'];
                                $id=$row['id'];
                                $imageName=$row['image_name'];
                            
                    ?>
                    <tr>
                        <td><?php echo ++$count;?></td>
                        <td><?php echo $title;?></td>
                        <td><?php echo $featured;?></td>
                        <td><?php echo $active;?></td>
                        <td>
                            <?php 
                                if($imageName=="")
                                {
                                    echo "<div class='danger'>No Image Added</div>"
                                    ?><?php
                                }else
                                {
                            ?>
                            <img src="<?php echo CATEGORY_IMAGE_SOURCE.$imageName;?>" width="100px"> </td>
                            <?php } ?>
                        <td>
                            <a href="<?php echo SITEURL.'admin/update-category.php?id='.$id;?>" class="btn-secondary">Update Category</a> 
                            <a href="<?php echo SITEURL.'admin/delete-category.php?id='.$id.'&image_name='.$imageName;?>" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <?php 
                            }
                        }
                        
                    ?>
                    
                </table>
    </div>
</div>
<?php include "partials/footer.php"?>