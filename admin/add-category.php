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
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td><input type="text" name="title"></td>
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
                if(empty($_POST['title']))
                {
                    $_SESSION['no-title']='<h3>Title cannot be empty</h3>';
                    header('location:'.SITEURL.'admin/add-category.php');
                }
                echo $title=$_POST['title'];
                echo $isFeatured=$_POST['featured'];
                echo $isActive=$_POST['active'];
            }
        ?>
     </div>
</div>
<?php include "partials/footer.php";?>