<?php 
require_once '../../controller/UserController.php';
require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Users</title>
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
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <h1>Users</h1>
            <p>
                Lists of user including users with administrator access. Administrator are also 
                presented as parent's.
            </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <?php 
              $result = getUsers();
              if($result->num_rows == 0) {
                echo "<h1>No data</h1>";}
              else{ $dataCount=0;?>
              <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Class Name</th>
                    <th scope="col">Parent Name</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Child Date of Birth</th>
                    <th scope="col">Child Age</th>
                    <th scope="col">Parent Email</th>
                    <th scope="col">Parent Address</th>
                    <th scope="col">Parent Contact Number</th>
                    <th scope="col">Comment</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($data = $result->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo ++$dataCount; ?></th>
                    <td><?php echo $data["userTypeName"]; ?> <a href="../../controller/UserController.php?changeUTID=<?php echo $data['userId']; ?>">(change)</a></td>
                    <td><?php echo $data["className"]; ?></td>
                    <td><?php echo $data["parentName"]; ?></td>
                    <td><?php echo $data["childName"]; ?></td>
                    <td><?php echo $data["childDOB"]; ?></td>
                    <td><?php echo $data["childAge"]; ?></td>
                    <td><?php echo $data["parentEmail"]; ?></td>
                    <td><?php echo $data["parentAddress"]; ?></td>
                    <td><?php echo $data["parentContactNumber"]; ?></td>
                    <td><?php echo $data["comment"]; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
                </div><!-- /.table-responsive -->
                <?php } ?>
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