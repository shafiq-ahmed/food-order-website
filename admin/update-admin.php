<?php include "partials/menu.php"?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br>
        <form action="" method="post">
            <?php
                $id=$_GET['id'];
                $sql="SELECT full_name,username,password FROM admin WHERE id=$id";

                $res=mysqli_query($con,$sql) or die(mysqli_error($con));

                if($res==true)
                {
                    if(mysqli_num_rows($res)==1)
                    {
                        $row=mysqli_fetch_assoc($res);
                        $fullname=$row['full_name'];
                        $username=$row['username'];
                        $password=$row['password'];
                    }else
                    {
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
                
            ?>
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" value="<?php echo $fullname?>" placeholder="<?php echo $fullname?>"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $username?>" placeholder="<?php echo $username?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" value="<?php echo $password?>" placeholder="<?php echo $password?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                    
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include "partials/footer.php"?>

<?php 
    echo $_GET['id']; 
    if(isset($_POST["submit"]))
    {
        $fullname=$_POST["full_name"];
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="UPDATE admin 
              SET full_name='$fullname',username='$username',password='$password' 
              WHERE id=$id";
        
       
        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
        if($res==true)
        {
            $_SESSION['operationMsg']="Admin udated successfully";
        }else 
        {
            $_SESSION['operationMsg']="Admin update failed";
        }
        header('location:'.SITEURL.'admin/manage-admin.php');
        
    }
?>