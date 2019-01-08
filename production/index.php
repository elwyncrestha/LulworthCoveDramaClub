<?php 
require_once '../controller/connection.php';
require_once '../controller/UserController.php'; updateAge();

// if(isset($_COOKIE['lcdc']))
// {
// 	unset($_COOKIE['lcdc']);
// 	setcookie("lcdc",null,-1,'/');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Homepage</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<!-- cookie section -->
<?php if(!isset($_COOKIE['lcdc'])) {?>
<section id="cookie-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>
					We use cookie to ensure you get the best experience on our website. 
					<button class="btn btn-info" id="btnCookie" onclick="cookieAgree()">Got it!</button>
				</p>
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /#cookie-section -->
<?php } ?>

<?php require 'nav.php' ?>

<section class="welcome">
	<div class="welcome-header">
		<h1>Welcome</h1>
		<h1>to</h1>
		<h1>Lulworth Cove</h1>
		<h3>Drama Club</h3>
		<br />
		<p>"We develop local talent."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-calendar-check"></i> Our Events</h1>
					</div>
					<div class="content-details">
						<p>These are some events that we have conducted.</p>

						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img class="d-block w-100" src="../images/event1.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 1</h5>
									<p>This is our first event.</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event2.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 2</h5>
									<p>This is our second event.</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event3.jpg" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 3</h5>
									<p>This is our third event.</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event4.jpg" alt="Fourth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 4</h5>
									<p>This is our fourth event.</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event5.jpg" alt="Fifth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 5</h5>
									<p>This is our fifth event.</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event6.jpg" alt="Sixth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 6</h5>
									<p>This is our sixth event.</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.content -->

		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-bookmark"></i> About Us</h1>
					</div>
					<div class="content-details">
						<p>A brief introduction about us.</p>

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

						<p class="text-justify">Visit readmore section to know more about us. <a href="about.php">READMORE...</a></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.content -->

		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-book"></i> Our Classes</h1>
					</div>
					<div class="content-details">
						<p>List of our available classes.</p>
					</div>
				</div>
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="../images/class1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Dance class</h5>
							<p class="card-text text-justify">We teach all types of popular dance. Some of them are Ballet dancing, 
								Tap dancing, Jazz, Modern dance, Lyrical, Hip Hop, Contemporary, Highland dancing, 
								Line dancing and Irish dancing.
							</p>
							<a href="blog.php#dance" class="btn btn-custom">READMORE</a>
							<br /><br />
							<h5 class="card-title">Dance video</h5>
							<iframe class="iframe-video" src="https://www.youtube.com/embed/5EVMjnHFg-w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="../images/class2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Acting class</h5>
							<p class="card-text text-justify">We teach a lot of acting techniques. Some of them are Classical acting, 
								Stanislavski's system, Method acting, Meisner technique, Practical Aesthetics, 
								Brechtian method.
							</p>
							<a href="blog.php#acting" class="btn btn-custom">READMORE</a>
							<br /><br />
							<h5 class="card-title">Acting video</h5>
							<iframe class="iframe-video" src="https://www.youtube.com/embed/L8Zw3TopDWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="../images/class3.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Singing class (Musical theatre)</h5>
							<p class="card-text text-justify">
								We provide excellent training, and give high emphasis on vocal registration, vocal resonation, vocal 
								technique, extending vocal range, posture and breath support.
							</p>
							<a href="blog.php#singing" class="btn btn-custom">READMORE</a>
							<br /><br />
							<h5 class="card-title">Singing video</h5>
							<iframe class="iframe-video" src="https://www.youtube.com/embed/Q5hS7eukUbQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-comments"></i> TESTIMONIALS</h1>
					</div>
					<div class="content-details">
						<p>Statements from our students and parents.</p>
					</div>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
			
			<div class="row">
				<div class="col-sm-12">
					<blockquote class="blockquote text-justify">
						<p class="mb-0">This is really a great place to be. You'll learn and entertain yourself at the same time.</p>
						<footer class="blockquote-footer">John Edward in <cite title="Dance class">Dance class</cite></footer>
					</blockquote>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12">
					<blockquote class="blockquote text-justify">
						<p class="mb-0">
							I thank the club for making my child very enthusiastic in acting. She loved acting since her childhood, 
							and she is doing really good with the help of the acting class provided by Lulworth Cove Drama Club.
						</p>
						<footer class="blockquote-footer">Perry Jackson (Parent) in <cite title="Acting class">Acting class</cite></footer>
					</blockquote>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12">
					<blockquote class="blockquote text-justify">
						<p class="mb-0">
							Excellent environment for both childrens and adults. I'm personally enjoying my time here. I'm 45 
							years old but my desire to learn new things had led me to acting class in Lulworth Cove Drama Club.
						</p>
						<footer class="blockquote-footer">Sam Winchester in <cite title="Acting class">Acting class</cite></footer>
					</blockquote>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12">
					<blockquote class="blockquote text-justify">
						<p class="mb-0">Singing class is really good. They teach every single content perfectly.</p>
						<footer class="blockquote-footer">Mike Shrestha in <cite title="Singing class">Singing class</cite></footer>
					</blockquote>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
		</div><!-- /.content -->

		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-heading">
						<h1><i class="fas fa-calendar"></i> Upcoming Events / Blog</h1>
					</div>
					<div class="content-details">
						<p>These are upcoming events. Stay updated.</p>

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
								<img class="d-block w-100" src="../images/event1.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 1</h5>
									<p>This is our first event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event2.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 2</h5>
									<p>This is our second event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event3.jpg" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 3</h5>
									<p>This is our third event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event4.jpg" alt="Fourth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 4</h5>
									<p>This is our fourth event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event5.jpg" alt="Fifth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 5</h5>
									<p>This is our fifth event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="../images/event6.jpg" alt="Sixth slide">
									<div class="carousel-caption d-none d-md-block">
									<h5>Event 6</h5>
									<p>This is our sixth event.</p>
									<a href="blog.php#eventDetails" class="btn btn-success">REGISTER</a>
									</div>
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
					</div>
				</div>
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12">
					<p>Dynamic writing about upcoming events.</p>
				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
		</div><!-- /.content -->
	</div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>