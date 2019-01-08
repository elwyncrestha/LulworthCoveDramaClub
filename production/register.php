<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Register</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome register">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>REGISTER</h3>
		<br />
		<p>"Register your child here."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fab fa-wpforms"></i> Fill up the form</h1>
					</div>
					<div class="content-details">
                        <p>Enter all information carefully.</p>
                        
                        <form class="form-custom-color" action="../controller/LoginController.php" method="POST">
                            <div class="form-group">
                                <label for="parentName">Parent's name</label>
                                <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Enter parent's name" required>
                            </div>
                            <div class="form-group">
                                <label for="childName">Child's name</label>
                                <input type="text" class="form-control" id="childName" name="childName" placeholder="Enter child's name">
                            </div>
                            <div class="form-group">
                                <label for="childDOB">Child's Date of Birth</label>
                                <input type="date" class="form-control" id="childDOB" name="childDOB" onchange="changeAge()">
                            </div>
                            <div class="form-group">
                                <label for="childAge">Child's Age</label>
                                <input type="text" class="form-control" id="childAge" name="childAge" value="0" readonly>
                                <small class="form-text text-muted">Age is calculated automatically as per date of birth.</small>
                            </div>
                            <div class="form-group">
                                <label for="parentEmail">Parent's email</label>
                                <input type="email" class="form-control" id="parentEmail" name="parentEmail" placeholder="Enter parent's email address" required>
                            </div>
                            <div class="form-group">
                                <label for="parentAddress">Parent's address</label>
                                <input type="text" class="form-control" id="parentAddress" name="parentAddress" placeholder="Enter parent's address" required>
                            </div>
                            <div class="form-group">
                                <label for="parentContact">Parent's contact number</label>
                                <input type="text" class="form-control" id="parentContact" name="parentContact" placeholder="Enter parent's contact number" required>
                            </div>
                            <div class="form-group">
                                <label for="availableClass">Class</label>
                                <select id="availableClass" name="availableClass" class="form-control" required> 
                                <?php require '../controller/ClassController.php'; $ut = getClasses();
                                    while($data = $ut->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $data['classId'] ?>"><?php echo $data['className'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Write your comment here..."></textarea>
                            </div>

                            <input type="submit" class="btn btn-custom" value="Register" name="memberRegister">
                        </form>
						
					</div>
				</div>
			</div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>