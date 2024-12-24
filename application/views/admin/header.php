<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Training Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- Bootstrap Datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
  <!-- Theme Style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- Mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TMS</b></span>
      <!-- Logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Training Mgt System</b></span>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                <ul class="menu">
                  <!-- Example Notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/mnh.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/mnh.png" class="img-square" alt="User Image">
                <p>Admin</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/mnh.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>

      <!-- Sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <!-- Applications -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Applications</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>applications/registration"><i class="fa fa-circle-o"></i> Registration</a></li>
            <li><a href="<?php echo base_url(); ?>applications/new"><i class="fa fa-circle-o"></i> New Applications</a></li>
            <li><a href="<?php echo base_url(); ?>applications/accepted"><i class="fa fa-circle-o"></i> Accepted Applications</a></li>
            <li><a href="<?php echo base_url(); ?>applications/approved"><i class="fa fa-circle-o"></i> Approved Applications</a></li>
            <li><a href="<?php echo base_url(); ?>applications/rejected"><i class="fa fa-circle-o"></i> Rejected Applications</a></li>
          </ul>
        </li>

        <!-- Departments -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i> <span>Departments</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Department</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Departments/</a></li>
          </ul>
        </li>

        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Emails</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>email_test/send"><i class="fa fa-circle-o"></i> Send Email</a></li>
          </ul>
        </li>-->

        <!-- Staff/Supervisors -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Supervisors</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-staff"><i class="fa fa-circle-o"></i> Add Supervisor</a></li>
            <li><a href="<?php echo base_url(); ?>manage-staff"><i class="fa fa-circle-o"></i> Manage Supervisors</a></li>
          </ul>
        </li>



        <!-- Student Management
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Student Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/assign-supervisor"><i class="fa fa-circle-o"></i> Assign Supervisor</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage-assigned-students"><i class="fa fa-circle-o"></i> Manage Students Assigned</a></li>
          </ul>
        </li>-->


        <!-- Student Type -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Enrollment Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ();?>add-enrollment"><i class="fa fa-circle-o"></i> Add Enrollment</a></li>
            <li><a href="<?php echo base_url ();?>manage-enrollments"><i class="fa fa-circle-o"></i> Manage Enrollments</a></li>
          </ul>
        </li>



        <!-- Student Type -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-list"></i> <span>Student Type</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>add-student-type"><i class="fa fa-circle-o"></i> Add Student Type</a></li>
            <li><a href="<?php echo base_url();?>manage-student-type"><i class="fa fa-circle-o"></i> Manage Student Type</a></li>
          </ul>
        </li>


        <!-- Courses -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Courses</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>courses/add_course"><i class="fa fa-circle-o"></i> Add Course</a></li>
            <li><a href="<?php echo base_url(); ?>courses/manage_courses"><i class="fa fa-circle-o"></i> Manage Courses</a></li>
          </ul>
        </li>



        <!-- Trainings -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i> <span>Trainings</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>training/add_training"><i class="fa fa-circle-o"></i> Add Training</a></li>
            <li><a href="<?php echo base_url();?>training/manage_training"><i class="fa fa-circle-o"></i> Manage Trainings</a></li>
          </ul>
        </li>

         <!-- Programs: Remember to keep Maximum Number of Students per Program// 
          The administrator enters or modifies the fee details (name, price, student type,
currency, level, duration, etc.) -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Program Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-program"><i class="fa fa-circle-o"></i> Add Program</a></li>
            <li><a href="<?php echo base_url(); ?>manage-programs"><i class="fa fa-circle-o"></i> Manage Programs</a></li>
            <li><a href="<?php echo base_url(); ?>add-program-fee"><i class="fa fa-circle-o"></i> Add Program Fee</a></li>
            <li><a href="<?php echo base_url(); ?>manage-program-fees"><i class="fa fa-circle-o"></i> Manage Programs Fee</a></li>
          </ul>
        </li>

        <!-- Currency Management: The administrator enters or modifies the currency details (name, symbol,
exchange rate, etc.). -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Currency Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php base_url();?>add-currency"><i class="fa fa-circle-o"></i> Add Currency</a></li>
            <li><a href="<?php base_url();?>manage-currency"><i class="fa fa-circle-o"></i> Manage Currency</a></li>
          </ul>
        </li>



        <!-- Fees Category: The administrator enters or modifies the fee category details (name, description,
etc.). -->
        <li class="treeview">
          <a href="#">
          <i class="fa fa-credit-card"></i>
          <span>Fees Category</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url (); ?>add_category"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="<?php echo base_url (); ?>manage-fee-categories"><i class="fa fa-circle-o"></i> Manage Category</a></li>
          </ul>
        </li>



        <!-- Activities 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Activities</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Activity</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Manage Activities</a></li>
          </ul>
        </li>-->


        <!-- HelpDesk -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-life-ring"></i> <span>HelpDesk</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/helpdesk"><i class="fa fa-circle-o"></i> Approve HelpDesk</a></li>
            <li><a href="<?php echo base_url(); ?>admin/helpdesk/history"><i class="fa fa-circle-o"></i> HelpDesk History</a></li>
          </ul>
        </li>




        <!-- Reports -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Reports</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Generate Report</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Manage Reports</a></li>
          </ul>
        </li>

        <!-- User Management 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Manage Users</a></li>
          </ul>
        </li>-->



        <!-- Settings -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Settings</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Security Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Backup & Recovery</a></li>
          </ul>
        </li>

        <!-- Help Desk 
        <li>
          <a href="#">
            <i class="fa fa-life-ring"></i> <span>Help Desk</span>
          </a>
        </li>-->

        <!-- Logout -->
        <li>
          <a href="<?php echo base_url(); ?>logout">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <?php
    if ($this->session->userdata('usertype') != 1) {
      redirect('login');
    }
  ?>
