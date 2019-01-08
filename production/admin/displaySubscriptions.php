<?php 
require_once '../../controller/SubscriptionController.php'; 
require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Subscriptions</title>
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
            <li class="breadcrumb-item active">Subscriptions</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <h1>Subscriptions</h1>
            <p>Table below lists out all the subscriptions made through subscription form.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <?php 
              $result = getSubscriptions();
              if($result->num_rows == 0) {
                echo "<h1>No data</h1>";}
              else{ $dataCount=0;?>
              <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($data = $result->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo ++$dataCount; ?></th>
                    <td><?php echo $data["subscriptionId"]; ?></td>
                    <td><?php echo $data["subscriptionEmail"]; ?></td>
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