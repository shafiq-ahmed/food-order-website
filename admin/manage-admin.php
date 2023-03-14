<?php include "partials/menu.php"?>

        <!-- Main content Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                </br></br>

                <?php 
                    //displaying succesfull add message after redirection from
                    //add admin page
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }elseif(isset($_SESSION['operationMsg']))
                    {
                        echo $_SESSION['operationMsg'];
                        unset($_SESSION['operationMsg']);
                    }

                ?>

                </br></br>
                <!--Add admin button -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                </br></br></br>
                <table class="tbl-full">
                    <tr>
                        <th>Serial No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        $sql="SELECT * FROM admin";
                        $res=mysqli_query($con,$sql);

                        if($res==true)
                        {
                            $numberOfRows=mysqli_num_rows($res);
                            if($numberOfRows>0)
                            {   
                                $serialNo=1;
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $fullName=$rows['full_name'];
                                    $username=$rows['username'];
                                    ?>
                                    <tr>
                                        <td><?php echo $serialNo?></td>
                                        <td><?php echo $fullName?></td>
                                        <td><?php echo $username?></td>
                                        <td>
                                            <a href="<?php echo SITEURL."admin/update-admin.php?id=$id"?>" class="btn-secondary">Update Admin</a> 
                                            <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>
                                    <?php $serialNo++;
                                }
                            }
                            
                        }
                    
                    ?>
                   
                </table>
                <div class="clearfix"></div>
            </div>
             
        </div>
        <!-- Main content Ends -->

<?php include "partials/footer.php"?>