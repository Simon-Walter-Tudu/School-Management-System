<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="../logout.php" class="nav-link" title="Logout">
        Logout <i class="fa fa-sign-out-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= $site_url ?>" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= $site_url ?>Admin/dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Accounts
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/user-account.php?user=teacher" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Teachers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/user-account.php?user=student" type="student" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Students</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/user-account.php?user=parent" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Parents</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/user-account.php?user=librarian" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Librarian</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Classes
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/scetions.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sections</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/classes.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Classes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/courses.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Courses</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/subjects.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Subjects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/lessions.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lessions</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Class Routine
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/periods.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Periods</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>Admin/timetable.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Time Table</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>  
                Manage Accountings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/student-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Fee Details</p>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">