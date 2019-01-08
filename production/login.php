<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Login</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="content-heading">
						<h1><i class="fas fa-sign-in-alt"></i> Member Login</h1>
					</div>
					<div class="content-details">
                        <?php if(isset($_GET['login']) && $_GET['login'] == "failed") { ?>
                            <p class="text-red">
                                Login failed!!! <br />
                                Enter your correct information.
                            </p>
                        <?php } else if(isset($_GET['login']) && $_GET['login'] == "blocked") { ?>
                            <p class="text-red">
                                Login successively failed 3 times!!! <br />
                                You'll be unable to log in for 3 minutes.
                            </p>
                        <?php } else { ?>    
                            <p>Enter your information carefully.</p>
                        <?php } ?>
                        
                        <form class="form-custom-color" action="../controller/LoginController.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" id="parentEmail" name="parentEmail" placeholder="Enter username (parent's email address)" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                           
                            <input type="submit" class="btn btn-custom" value="Login" name="memberLogin">
                            <br /><br />
                            <a href="register.php" class="text-white"><i class="fas fa-user-plus"></i>  <u>Sign up</u></a><br>
                            <a href="index.php" class="text-white"><i class="fas fa-arrow-left"></i>  <u>Go back </u></a>
                        </form>
					</div>
				</div>
            </div><!-- /.row -->
        </div><!-- /.content -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>Copyright &copy; <?php echo date("Y") ?> All Rights Reserved</p>
                <p>Designed and developed by <a href="https://github.com/elwyncrestha" class="developer">Elvin Shrestha</a></p>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.main -->

</body>
</html>