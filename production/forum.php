<?php
require_once '../controller/ClassController.php';
require_once '../controller/TeacherController.php';
require_once '../controller/ForumController.php';
require_once '../controller/UserController.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Forum</title>
	<?php require 'pageHeader.php' ?>
</head>
<body>

<?php require 'nav.php' ?>

<section class="welcome about">
	<div class="welcome-header">
		<h1>Lulworth Cove</h1>
        <h1>Drama Club</h1>
        <h3>Our Forum</h3>
		<br />
		<p>"Place your queries."</p>
	</div><!-- /.welcome-header -->
</section><!-- /.welcome -->

<section class="main">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Forum</h1>
                <p class="text-left">
                    <span class="badge badge-primary">ASK</span>
                    <span class="badge badge-info">ANSWER</span>
                    <span class="badge badge-success">GET SATISFIED</span>
                </p>
                <p class="text-justify">
                    This page is totally dedicated for questions and answers. It's a simple forum that 
                    will contain answers to different questions. Please make sure to check the questions 
                    in the forum before placing a new one. Placing multiple questions leads to repetition 
                    of same questions multiple times which will make the forum complex to use in the future. 
                    Utilize this forum to build a productive community inside the club.
                </p>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion" id="accordionForum">
                    <div class="card card-hoveroff">
                        <div class="card-header" id="headingZero">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                            Add Question :
                            </button>
                        </h5>
                        </div>
                        <div id="collapse0" class="collapse show" aria-labelledby="headingZero" data-parent="#accordionForum">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php if(isset($_SESSION['login'])){ echo "<p>Question: ".$_SESSION['login']."</p>";}else{echo "<a href='login.php' class='btn btn-custom'>Login required</a>";} ?>
                                    <br /><br />
                                    <form method="post" action="../controller/ForumController.php">
                                        <textarea rows="4" class="form-control" name="qName" required placeholder="Question details..." <?php if(!isset($_SESSION['login'])){echo "disabled";} ?>></textarea>
                                        <br />
                                        <input type="submit" class="btn btn-custom" value="Add" name="forumAdd" <?php if(!isset($_SESSION['login'])){echo "disabled";} ?> >
                                    </form>
                                </div><!-- /.col-sm-12 -->
                            </div><!-- /.row -->
                        </div>
                        </div>
                    </div>
                    <?php 
                        $result = getQuestions();
                        $dataCount = 0;
                        while($data = $result->fetch_assoc()){
                            $dataCount++;
                    ?>
                    <div class="card card-hoveroff">
                        <div class="card-header" id="heading<?php echo $dataCount; ?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $dataCount; ?>" aria-expanded="true" aria-controls="collapse<?php echo $dataCount; ?>">
                                Question #<?php echo $dataCount; ?> : <?php echo $data['questionName']; ?> asked on 
                                <span class="badge badge-success"><?php echo $data['questionDate']; ?></span> by 
                                <span class="badge badge-primary">
                                <?php 
                                    $userResult = getUser($data['userId']); 
                                    $userData = $userResult->fetch_assoc();
                                    echo $userData['parentEmail']; 
                                ?>
                                </span>
                            </button>
                        </h5>
                        </div>
                        <div id="collapse<?php echo $dataCount; ?>" class="collapse" aria-labelledby="heading<?php echo $dataCount; ?>" data-parent="#accordionForum">
                        <div class="card-body">
                            <div class="row">
                                <?php 
                                $resultForum = getAnswers($data['forumId']);
                                while($dataForum = $resultForum->fetch_assoc()){
                                ?>
                                    <div class="col-sm-2">
                                        <p>Answer: <?php echo $dataForum['parentEmail']; ?></p>
                                    </div><!-- /.col-sm-2 -->
                                    <div class="col-sm-10">
                                        <p><?php echo $dataForum['answer']; ?></p>
                                    </div><!-- /.col-sm-10 -->
                                <?php } ?>
                                <div class="col-sm-2">
                                    <?php if(isset($_SESSION['login'])){ echo "<p>Answer: ".$_SESSION['login']."</p>";}else{echo "<a href='login.php' class='btn btn-custom'>Login required</a>";} ?>
                                </div><!-- /.col-sm-2 -->
                                <div class="col-sm-10">
                                    <form method="post" action="../controller/ForumController.php">
                                        <input type="hidden" name="forumId" value="<?php echo $data['forumId']; ?>">
                                        <textarea rows="4" class="form-control" name="aName" required placeholder="Answer details..." <?php if(!isset($_SESSION['login'])){echo "disabled";} ?>></textarea>
                                        <input type="submit" class="btn btn-success" value="Answer" name="forumAnswer" <?php if(!isset($_SESSION['login'])){echo "disabled";} ?> >
                                    </form>
                                </div><!-- /.col-sm-10 -->
                            </div><!-- /.row -->
                        </div>
                        </div>
                    </div>
                    <?php } ?>
                </div><!-- #accordionForum -->
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.main -->

<?php require 'footer.php' ?>
</body>
</html>