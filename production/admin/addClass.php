<?php require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Class</title>
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
            <li class="breadcrumb-item active">Add Class</li>
        </ol>

        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Add Class
                    </div>
                    <div class="card-body text-left">
                        <form action="../../controller/ClassController.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="className">Class name</label>
                                <input type="text" class="form-control" id="className" name="className" placeholder="Enter class name" required>
                            </div>
                            <div class="form-group">
                                <label for="classAgeLimit">Class age limit</label>
                                <input type="text" class="form-control" id="classAgeLimit" name="classAgeLimit" placeholder="Enter age limit to attend class" required>
                            </div>
                            <div class="form-group">
                                <label for="classDescription">Class type name</label>
                                <textarea rows="5" class="form-control" id="classDescription" name="classDescription" placeholder="Enter class description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="classImage">Class type image</label>
                                <input type="file" class="form-control" id="classImage" name="classImage" accept="image/*" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" name="inputClass">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="displayClasses.php" class="btn btn-info">View Classes</a>
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