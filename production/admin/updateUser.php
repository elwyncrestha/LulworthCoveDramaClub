<?php 
require_once '../../controller/UserController.php';
require_once '../../controller/UserTypeController.php';
require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | User</title>
  <?php require 'adminHeader.php' ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- nav -->
    <?php require 'adminNav.php' ?>

    <div class="content-wrapper">
        <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="adminHome.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update User Type</li>
        </ol>

        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Update User Type
                    </div>
                    <div class="card-body text-left">
                        <form action="../../controller/UserController.php" method="post">
                            <?php 
                            $result = getUser($_GET['userId'])->fetch_row(); ?>
                            <div class="form-group">
                                <label for="usertype">User Id</label>
                                <input type="text" class="form-control" id="userId" name="userId" value="<?php echo $result[0]; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="usertype">Parent Name</label>
                                <input type="text" class="form-control" id="parentName" name="parentName" value="<?php echo $result[1]; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="usertype">Parent Email</label>
                                <input type="email" class="form-control" id="parentEmail" name="parentEmail" value="<?php echo $result[2]; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="userType">User Type</label>
                                <select id="userType" name="userType" class="form-control" required>
                                    <?php $ut = getUserTypes();
                                    while($data = $ut->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $data['userTypeId'] ?>"><?php echo $data['userTypeName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" name="updateUserType">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="displayUserTypes.php" class="btn btn-info">View Usertypes</a>
                    </div>
                </div>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid-->
    </div><!-- /.content-wrapper-->

        <?php require 'footer.php' ?>
    </div>
  <?php require 'adminFooter.php' ?>
</body>

</html>