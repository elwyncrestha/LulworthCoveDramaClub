<?php require_once '../controller/UserController.php';
error_reporting(0);
session_start();
function isActive($pageName)
{
  $uri = $_SERVER['REQUEST_URI'];
  $uri = substr($uri,strrpos($uri,'/')+1);
  return stripos($uri,$pageName)===0 ? "active" : "";
}
function loggedIn()
{
  return isset($_SESSION['login']) ? "text-green" : "text-red";
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Lulworth Cove</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("index.php"); ?>" href="index.php"> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("blog.php"); ?>" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("register.php"); ?>" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("about.php"); ?>" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("contact.php"); ?>" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("where.php"); ?>" href="where.php">Where</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo isActive("forum.php"); ?>" href="forum.php">Forum</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo loggedIn(); ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Member
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
            if(isset($_SESSION['login']))
            {
              
              echo "<a class='dropdown-item' href='userDetail.php?id=".getUserId($_SESSION['login'])."'>Profile: " . $_SESSION['login'] . " (Logged in)</a>";
              if(isset($_SESSION['admin']))
              {
                if($_SESSION['admin']=="1")
                {
                  echo  "<a class='dropdown-item' href='admin/adminHome.php'>ADMIN PANEL</a>";
                }
              }
              echo "<div class='dropdown-divider'></div>
              <a class='dropdown-item' href='../controller/LoginController.php?logout=true'>Sign out</a>";
            } else 
            {
              echo "<a class='dropdown-item' href='login.php'>Sign in</a>";
            }
          ?>
        </div>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-custom my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>