<?php

ini_set('max_execution_time', 300); // 5 mins

$queries = array(
    "1"=>"SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';",
    "2"=>"SET AUTOCOMMIT = 0;",
    "3"=>"START TRANSACTION;",
    "4"=>"SET time_zone = '+00:00';",

    "5"=>"CREATE TABLE `class_tbl` (
        `classId` int(11) NOT NULL,
        `className` varchar(255) NOT NULL,
        `classAgeLimit` int(11) NOT NULL,
        `classDescription` varchar(1000) NOT NULL,
        `classImage` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "6"=>"CREATE TABLE `contact_tbl` (
        `contactId` int(11) NOT NULL,
        `contactTitle` varchar(255) NOT NULL,
        `contactEmail` varchar(255) NOT NULL,
        `contactMessage` varchar(500) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "7"=>"CREATE TABLE `event_tbl` (
        `eventId` int(11) NOT NULL,
        `eventName` varchar(255) NOT NULL,
        `eventLocation` varchar(255) NOT NULL,
        `eventStartDate` date NOT NULL,
        `eventEndDate` date NOT NULL,
        `eventDescription` varchar(255) NOT NULL,
        `eventImage` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "8"=>"CREATE TABLE `forumanswer_tbl` (
        `forumId` int(11) NOT NULL,
        `userId` int(11) NOT NULL,
        `answer` varchar(1000) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "9"=>"CREATE TABLE `forum_tbl` (
        `forumId` int(11) NOT NULL,
        `questionName` varchar(500) NOT NULL,
        `questionDate` date NOT NULL,
        `userId` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "10"=>"CREATE TABLE `subscription_tbl` (
        `subscriptionId` int(11) NOT NULL,
        `subscriptionEmail` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "11"=>"CREATE TABLE `teacher_tbl` (
        `teacherId` int(11) NOT NULL,
        `teacherName` varchar(255) NOT NULL,
        `teacherSpeciality` varchar(255) NOT NULL,
        `teacherAddress` varchar(255) NOT NULL,
        `teacherDescription` varchar(255) NOT NULL,
        `teacherImage` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "12"=>"CREATE TABLE `userclass_tbl` (
        `userId` int(11) NOT NULL,
        `classId` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "13"=>"CREATE TABLE `userevent_tbl` (
        `userId` int(11) NOT NULL,
        `eventId` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "14"=>"CREATE TABLE `usertype_tbl` (
        `userTypeId` int(11) NOT NULL,
        `userTypeName` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",
      
    "15"=>"CREATE TABLE `user_tbl` (
        `userId` int(11) NOT NULL,
        `parentName` varchar(255) NOT NULL,
        `childName` varchar(255) DEFAULT NULL,
        `childDOB` date DEFAULT NULL,
        `childAge` int(11) DEFAULT NULL,
        `parentEmail` varchar(255) NOT NULL,
        `parentAddress` varchar(255) NOT NULL,
        `parentContactNumber` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `comment` varchar(500) NOT NULL,
        `userTypeId` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    "16"=>"ALTER TABLE `class_tbl`
    ADD PRIMARY KEY (`classId`);",

    "17"=>"ALTER TABLE `contact_tbl`
    ADD PRIMARY KEY (`contactId`);",

    "18"=>"ALTER TABLE `event_tbl`
    ADD PRIMARY KEY (`eventId`);",

    "19"=>"ALTER TABLE `forumanswer_tbl`
    ADD KEY `forumanswer_tbl_ibfk_1` (`forumId`),
    ADD KEY `forumanswer_tbl_ibfk_2` (`userId`);",

    "20"=>"ALTER TABLE `forum_tbl`
    ADD PRIMARY KEY (`forumId`),
    ADD KEY `userId` (`userId`);",

    "21"=>"ALTER TABLE `subscription_tbl`
    ADD PRIMARY KEY (`subscriptionId`),
    ADD UNIQUE KEY `subscriptionEmail` (`subscriptionEmail`);",

    "22"=>"ALTER TABLE `teacher_tbl`
    ADD PRIMARY KEY (`teacherId`),
    ADD UNIQUE KEY `teacherImage` (`teacherImage`);",

    "23"=>"ALTER TABLE `userclass_tbl`
    ADD PRIMARY KEY (`userId`,`classId`),
    ADD KEY `classId` (`classId`);",

    "24"=>"ALTER TABLE `userevent_tbl`
    ADD PRIMARY KEY (`userId`,`eventId`),
    ADD KEY `userevent_tbl_ibfk_1` (`eventId`);",

    "25"=>"ALTER TABLE `usertype_tbl`
    ADD PRIMARY KEY (`userTypeId`),
    ADD UNIQUE KEY `userTypeName` (`userTypeName`);",

    "26"=>"ALTER TABLE `user_tbl`
    ADD PRIMARY KEY (`userId`),
    ADD UNIQUE KEY `parentEmail` (`parentEmail`),
    ADD KEY `userTypeId` (`userTypeId`);",

    "27"=>"ALTER TABLE `class_tbl`
    MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;",

    "28"=>"ALTER TABLE `contact_tbl`
    MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT;",

    "29"=>"ALTER TABLE `event_tbl`
    MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;",

    "30"=>"ALTER TABLE `forum_tbl`
    MODIFY `forumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;",

    "31"=>"ALTER TABLE `subscription_tbl`
    MODIFY `subscriptionId` int(11) NOT NULL AUTO_INCREMENT;",

    "32"=>"ALTER TABLE `teacher_tbl`
    MODIFY `teacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;",

    "33"=>"ALTER TABLE `usertype_tbl`
    MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;",

    "34"=>"ALTER TABLE `user_tbl`
    MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;",

    "35"=>"ALTER TABLE `forumanswer_tbl`
    ADD CONSTRAINT `forumanswer_tbl_ibfk_1` FOREIGN KEY (`forumId`) REFERENCES `forum_tbl` (`forumId`) ON DELETE CASCADE,
    ADD CONSTRAINT `forumanswer_tbl_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user_tbl` (`userId`) ON DELETE CASCADE;",
    
    "36"=>"ALTER TABLE `forum_tbl`
    ADD CONSTRAINT `forum_tbl_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_tbl` (`userId`) ON DELETE CASCADE;",
    
    "37"=>"ALTER TABLE `userclass_tbl`
    ADD CONSTRAINT `userclass_tbl_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class_tbl` (`classId`),
    ADD CONSTRAINT `userclass_tbl_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user_tbl` (`userId`) ON DELETE CASCADE;",
    
    "38"=>"ALTER TABLE `userevent_tbl`
    ADD CONSTRAINT `userevent_tbl_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `event_tbl` (`eventId`) ON DELETE CASCADE,
    ADD CONSTRAINT `userevent_tbl_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user_tbl` (`userId`) ON DELETE CASCADE;",
    
    "39"=>"ALTER TABLE `user_tbl`
    ADD CONSTRAINT `user_tbl_ibfk_1` FOREIGN KEY (`userTypeId`) REFERENCES `usertype_tbl` (`userTypeId`);",
    
    "40"=>"INSERT INTO `class_tbl` (`classId`, `className`, `classAgeLimit`, `classDescription`, `classImage`) VALUES
    (1, 'Acting', 20, 'We teach a lot of acting techniques. Some of them are Classical acting, Stanislavski system, Method acting, Meisner technique, Practical Aesthetics, Brechtian method.', 'class2.jpg'),
    (2, 'Dancing', 40, 'We teach all types of popular dance. Some of them are Ballet dancing, Tap dancing, Jazz, Modern dance, Lyrical, Hip Hop, Contemporary, Highland dancing, Line dancing and Irish dancing.', 'class1.jpg'),
    (3, 'Singing class (Musical theatre)', 32, 'We provide excellent training, and give high emphasis on vocal registration, vocal resonation, vocal technique, extending vocal range, posture and breath support.', 'class3.jpg');",
    
    "41"=>"INSERT INTO `event_tbl` (`eventId`, `eventName`, `eventLocation`, `eventStartDate`, `eventEndDate`, `eventDescription`, `eventImage`) VALUES
    (1, 'Event1', 'Location1', '2019-01-02', '2019-01-25', 'This is Event1 which will happen in Location1 from 01/02/2019 to 01/25/2019.', 'event1Small.jpg'),
    (2, 'Event2', 'Location2', '2019-01-26', '2019-02-15', 'This is Event2 which will happen in Location2 from 01/26/2019 to 02/15/2019.', 'event2Small.jpg'),
    (3, 'Event3', 'Location3', '2019-02-16', '2019-02-28', 'This is Event3 which will happen in Location3 from 02/16/2019 to 02/28/2019.', 'event3Small.jpg'),
    (4, 'Event4', 'Location4', '2019-03-01', '2019-03-16', 'This is Event4 which will happen in Location4 from 03/01/2019 to 03/16/2019.', 'event4Small.jpg'),
    (5, 'Event5', 'Location5', '2019-03-17', '2019-04-15', 'This is Event5 which will happen in Location5 from 03/17/2019 to 04/15/2019.', 'event5Small.jpg'),
    (6, 'Event6', 'Location6', '2019-06-25', '2019-08-04', 'This is Event6 which will happen in Location6 from 06/25/2019 to 08/04/2019.', 'event6Small.jpg');",
    
    "42"=>"INSERT INTO `teacher_tbl` (`teacherId`, `teacherName`, `teacherSpeciality`, `teacherAddress`, `teacherDescription`, `teacherImage`) VALUES
    (1, 'Teacher1', 'Speciality1', 'Address1', 'A well-detailed description of the teacher goes over this part.', 'teacher1.jpg'),
    (2, 'Teacher2', 'Speciality2', 'Address2', 'A well-detailed description of the teacher goes over this part.', 'teacher2.jpg'),
    (3, 'Teacher3', 'Speciality3', 'Address3', 'A well-detailed description of the teacher goes over this part.', 'teacher3.jpg'),
    (4, 'Teacher4', 'Speciality4', 'Address4', 'A well-detailed description of the teacher goes over this part.', 'teacher4.jpg'),
    (5, 'Teacher5', 'Speciality5', 'Address5', 'A well-detailed description of the teacher goes over this part.', 'teacher5.jpg'),
    (6, 'Teacher6', 'Speciality6', 'Address6', 'A well-detailed description of the teacher goes over this part.', 'teacher6.jpg');",
    
    "43"=>"INSERT INTO `usertype_tbl` (`userTypeId`, `userTypeName`) VALUES
    (1, 'ADMIN'),
    (2, 'USER');",
    
    "44"=>"INSERT INTO `user_tbl` (`userId`, `parentName`, `childName`, `childDOB`, `childAge`, `parentEmail`, `parentAddress`, `parentContactNumber`, `password`, `comment`, `userTypeId`) VALUES
    (1, 'Admin', '', '0000-00-00', 0, 'admin@gmail.com', 'UK', '12345', '21232f297a57a5a743894a0e4a801fc3', 'I am registered as admin.', 1);",
    
    "45"=>"INSERT INTO `userclass_tbl` (`userId`, `classId`) VALUES (1, 3);",
    
    "46"=>"INSERT INTO `forum_tbl` (`forumId`, `questionName`, `questionDate`, `userId`) VALUES
    (1, 'Can you share your experience of being inside the club?', '2018-12-22', 1);",
    
    "47"=>"INSERT INTO `forumanswer_tbl` (`forumId`, `userId`, `answer`) VALUES
    (1, 1, 'You can give detail explanations.');",
    
    "48"=>"COMMIT;"
);

if(isset($_POST['configure']))
{
    $host = $_POST['dbHost'];
    $db = $_POST['dbName'];
    $usr = $_POST['dbUsername'];
    $pwd = $_POST['dbPassword'];

    $credential = array("host"=>$host,"db"=>$db,"username"=>$usr,"password"=>$pwd);
    $f = fopen("setup/db.json",'w');
    fwrite($f,json_encode($credential));
    fclose($f);
    
    include_once 'connection.php';   // checks database again
    for($i=1; $i<=48;$i++)
    {
        if($connection->query($queries[$i])===false)
            die("Query " . $i . ": failed. Error: " . $connection->error);
    }
    
    header("location: ../production/setup.php?step=2");
}

?>