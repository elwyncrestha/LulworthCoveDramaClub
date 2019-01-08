<?php
require_once '../../controller/ClassController.php'; 
require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
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
            <li class="breadcrumb-item active">Display Class</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <h1>Class</h1>
            <p>Table below lists out all the classes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <?php 
              $result = getClasses();
              if($result->num_rows == 0) {
                echo "<h1>No data</h1>";}
              else{ $dataCount=0;?>
              <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age Limit</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($data = $result->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo ++$dataCount; ?></th>
                    <td><?php echo $data["className"]; ?></td>
                    <td><?php echo $data["classAgeLimit"]; ?></td>
                    <td><?php echo $data["classDescription"]; ?></td>
                    <td><img class="img-responsive" src="../../images/<?php echo $data["classImage"]; ?>" alt="<?php echo $data["classImage"]; ?>"></td>
                    <td><a onclick="Javascript: return confirm('Are you sure you want to delete?')" href="../../controller/ClassController.php?delete=<?php echo $data["classId"]; ?>">Delete</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
                </div><!-- /.table-responsive -->
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="addClass.php" class="btn btn-primary">Add Class</a>
            </div>
        </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        
        <?php require 'footer.php' ?>
    </div>
  <?php require 'adminFooter.php' ?>
</body>

</html>