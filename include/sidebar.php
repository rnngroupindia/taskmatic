<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task Management System by Mayuri K.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.theme.min.css">
  <link rel="stylesheet" href="assets/bootstrap-datepicker/css/datepicker.css">
  <link rel="stylesheet" href="assets/bootstrap-datepicker/css/datepicker-custom.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/bootstrap-datepicker/js/datepicker-custom.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <script type="text/javascript">
    
    /* delete function confirmation  */
    function check_delete() {
      var check = confirm('Are you sure you want to delete this?');
        if (check) {
         
            return true;
        } else {
            return false;
      }
    }
  </script>
</head>
<body>

<nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="task-info.php"><span style=>
        <img src="assets/img/dummyLogo.png" height="60px"></span></a>
    </div>

    <?php
    $user_role = $_SESSION['user_role'];
     if($user_role == 1){
    ?>
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-nav-custom">

        
        <li <?php if($page_name == "Task_Info" ){echo "class=\"active\"";} ?>><a href="task-info.php"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-tasks" ></span> Task Mangement</a></li>
        <li <?php if($page_name == "Attendance" ){echo "class=\"active\"";} ?>><a href="attendance-info.php"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-calendar"></span> Attendance </a></li>
        <li <?php if($page_name == "Admin" ){echo "class=\"active\"";} ?>><a href="manage-admin.php"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-user"></span> Administration</a></li>

        <li <?php if($page_name == "Admin" ){echo "class=\"active\"";} ?>><a href="https://www.mayurik.com/#download_section"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-download"></span> More Projects</a></li>

        <li <?php if($page_name == "Admin" ){echo "class=\"active\"";} ?>><a href="https://www.youtube.com/watch?v=jm8UH0TrngQ"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-qrcode  
"></span>Pro Version</a></li>

      <li <?php if($page_name == "Admin" ){echo "class=\"active\"";} ?>><a href="https://www.youtube.com/watch?v=jm8UH0TrngQ"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-hdd 
"></span> Database</a></li>

        <li ><a href="?logout=logout"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
    <?php 
     }else if($user_role == 2){

      ?>
          <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-nav-custom">
        <li <?php if($page_name == "Task_Info" ){echo "class=\"active\"";} ?>><a href="task-info.php"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-tasks"></span> Task Mangement</a></li>
        <li <?php if($page_name == "Attendance" ){echo "class=\"active\"";} ?>><a href="attendance-info.php"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-calendar"></span> Attendance </a></li>
        <li ><a href="?logout=logout"><span style="font-size:16px;    margin-right: 13px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>

      <?php

     }else{
       header('Location: index.php');
     }

    ?>
    


  </div>
</nav>
<nav class="navbar navbar-default custom-nav">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
       <li class="">
        <div id="google_translate_element">
                                            
                                        </div>
       </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="assets/img/avtar.jpg" width="50px">
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="bg-primary user"><a href="#"> <h4>Mayuri K.</h4></a></li>
          <li><a href="manage-admin.php"> <span style=" margin-right: 13px;" class="showopacity glyphicon glyphicon-user text-primary"></span> Profile</a></li>
          <li><a href="?logout=logout"> <span style="margin-right: 13px;" class=" showopacity glyphicon glyphicon-log-out text-primary"></span> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


<div class="main">