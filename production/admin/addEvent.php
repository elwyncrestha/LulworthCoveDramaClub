<?php require_once '../../controller/LoginController.php'; checkLoginSession(true); ?>
<!DOCTYPE html>
<html>

<head>
  <title>LCDC | Event</title>
  <?php require 'adminHeader.php' ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- nav -->
    <?php require 'adminNav.php' ?>

    <div class="content-wrapper">
        <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="adminHome.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Event</li>
        </ol>

        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Add Event
                    </div>
                    <div class="card-body text-left">
                        <form action="../../controller/EventController.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="eventName">Event Name</label>
                                <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Enter event name" required>
                            </div>
                            <div class="form-group">
                                <label for="eventLocation">Event Location</label>
                                <input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="Enter event location" required>
                            </div>
                            <div class="form-group">
                                <label for="eventStartDate">Event Start Date</label>
                                <input type="date" class="form-control" id="eventStartDate" name="eventStartDate" required>
                            </div>
                            <div class="form-group">
                                <label for="eventEndDate">Event End Date</label>
                                <input type="date" class="form-control" id="eventEndDate" name="eventEndDate" required>
                            </div>
                            <div class="form-group">
                                <label for="eventDescription">Event Description</label>
                                <textarea rows="5" class="form-control" id="eventDescription" name="eventDescription" placeholder="Enter event description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="eventImage">Event Image</label>
                                <input type="file" class="form-control" id="eventImage" name="eventImage" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" name="addEvent">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="displayEvents.php" class="btn btn-info">View Events</a>
                    </div>
                </div>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid-->
    </div><!-- /.content-wrapper-->

        <?php require 'footer.php' ?>
    </div>
  <?php require 'adminFooter.php' ?>
</body>

</html>