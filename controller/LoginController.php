<?php 
require_once 'connection.php';
require_once 'ClassController.php';
require_once 'UserController.php';
error_reporting(0);
session_start();

// sign up
if(isset($_POST['memberRegister']))
{
    $parentName = $_POST['parentName'];
    $childName = $_POST['childName'];
    $childDOB = $_POST['childDOB'];
    $childAge = $_POST['childAge'];
    $parentEmail = $_POST['parentEmail'];
    $parentAddress = $_POST['parentAddress'];
    $parentContact = $_POST['parentContact'];
    $availableClass = $_POST['availableClass'];
    $password = md5($_POST['password']);
    $comment = $_POST['comment'];

    $query = "insert into user_tbl(parentName,childName,childDOB,childAge,parentEmail,parentAddress,parentContactNumber,password,comment,userTypeId) ";
    $query .= "values('$parentName','$childName','$childDOB','$childAge','$parentEmail','$parentAddress','$parentContact','$password','$comment',2);";

    if($connection->query($query)===true)
    {
        enrollStudent(getUserId($parentEmail),$availableClass);
        header("Location: ../production/login.php");
    }
    else
        die("Error: " . $connection->error);
}

// login
else if(isset($_POST['memberLogin']))
{
    if(isset($_SESSION['loginTime']))
    {
        if(date('Y-m-d H:i:s') > $_SESSION['loginTime'])
        {
            unset($_SESSION['loginTime']);
            unset($_SESSION['loginCount']);
        }
        else
            header("Location: ../production/login.php?login=blocked");
    }
    
    if(!isset($_SESSION['loginTime']))
    {
        $email = $_POST['parentEmail'];
        $password = md5($_POST['password']);
        $result = $connection->query("select * from user_tbl where parentEmail='$email' and password='$password';");
        $count = $result->num_rows;

        if($count > 0)
        {
            if(isset($_SESSION['loginCount']))
                unset($_SESSION['loginCount']);
            $_SESSION['login'] = $email;
            $_SESSION['admin'] = isAdmin($email);
            header("Location: ../production/index.php");
        }
        else
        {
            if(!isset($_SESSION['loginCount']))
            {
                $_SESSION['loginCount'] = 1;
                header("Location: ../production/login.php?login=failed");
            }
            else
            {
                $c = $_SESSION['loginCount'];
                $_SESSION['loginCount'] = ++$c;
                if($_SESSION['loginCount'] == "3")
                {
                    $cd = new DateTime(date('Y-m-d H:i:s')); // current datetime
                    $cd->add(new DateInterval('P0Y0M0DT0H3M0S'));   // 3 mins added -> unlocking time
                    $_SESSION['loginTime'] = $cd->format('Y-m-d H:i:s');
                    header("Location: ../production/login.php?login=blocked");    
                }
                else
                    header("Location: ../production/login.php?login=failed");
            }
        }
    }
}

// logout
else if(isset($_GET['logout']))
{
    if($_GET['logout'] == "true")
    {
        session_destroy();
        header("Location: ../production/index.php?logout=pass");
    }
}


// functions

function checkLoginSession($isAdmin)
{
    if($isAdmin)
    {
        if(!isset($_SESSION['login']))
        {
            die(header("Location: http://".$_SERVER["HTTP_HOST"]."/LulworthCoveDramaClub/production/messagePage.php?error=nologin"));
        }
        else
        {
            if(isset($_SESSION['admin']) && $_SESSION['admin']=="0")
            {
                die(header("Location: http://".$_SERVER["HTTP_HOST"]."/LulworthCoveDramaClub/production/messagePage.php?error=noadminaccess"));
            }
        }
    }
    else
    {
        if(!isset($_SESSION['login']))
        {
            die(header("Location: http://".$_SERVER["HTTP_HOST"]."/LulworthCoveDramaClub/production/messagePage.php?error=nologin"));
        }
    }
}

function isAdmin($email)
{
    global $connection;
    $sql = "select ut.userTypeName from user_tbl u, usertype_tbl ut where u.userTypeId = ut.userTypeId and u.parentEmail='$email';";
    $row = $connection->query($sql)->fetch_assoc()["userTypeName"];    
    return strtolower($row) === "admin" ? 1 : 0;
}

?>