<?php 
require_once '../controller/LoginController.php'; checkLoginSession(false);
require_once '../controller/ClassController.php'; 
require_once '../controller/UserController.php' 
?>
<!DOCTYPE html>
<html>
<head>
	<title>LCDC | User Detail</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome contact">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>Your Details</h3>
		<br />
		<p>"View your registration detail below."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            <h4 class="text-center">Your Details</h4>
                        </div>
                        <div class="card-body">
                            <?php $detail = getOneUser($_GET['id'])->fetch_row(); ?>
                            <form class="form-custom-color" action="../controller/UserController.php" method="POST">    
                                <input type="hidden" class="form-control" id="userId" name="userId" value="<?php echo $detail[0]; ?>">
                                <div class="form-group">
                                    <label for="parentNameUP">Parent's name</label>
                                    <input type="text" class="form-control" id="parentNameUP" name="parentNameUP" placeholder="Enter parent's name" value="<?php echo $detail[2]; ?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="childNameUP">Child's name</label>
                                    <input type="text" class="form-control" id="childNameUP" name="childNameUP" placeholder="Enter child's name" value="<?php echo $detail[3]; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="childDOBUP">Child's Date of Birth</label>
                                    <input type="date" class="form-control" id="childDOBUP" name="childDOBUP" onchange="updateAge()" value="<?php echo $detail[4]; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="childAgeUP">Child's Age</label>
                                    <input type="text" class="form-control" id="childAgeUP" name="childAgeUP" value="<?php echo $detail[5]; ?>" readonly>
                                    <small class="form-text text-muted">Age is calculated automatically as per date of birth.</small>
                                </div>
                                <div class="form-group">
                                    <label for="parentEmailUP">Parent's email</label>
                                    <input type="email" class="form-control" id="parentEmailUP" name="parentEmailUP" placeholder="Enter parent's email address" value="<?php echo $detail[6]; ?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="parentAddressUP">Parent's address</label>
                                    <input type="text" class="form-control" id="parentAddressUP" name="parentAddressUP" placeholder="Enter parent's address" value="<?php echo $detail[7]; ?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="parentContactUP">Parent's contact number</label>
                                    <input type="text" class="form-control" id="parentContactUP" name="parentContactUP" placeholder="Enter parent's contact number" value="<?php echo $detail[8]; ?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="availableClassUP">Class</label>
                                    <select id="availableClassUP" name="availableClassUP" class="form-control" required> 
                                    <?php $ut = getClasses();
                                        while($data = $ut->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data['classId'] ?>" <?php if($detail[1]==$data['className']){echo "selected";} ?>><?php echo $data['className'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="passwordUP">Password</label>
                                    <input type="password" class="form-control" id="passwordUP" name="passwordUP" placeholder="Password" value="<?php echo $detail[10]; ?>" readonly required>
                                    <small class="form-text text-muted">Please enter old password if you don't want to change password.</small>
                                </div>
                                <div class="form-group">
                                    <label for="commentUP">Comment</label>
                                    <textarea class="form-control" id="commentUP" name="commentUP" rows="5" placeholder="Write your comment here..." readonly><?php echo $detail[9]; ?></textarea>
                                </div>

                                <input type="submit" class="btn btn-custom" value="Update" id="memberUpdate" name="memberUpdate" disabled>
                            </form>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <button class="btn btn-warning" onclick="enableUserUpdate()" id="btnUserUpdate">Allow update</button>
                            <a onclick="Javascript: return confirm('Are you sure you want to delete?')" href="../controller/UserController.php?delete=<?php echo $detail[0]; ?>" class="btn btn-danger">Delete your account</a>
                        </div>
                    </div>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>