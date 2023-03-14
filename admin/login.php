<?php include "../config/constants.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Login - Food Order
        </title>
        
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">Login</h1><br>
            <form action="" method="post" class="text-center">
                Username<br>
                <input type="text" name="username"><br><br>
                Password<br>
                <input type="password" name="password"><br><br>
                <input type="submit" name="login" value="Login" class="btn-secondary">
            </form>
             
        </div>
    </body>
</html>
<?php
    
    if(isset($_POST['login']))
    {
        echo $username=$_POST['username'];
        echo $password=$_POST['password'];

        $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $res=mysqli_query($con,$sql) or die(mysqli_error($con));

        if(mysqli_num_rows($res)==1)
        {
            /*$row=mysqli_fetch_assoc($res);
            echo $row['id']."<br>";
            echo $row['username']."<br>";
            echo $row['password']."<br>";*/
            $_SESSION['user']=$username;
            header('location:'.SITEURL.'admin/index.php');
        }else
        {
            echo "User does not exist";
        }
    }
?>  