<?php 
require_once 'connection.php';
require_once 'AdminController.php';

// insert teacher
if(isset($_POST['addTeacher']))
{
    $name = $_POST['teacherName'];
    $speciality = $_POST['teacherSpeciality'];
    $address = $_POST['teacherAddress'];
    $des = $_POST['teacherDescription'];
    $img = imageLocation("addTeacher","teacherImage");

    if($img === "falseImage")
        die("Error: False file");
    else if($img === "uploadfailed")
        die("Error: Upload failed");
    else
    {
        $sql = "insert into teacher_tbl(teacherName,teacherSpeciality,teacherAddress,teacherDescription,teacherImage) ";
        $sql .= "values('$name','$speciality','$address','$des','$img');";

        if($connection->query($sql))
            header("Location: ../production/admin/displayTeachers.php");
        else
            die("Insert teacher failed!!!");
    }
}

// delete teacher
else if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $sql = "delete from teacher_tbl where teacherId=$id";
    if($connection->query($sql)===true)
        header("Location: ../production/admin/displayTeachers.php");
    else
        die("Delete error:" . $connection->error);
}


// select teachers
function getTeachers()
{
    global $connection;
    $sql = "select * from teacher_tbl order by teacherId asc;";
    return $connection->query($sql);
}

?>