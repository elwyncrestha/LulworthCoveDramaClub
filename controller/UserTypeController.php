<?php 
require_once 'connection.php';

// add user type
if(isset($_POST['inputUserType']))
{
    $ut = strtoupper($_POST['usertype']);
    $sql = "insert into usertype_tbl(userTypeName) values('$ut');";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayUserTypes.php");
    else
        die("Insert error:" . $connection->error);
}

// delete user type
else if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $sql = "delete from usertype_tbl where userTypeId=$id";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayUserTypes.php");
    else
        die("Delete error:" . $connection->error);
}

// select user types
function getUserTypes()
{
    global $connection;
    $sql = "select * from usertype_tbl order by userTypeId;";
    $result = $connection->query($sql);
    return $result;
}

?>