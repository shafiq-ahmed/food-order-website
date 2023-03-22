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
        
     </div>
</div>
<?php include "partials/footer.php";?>