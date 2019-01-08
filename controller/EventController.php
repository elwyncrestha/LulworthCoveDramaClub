<?php 
require_once 'connection.php';
require_once 'AdminController.php';
require_once 'EventController.php';
require_once 'UserController.php';
require_once 'LoginController.php';
session_start();

// insert event
if(isset($_POST['addEvent']))
{
    $en = $_POST['eventName'];
    $el = $_POST['eventLocation'];
    $esd = $_POST['eventStartDate'];
    $eed = $_POST['eventEndDate'];
    $ed = $_POST['eventDescription'];
    $img = imageLocation("addEvent","eventImage");

    if($img === "falseImage")
        die("Error: False file");
    else if($img === "uploadfailed")
        die("Error: Upload failed");
    else
    {
        $sql = "insert into event_tbl(eventName,eventLocation,eventStartDate,eventEndDate,eventDescription,eventImage) ";
        $sql .= "values('$en','$el','$esd','$eed','$ed','$img');";

        if($connection->query($sql))
            header("Location: ../production/admin/displayEvents.php");
        else
            die("Insert event failed!!!");
    }
}

// delete event
else if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $sql = "delete from event_tbl where eventId=$id";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayEvents.php");
    else
        die("Delete error:" . $connection->error);
}

// add user to event
else if(isset($_GET['register']))
{
    checkLoginSession(false);
    $eventId = $_GET['register'];
    $sql = "insert into userevent_tbl(userId,eventId) values(" . getUserId($_SESSION['login']) . ",$eventId);";
    if($connection->query($sql)===true)
        header("location: ../production/messagePage.php?event=registered");
    else 
        die("Registration error: " . $connection->error);
}

// select events
function getEvents()
{
    global $connection;
    $sql = "select * from event_tbl order by eventId asc;";
    return $connection->query($sql);
}

?>