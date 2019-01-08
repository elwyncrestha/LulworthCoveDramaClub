<!DOCTYPE html>
<html>
<head>
	<title>LCDC | Message</title>
	<?php require 'pageHeader.php' ?>
</head>
<body style="padding:100px;">
<?php
if(isset($_GET['error']))
{
    if($_GET['error']=="noadminaccess")
    {
        echo "<h1>ACCESS FORBIDDEN: NO ADMIN RIGHTS</h1>";
        echo "<a href='index.php' class='btn btn-warning'>Go back</a>";
    }
    else if($_GET['error']=="nologin")
    {
        echo "<h1>ERROR: LOGIN REQUIRED</h1>";
        echo "<a href='login.php' class='btn btn-warning'>Go back</a>";
    }
}
else if(isset($_GET['event']))
{
    if($_GET['event']=="registered")
    {
        echo "<h1>Event registration completed!!!</h1>";
        echo "<a href='index.php' class='btn btn-warning'>Go back</a>";
    }
}

include_once 'pageFooter.php';
?>
</body>
</html>