<?php 
require_once '../../controller/AdminController.php';
require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>  
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Admin Homepage</title>
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
            <li class="breadcrumb-item active">Summary</li>
        </ol>
        <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Dashboard</h1>
                <p>In this page, you'll find the summary of all the details about the club.</p>
              </div><!-- /.jumbotron -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Summary Table</h1>
                <?php 
              $result = summaryTable();
              $dataCount=0;?>
              <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $k=>$v) { ?>
                  <tr>
                    <th scope="row"><?php echo ++$dataCount; ?></th>
                    <td><?php echo $k; ?></td>
                    <td><?php echo $v; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
                </div><!-- /.table-responsive -->
              </div><!-- /.jumbotron -->
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