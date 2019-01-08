<?php require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | User Type</title>
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
            <li class="breadcrumb-item active">Add User Type</li>
        </ol>

        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Add User Type
                    </div>
                    <div class="card-body text-left">
                        <form action="../../controller/UserTypeController.php" method="post">
                            <div class="form-group">
                                <label for="usertype">User type</label>
                                <input type="text" class="form-control" id="usertype" name="usertype" placeholder="Enter user type" required>
                                <small class="form-text text-muted">Make sure not to enter duplicate user type.</small>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" name="inputUserType">
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