<?php include "partials/menu.php"?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                    
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include "partials/footer.php"?>

<?php 
    if(isset($_POST["submit"]))
    {
        $fullname=$_POST["full_name"];
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="INSERT INTO admin SET
            full_name=$fullname,
            username=$username,
            password=$password
            ";
        
        $con=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($con,'food-order') or die(mysqli_error());

        //$res=mysqli_query($con,$sql) or die(mysqli_error());

        echo $sql;
    }else
    {
        echo "Button not clicked";
    }
?>