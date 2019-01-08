<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Contact</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome contact">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>Contact Us</h3>
		<br />
		<p>"Send us a message."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-sm-8">
                    <div class="card">
						<div class="card-body">
							<h5 class="card-title" id="contactform"><i class="fas fa-envelope"></i> Send your message</h5>	
                            <form class="form-custom-color" action="../controller/ContactController.php" method="post">
                                <?php if(isset($_GET['status']) && $_GET['status']=='success') { ?>
                                <div class="form-group">
                                    <label class="text-green">Your message sent successfully.</label>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="messageTitle">Message Title</label>
                                    <input type="text" class="form-control" id="messageTitle" name="messageTitle" placeholder="Enter title" required>
                                </div>
                                <div class="form-group">
                                    <label for="messageEmail">Email address</label>
                                    <input type="text" class="form-control" id="messageEmail" name="messageEmail" placeholder="Enter email address" required>
                                </div>
                                <div class="form-group">
                                    <label for="messageContent">Message</label>
                                    <textarea class="form-control" id="messageContent" name="messageContent" rows="5" placeholder="Write your message here..." required></textarea>
                                </div>

                                <input type="submit" class="btn btn-custom" value="Send" name="contact">
                            </form>				
						</div>
					</div>
                </div><!-- /.col-sm-8 -->
                <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
							<h5 class="card-title"><i class="fas fa-home"></i> Contact info</h5>	
                            <p class="card-text text-justify">
                                You can directly visit us in the address mentioned below. Or send us a message from the contact form.
                            </p>
                            <hr />
                            <p class="card-text text-justify">
                                <i class="fas fa-city"></i> Lulworth Cove Drama Club<br />
                                Lulworth Cove, Dorset, United Kingdom
                            </p>
                            <p class="card-text text-justify">
                                <i class="fas fa-phone"></i> +44 345 7953 324
                            </p>
                            <p class="card-text text-justify">
                                <i class="fas fa-mail-bulk"></i> lulworthcovedramaclub@gmail.com
                            </p>
						</div>
					</div>
                </div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>