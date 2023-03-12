<?php include "partials/menu.php"?>

        <!-- Main content Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
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
                    <tr>
                        <td>1.</td>
                        <td>Shafiq Ahmed</td>
                        <td>shafiq11</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a> 
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Shuvo DAs</td>
                        <td>shuvo11</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a> 
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Fahim Ahsan</td>
                        <td>fahim11</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a> 
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>
            </div>
             
        </div>
        <!-- Main content Ends -->

<?php include "partials/footer.php"?>