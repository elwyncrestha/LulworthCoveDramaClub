<?php 
require_once '../controller/EventController.php';
require_once '../controller/ClassController.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Blog</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome blog">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>Our Blog</h3>
		<br />
		<p>"Know about our events and classes."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-book"></i> Classes Details</h1>
					</div>
					<div class="content-details">
                        <p class="text-justify">
                            We've numbers of classes running every day. This page will provide you detail 
                            information about various classes running in our club. We categorize our 
                            classes in three major groups: <span class="badge badge-primary">Dancing</span>
                            <span class="badge badge-primary">Acting</span>
                            <span class="badge badge-primary">Singing</span>
                        </p>
                        <div class="alert alert-warning" role="alert">
                            We provide total of 7 different classes for <span class="badge badge-primary">Dancing</span>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            We provide total of 15 different classes for <span class="badge badge-primary">Acting</span>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            We provide total of 10 different classes for <span class="badge badge-primary">Singing</span>
                        </div>
					</div>
				</div>
			</div><!-- /.row -->
        </div><!-- /.content -->
        
        <div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1 id="dance"><i class="fas fa-award"></i> Dancing class</h1>
					</div>
					<div class="content-details">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
								<li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
								<li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								    <img class="d-block w-100" src="../images/danceClass1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/danceClass2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/danceClass3.jpg" alt="Third slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/danceClass4.jpg" alt="Fourth slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/danceClass5.jpg" alt="Fifth slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/danceClass6.jpg" alt="Sixth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
                        </div>
                        <br />
                        
                        <div class="danceclass">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Club</a></li>
                                    <li class="breadcrumb-item active"><a href="#dance">Dance</a></li>
                                </ol>
                            </nav>
                            <p class="text-justify">
                                <?php 
                                    $result = getClass("dancing");
                                    $data = $result->fetch_assoc();
                                    echo $data['classDescription'];
                                ?>
                            </p>
                        </div><!-- /.danceclass -->
                        
					</div><!-- /.content-details -->
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
        </div><!-- /.content -->

        <div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1 id="acting"><i class="fas fa-video"></i> Acting class</h1>
					</div>
					<div class="content-details">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								    <img class="d-block w-100" src="../images/actingclass1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/actingclass2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/actingclass3.jpg" alt="Third slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/actingclass4.jpg" alt="Fourth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
                        </div>
                        <br />
                        
                        <div class="actingclass">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Club</a></li>
                                    <li class="breadcrumb-item active"><a href="#acting">Acting</a></li>
                                </ol>
                            </nav>
                            <p class="text-justify">
                                <?php 
                                    $result = getClass("acting");
                                    $data = $result->fetch_assoc();
                                    echo $data['classDescription'];
                                ?>
                            </p>
                        </div><!-- /.actingclass -->
                        
					</div><!-- /.content-details -->
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
        </div><!-- /.content -->

        <div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1 id="singing"><i class="fas fa-music"></i> Singing class</h1>
					</div>
					<div class="content-details">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								    <img class="d-block w-100" src="../images/singingclass1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/singingclass2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/singingclass3.jpg" alt="Third slide">
								</div>
								<div class="carousel-item">
								    <img class="d-block w-100" src="../images/singingclass4.jpg" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
								    <img class="d-block w-100" src="../images/singingclass5.jpg" alt="Fifth slide">
                                </div>
                                <div class="carousel-item">
								    <img class="d-block w-100" src="../images/singingclass6.jpg" alt="Sixth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
                        </div>
                        <br />
                        
                        <div class="singingclass">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Club</a></li>
                                    <li class="breadcrumb-item active"><a href="#singing">Singing</a></li>
                                </ol>
                            </nav>
                            <p class="text-justify">
                                <?php 
                                    $result = getClass("Singing class (Musical theatre)");
                                    $data = $result->fetch_assoc();
                                    echo $data['classDescription'];
                                ?>
                            </p>
                        </div><!-- /.singingclass -->
                        
					</div><!-- /.content-details -->
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
        </div><!-- /.content -->

        <div class="content" id="eventDetails">
			<div class="row">
                <div class="col-sm-12">
                    <div class="content-heading">
                        <h1><i class="fas fa-book"></i> Events Details</h1>
                    </div>
                    <div class="content-details">
                        <p class="text-justify">
                            We'll organize different events related to different classes. This page will also provide you detail 
                            information about various events organized in our club. Events details are differentiated by colors as:
                            <br />
                            <span class="badge badge-primary badge-lg">Event Name</span>
                            <span class="badge badge-warning badge-lg">Location</span>
                            <span class="badge badge-success badge-lg">Event start date</span>
                            <span class="badge badge-danger badge-lg">Event end date</span>
                        </p>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <?php $result = getEvents(); ?>
                <?php if($result->num_rows == 0) {echo "<p class='text-center'>No event</p>";}else{while($data = $result->fetch_assoc()) { ?>
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="../images/<?php echo $data['eventImage']; ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><span class="badge badge-primary badge-lg"><?php echo $data['eventName']; ?></span></h5>
							<p class="card-text">
                                <span class="badge badge-warning badge-lg"><?php echo $data['eventLocation']; ?></span><br />
                                <span class="badge badge-success badge-lg"><?php echo $data['eventStartDate']; ?></span><br />
                                <span class="badge badge-danger badge-lg"><?php echo $data['eventEndDate']; ?></span><br />
                            </p>
                            <p class="card-text text-justify">
                                <?php echo $data['eventDescription']; ?>
                            </p>
							<hr />
							<a href="../controller/EventController.php?register=<?php echo $data['eventId']; ?>" class="btn btn-custom">Register</a>
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
                <?php }} ?>
			</div><!-- /.row -->
        </div><!-- /.content -->

    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>