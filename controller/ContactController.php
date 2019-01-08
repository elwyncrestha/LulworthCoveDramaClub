<?php 
require_once 'connection.php'; 

// insert contact details
if(isset($_POST['contact']))
{
    $title = $_POST['messageTitle'];
    $email = $_POST['messageEmail'];
    $message = $_POST['messageContent'];

    $sql = "insert into contact_tbl(contactTitle,contactEmail,contactMessage) values('$title','$email','$message');";
    if($connection->query($sql)===true)
        header("Location: ../production/contact.php?status=success#contactform");
    else
        die("Message send failed: " . $connection->error);
}

// get contacts
function getContacts()
{
    global $connection;
    $sql = "select * from contact_tbl order by contactId asc;";
    $result = $connection->query($sql);
    return $result;
}

?>