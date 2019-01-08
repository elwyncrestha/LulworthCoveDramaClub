<?php 
require_once '../../controller/EventController.php'; 
require_once '../../controller/LoginController.php'; checkLoginSession(true);
require_once '../../controller/AdminController.php';
?>
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
            <li class="breadcrumb-item active">Display Events</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <h1>Events</h1>
            <p>Table below lists out all the events.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <?php 
              $result = getEvents();
              if($result->num_rows == 0) {
                echo "<h1>No data</h1>";}
              else{ $dataCount=0;?>
              <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">No. of Attendees</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($data = $result->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo ++$dataCount; ?></th>
                    <td><?php echo $data["eventName"]; ?></td>
                    <td><?php echo $data["eventLocation"]; ?></td>
                    <td><?php echo $data["eventStartDate"]; ?></td>
                    <td><?php echo $data["eventEndDate"]; ?></td>
                    <td><?php echo $data["eventDescription"]; ?></td>
                    <td><img alt="<?php echo $data["eventImage"]; ?>" class="img-responsive" src="../../images/<?php echo $data["eventImage"]; ?>"></td>
                    <td><?php $id=$data["eventId"]; echo countRows("userevent_tbl ue,event_tbl e"," where ue.eventId=e.eventId and e.eventId=$id"); ?></td>
                    <td><a onclick="Javascript: return confirm('Are you sure you want to delete?')" href="../../controller/EventController.php?delete=<?php echo $data["eventId"]; ?>">Delete</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
                </div><!-- /.table-responsive -->
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="addEvent.php" class="btn btn-primary">Add Event</a>
            </div>
        </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        
        <?php require 'footer.php' ?>
    </div>
  <?php require 'adminFooter.php' ?>
</body>

</html>