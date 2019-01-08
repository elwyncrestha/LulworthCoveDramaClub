<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Setup</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<section class="main">
<div class="container">
<div class="content">
    <?php if(isset($_GET['step'])){ ?>
        <?php if($_GET['step'] == 0){ ?>
            <div class="row">
                <div class="col-sm-12 text-center">
                <div class="card card-hoveroff">
                    <div class="card-body">
                            <h2 class="card-title"><i class="fas fa-wrench"></i> Setup page</h2>	
                            <p class="card-text">
                                It seems like you don't have a database configured in your system to run this application.
                            </p>
                            <p class="card-text">
                                This page will guide you throughout multiple wizards in order to configure database in your system.
                            </p>
                            <a href="setup.php?step=1" class="btn btn-custom">Configure now</a>
                            <hr />
                            <p class="card-text">
                                <i class="fas fa-city"></i> Lulworth Cove Drama Club<br />
                                Lulworth Cove, Dorset, United Kingdom
                            </p>
                            <p class="card-text">
                                <i class="fas fa-phone"></i> +44 345 7953 324
                            </p>
                            <p class="card-text">
                                <i class="fas fa-mail-bulk"></i> lulworthcovedramaclub@gmail.com
                            </p>
                        </div>
                    </div>
                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        <?php } else if($_GET['step'] == 1){ ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-hoveroff">
                        <div class="card-body">
                            <h2 class="card-title text-center"><i class="fas fa-wrench"></i> Setup page</h2>	
                            <h4 class="card-title text-center"> Setting tables may take sometime.</h4>	
                            <form class="form-custom-color" action="../controller/SetupController.php" method="post">
                                <div class="form-group">
                                    <label for="dbName">Database name</label>
                                    <input type="text" class="form-control" id="dbName" name="dbName" placeholder="Eg: db_lcdc" required>
                                </div>
                                <div class="form-group">
                                    <label for="dbHost">Database Host</label>
                                    <input type="text" class="form-control" id="dbHost" name="dbHost" placeholder="Eg: localhost" required>
                                </div>
                                <div class="form-group">
                                    <label for="dbUsername">Database Username</label>
                                    <input type="text" class="form-control" id="dbUsername" name="dbUsername" placeholder="Eg: root" required>
                                </div>
                                <div class="form-group">
                                    <label for="dbPassword">Database Password</label>
                                    <input type="password" class="form-control" id="dbPassword" name="dbPassword" placeholder="Eg: password" required>
                                </div>

                                <input type="submit" class="btn btn-custom" value="Configure" name="configure">
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        <?php } else if($_GET['step'] == 2){ ?>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="card card-hoveroff">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fas fa-wrench"></i> Setup page</h2>	
                            <p class="card-text">
                                AWESOME!!!
                            </p>
                            <p class="card-text">
                                You configured successfully. <i class="fas fa-check-double"></i>
                            </p>
                            <a href="index.php" class="btn btn-custom">Access the site</a>
                        </div>
                    </div>
                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        <?php } ?>
    <?php } ?>

<?php require 'pageFooter.php'; ?>
</body>
</html>