<?php require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Teacher</title>
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
            <li class="breadcrumb-item active">Add Teacher</li>
        </ol>

        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Add Teacher
                    </div>
                    <div class="card-body text-left">
                        <form action="../../controller/TeacherController.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="teacherName">Name</label>
                                <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="Enter teacher name" required>
                            </div>
                            <div class="form-group">
                                <label for="teacherSpeciality">Speciality</label>
                                <input type="text" class="form-control" id="teacherSpeciality" name="teacherSpeciality" placeholder="Enter teacher speciality" required>
                            </div>
                            <div class="form-group">
                                <label for="teacherAddress">Address</label>
                                <input type="text" class="form-control" id="teacherAddress" name="teacherAddress" placeholder="Enter teacher address" required>
                            </div>
                            <div class="form-group">
                                <label for="teacherDescription">Description</label>
                                <textarea class="form-control" id="teacherDescription" rows="5" name="teacherDescription" placeholder="Enter teacher description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="teacherImage">Image</label>
                                <input type="file" class="form-control" id="teacherImage" name="teacherImage" accept="image/*" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" name="addTeacher">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="displayTeachers.php" class="btn btn-info">View Teachers</a>
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