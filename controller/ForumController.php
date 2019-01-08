<?php 
require_once 'connection.php';
require_once 'UserController.php';
session_start();

// add question
if(isset($_POST['forumAdd']))
{
    $qName = $_POST['qName'];
    $qDate = date('Y-m-d');
    $userId = getUserId($_SESSION['login']);
    $sql = "insert into forum_tbl(questionName,questionDate,userId) values('$qName','$qDate',$userId);";
    if($connection->query($sql)===true)
        header("location: ../production/forum.php");
    else
        die("Error: " . $connection->error);
}

// add answer
if(isset($_POST['forumAnswer']))
{
    $forumId = $_POST['forumId'];
    $aName = $_POST['aName'];
    $userId = getUserId($_SESSION['login']);
    $sql = "insert into forumanswer_tbl(forumId,userId,answer) values($forumId,$userId,'$aName');";
    if($connection->query($sql)===true)
        header("location: ../production/forum.php");
    else
        die("Error: " . $connection->error);
}

// display questions
function getQuestions()
{
    global $connection;
    $sql = "select * from forum_tbl order by questionDate asc;";
    return $connection->query($sql);
}

function getAnswers($forumId)
{
    global $connection;
    $sql = "select u.parentEmail, fa.answer from user_tbl u, forumanswer_tbl fa where fa.userId=u.userId and fa.forumId=$forumId";
    return $connection->query($sql);
}

?>