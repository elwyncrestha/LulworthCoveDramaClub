<?php 
require_once 'connection.php';
require_once 'AdminController.php';

// insert class
if(isset($_POST['inputClass']))
{
    $cn = $_POST['className'];
    $cal = $_POST['classAgeLimit'];
    $cd = $_POST['classDescription'];
    $img = imageLocation("inputClass","classImage");

    if($img === "falseImage")
        die("Error: False file");
    else if($img === "uploadfailed")
        die("Error: Upload failed");
    else
    {
        $sql = "insert into class_tbl(className,classAgeLimit,classDescription,classImage) ";
        $sql .= "values('$cn','$cal','$cd','$img');";

        if($connection->query($sql))
            header("Location: ../production/admin/displayClasses.php");
        else
            die("Insert class type failed!!!" . $connection->error);
    }
}

// delete class
else if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $sql = "delete from class_tbl where classId=$id";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayClasses.php");
    else
        die("Delete error:" . $connection->error);
}

// select classes
function getClasses()
{
    global $connection;
    $sql = "select * from class_tbl order by classId asc;";
    return $connection->query($sql);
}

// add student to class
function enrollStudent($studentId,$classId)
{
    global $connection;
    $sql = "insert into userclass_tbl(userId,classId) values($studentId,$classId);";
    $connection->query($sql);
}

// select particular class
function getClass($className)
{
    global $connection;
    $sql = "select * from class_tbl where className='$className';";
    return $connection->query($sql);
}

?>