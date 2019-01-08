<?php 
require_once 'connection.php';

// show user details to update (access: ADMIN)
if(isset($_GET['changeUTID']))
{
    $uid = $_GET['changeUTID'];
    header("Location: ../production/admin/updateUser.php?userId=$uid");
}

// update user type (access: ADMIN)
else if(isset($_POST['updateUserType']))
{
    $id = $_POST['userId'];
    $ut = $_POST['userType'];
    $sql = "update user_tbl set userTypeId=$ut where userId=$id;";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayUsers.php");
    else
        die("Update failed: " . $connection->error);
}

// delete user
else if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    global $connection;
    if($connection->query("delete from user_tbl where userId=$id;")===true)
    {
        session_start();
        session_destroy();
        header("location: ../production/index.php");
    }
    else
        die("Deletion failed: " . $connection->error);

}

// update user details
else if(isset($_POST['memberUpdate']))
{
    $userId = $_POST['userId'];
    $parentName = $_POST['parentNameUP'];
    $childName = $_POST['childNameUP'];
    $childDOB = $_POST['childDOBUP'];
    $childAge = $_POST['childAgeUP'];
    $parentEmail = $_POST['parentEmailUP'];
    $parentAddress = $_POST['parentAddressUP'];
    $parentContact = $_POST['parentContactUP'];
    $availableClass = $_POST['availableClassUP'];
    $password = md5($_POST['passwordUP']);
    $comment = $_POST['commentUP'];

    $query = "update user_tbl set parentName='$parentName',childName='$childName',childDOB='$childDOB',
    childAge='$childAge',parentEmail='$parentEmail',parentAddress='$parentAddress',
    parentContactNumber='$parentContact',password='$password',comment='$comment' where userId=$userId";

    if($connection->query($query)===true)
    {
        $connection->query("update userclass_tbl set classId=$availableClass where userId=$userId;");
        header("Location: ../production/userDetail.php?id=$userId");
    }
    else
        die("Error: " . $connection->error);
}


// functions
function getUserId($email)
{
    global $connection;
    $sql = "select userId from user_tbl where parentEmail='$email';";
    return $connection->query($sql)->fetch_row()[0];
}

function getUsers()
{
    global $connection;
    $sql = "select u.userId,ut.userTypeName,c.className,u.parentName,u.childName,u.childDOB,u.childAge,u.parentEmail,
            u.parentAddress,u.parentContactNumber,u.comment from user_tbl u, usertype_tbl ut, userclass_tbl uc, class_tbl c 
            where u.userTypeId=ut.userTypeId and u.userId=uc.userId and uc.classId=c.classId order by u.userId asc;";
    $result = $connection->query($sql);
    return $result;
}

function getOneUser($id)
{
    global $connection;
    $sql = "select u.userId,c.className,u.parentName,u.childName,u.childDOB,u.childAge,u.parentEmail,
            u.parentAddress,u.parentContactNumber,u.comment,u.password from user_tbl u, usertype_tbl ut, userclass_tbl uc, class_tbl c 
            where u.userTypeId=ut.userTypeId and u.userId=uc.userId and uc.classId=c.classId and u.userId=$id";
    $result = $connection->query($sql);
    return $result;
}

// for ADMIN
function getUser($userId)
{
    global $connection;
    $sql = "select userId,parentName,parentEmail from user_tbl where userId=$userId";
    return $connection->query($sql);
}

// 1 September - age calculation
function updateAge()
{
    if(date('n-y') === "9-1")   // 9-1 == September-1
    {
        global $connection;
        $sql = "update user_tbl set childAge=datediff(CURRENT_DATE(),childDOB)/365";
        $connection->query($sql);
    }
}

?>