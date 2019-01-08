<?php 
require_once 'connection.php';

// subscribe
if(isset($_POST['newsletterSubscribe']))
{
    $email = $_POST['footerSubscribe'];
    $sql = "insert into subscription_tbl(subscriptionEmail) values('$email');";
    if($connection->query($sql)===true)
        header("Location: ../production/index.php");
    else
        die("Subscribe error: " . $connection->error);
        
}

// display all
function getSubscriptions()
{
    global $connection;
    $sql = "select * from subscription_tbl order by subscriptionId asc;";
    $result = $connection->query($sql);

    return $result;
}
?>