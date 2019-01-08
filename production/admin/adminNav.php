<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="adminHome.php">Lulworth Cove</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="adminHome.php">
        <i class="fas fa-clipboard"></i>
        <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subscriptions">
        <a class="nav-link" href="displaySubscriptions.php">
        <i class="fas fa-envelope-open"></i>
        <span class="nav-link-text">Subscriptions</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
        <a class="nav-link" href="displayContacts.php">
        <i class="fas fa-inbox"></i>
        <span class="nav-link-text">Contact</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">
        <i class="fas fa-users"></i>
        <span class="nav-link-text">Users <i class="fas fa-angle-down"></i></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseUsers">
        <li>
            <a href="displayUsers.php">Display Users</a>
        </li>
        <li>
            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUserType">User Types  <i class="fas fa-angle-down"></i></a>
            <ul class="sidenav-third-level collapse" id="collapseUserType">
                <li>
                  <a href="addUserType.php">Add User Type</a>
                </li>
                <li>
                  <a href="displayUserTypes.php">Display User Types</a>
                </li>
              </ul>
        </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Teachers">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTeachers" data-parent="#exampleAccordion">
        <i class="fas fa-wrench"></i>
        <span class="nav-link-text">Teachers <i class="fas fa-angle-down"></i></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseTeachers">
        <li>
            <a href="addTeacher.php">Add teachers</a>
        </li>
        <li>
            <a href="displayTeachers.php">Display teachers</a>
        </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Classes">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseClasses" data-parent="#exampleAccordion">
        <i class="fas fa-book"></i>
        <span class="nav-link-text">Classes <i class="fas fa-angle-down"></i></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseClasses">
        <li>
            <a href="addClass.php">Add class</a>
        </li>
        <li>
            <a href="displayClasses.php">Display classes</a>
        </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEvents" data-parent="#exampleAccordion">
        <i class="fas fa-calendar"></i>
        <span class="nav-link-text">Events <i class="fas fa-angle-down"></i></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseEvents">
        <li>
            <a href="addEvent.php">Add event</a>
        </li>
        <li>
            <a href="displayEvents.php">Display events</a>
        </li>
        </ul>
    </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
        <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt"></i>Logout</a>
    </li>
    </ul>
</div>
</nav>