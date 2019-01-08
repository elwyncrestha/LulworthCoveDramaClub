<?php
require_once '../controller/ClassController.php';
require_once '../controller/TeacherController.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LCDC | About</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome about">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>About Us</h3>
		<br />
		<p>"Know about our club."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>About our club</h1>
                <p class="text-justify">
                    Lulworth Cove Drama Club are a local community group who focus on developing local 
                    talent through vocational courses for children as well as adults. Generally, children 
                    are categorized as people in age range of 5-21 years, and adults are those above 21 
                    years. Children between the ages of 5-21 can attend any of the youth courses and those 
                    over 21 can join the adults either on a full-time or part-time basis.
                </p>
                <p class="text-justify">
                    The drama club teaches three different courses. The groups were setup in Lulworth Cove 
                    in Dorset and teaches acting, singing and dance through stage school. Acting, singing and dancing are the only 
                    courses that are taught in this drama club.
                </p>
                <p class="text-justify">
                    The club is located at Lulworth Cove, Dorset, United Kingdom. It is surrounded by beautiful white 
                    pebbles and blue waters. It is a popular destination. Low tides reveals wonderful rock pools teeming 
                    with sea creatures. Dogs are permitted on the left hand side of the slipway. The Cove offers a variety 
                    of places to eat and there is a large car park (fee payable). Make sure you visit the Heritage Centre 
                    next to the car park for all kinds of information about the area and the Jurassic Coast. There are 
                    toilets with disabled and baby changing facilities at the Heritage Centre. Boat trips are available 
                    during the summer.
                </p>
                <a href="https://www.visit-dorset.com/things-to-do/lulworth-cove-p807263" class="btn btn-info btn-sm">Detail reference</a>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        <hr />
        <div class="row">
            <div class="col-sm-12">
                <h3>Our classes</h3>  
                <p class="text-left">
                    <span class="badge badge-primary">Dancing</span>
                    <span class="badge badge-primary">Acting</span>
                    <span class="badge badge-primary">Singing</span>
                </p>
                <p class="text-justify">
                   In Lulworth Cove Drama Club, we run three different classes. They are dance, music and act classes. 
                   We provide numbers of classes in each category. For an instance, there are some lists of classes 
                   that we currently provide in small section below this paragraph. Dancing, acting and singing class are 
                   the only major classes run in this drama club. In spite of less number of classes, we provide every 
                   student quality trainings. There are various sub-categories in each class. For an example, we have 
                   classical acting, method acting, etc. in acting classes. Similarly, we've ballet dancing, modern dance, 
                   etc. in dance classes. Likewise, there are numbers of sub-classes for music as well.
                </p>
                <?php 
                    $result = getClasses();
                    while($data = $result->fetch_assoc()){
                ?>
                    <p class="text-justify">
                        <?php echo $data['classDescription']; ?>
                    </p>
                <?php } ?>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <a href="blog.php" class="btn btn-primary">Details about classes</a>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        <hr />
        <div class="row">
            <div class="col-sm-12">
                <h3>Our teachers</h3>  
                <p class="text-left">
                    <span class="badge badge-success">Certified</span>
                    <span class="badge badge-success">Experienced</span>
                    <span class="badge badge-success">Dedicated</span>
                </p>
                <p class="text-justify">
                    We provide you experienced and certified teacher who has specialized in particular 
                    topic. Every teachers available here in the drama club are very social and friendly. 
                    So, there is no any possibility of arising a communication problem while a student 
                    takes a class. Also, all of the other staffs including teachers, lecturers, assitants, 
                    are equally respected here in the club. We're well know to create a humble environment 
                    for all our students, teachers, staffs and other workers.
                </p>
                <p class="text-justify">
                    If a student wants to directly contact with the teacher, s/he can directly message to 
                    the teacher using our website. We are proud to help our student to be productive in their 
                    spare time.
                </p>
                
                <a href="contact.php" class="btn btn-custom">Contact with teacher directly?</a>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        <div class="row">
        <?php $result = getTeachers(); ?>
            <?php if($result->num_rows == 0) {echo "<h1 class='text-center'>No teacher available</h1>";}else{while($data = $result->fetch_assoc()) { ?>
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="../images/<?php echo $data['teacherImage']; ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><span class="badge badge-primary badge-lg"><?php echo $data['eventName']; ?></span></h5>
							<p class="card-text">
                                Teacher name: <?php echo $data['teacherName']; ?><br />
                                Teacher Speciality: <?php echo $data['teacherSpeciality']; ?><br />
                                Teacher Address: <?php echo $data['teacherAddress']; ?>
                            </p>
                            <p class="card-text text-justify">
                                Teacher description: <?php echo $data['teacherDescription']; ?>
                            </p>
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
            <?php }} ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>