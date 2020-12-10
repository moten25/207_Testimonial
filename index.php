<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PGD 107 Final Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="libs/bootstrap.min.css">
  <script src="libs/jquery.min.js"></script>
  <script src="libs/popper.min.js"></script>
  <script src="libs/bootstrap.min.js"></script>
</head>    
<body>
   <div class="container bg-secondary text-white">
    <a class="navbar-brand" href="index.php"><img src="image/iit.jpg" width="1000px" height="400" style="display:block:margin-center:auto:margin-right:auto"></a>  
  




<nav class="navbar navbar-expand-sm bg-secondary navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" width="80px"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">ABOUT US</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        STUDENT 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="?apply">APPLY</a>
  <?php
if (!isset($_SESSION['login'])) {   ?>     
        <a class="dropdown-item" href="?login">LOGIN</a>
         <?php
       }
if (isset($_SESSION['login'])) {  ?>
        <a class="dropdown-item" href="?testimonial">TESTIMONIAL</a>
        <a class="dropdown-item" href="action.php?logout">LOG OUT</a>
         <?php }  ?>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin 
      </a>
      <div class="dropdown-menu">        
        <a class="dropdown-item" href="index.php?admin_signup">ADMIN SIGNUP</a>
   <?php
if (!isset($_SESSION['admin_login'])) {    ?>   
        <a class="dropdown-item" href="?admin_login">ADMIN LOGIN</a>
         <?php
       }
if (isset($_SESSION['admin_login'])) {  ?>
        
        <a class="dropdown-item" href="?approve">ALL DATA</a>
        <a class="dropdown-item" href="action.php?admin_logout">LOG OUT</a>
         <?php }  ?>
      </div>
    </li>
  </ul>
  <?php
if (isset($_SESSION['login'])) {
 echo 'User Email:' .$_SESSION['email'];
}elseif (isset($_SESSION['admin_login'])) {
 echo 'Admin Email:' .$_SESSION['admin_email'];
}
  ?>

</nav>
</div>

<hr>
  
<div class="container">

  <?php  
  if (isset($_GET['apply'])) {
   include 'apply.php';
  }

  if (isset($_GET['login'])) {
   include 'login.php';
  }

   if (isset($_GET['testimonial'])) {
   include 'testimonial.php';
  }

   if (isset($_GET['admin_signup'])) {
   include 'admin_signup.php';
  }

   if (isset($_GET['admin_login'])) {
   include 'admin_login.php';
  }

   if (isset($_GET['approve'])) {
   include 'approve.php';
  }

  ?>
  <h3>This is IIT Home Page</h3>
  <p>Please input your Information correctly</p>
  <p style="color: blue"><?php
if (isset($_SESSION['apply_message'])) {
 echo $_SESSION['apply_message'];
}
  ?></p>

  <table class="table">
   
    <tbody>
      <tr>
        <td>01.</td>
        <td>Name</td>
        <td>:</td>
        <td>Md. Abdul Moten</td>
      </tr>
      <tr>
        <td>02.</td>
        <td>Course</td>
        <td>:</td>
        <td>PGDIT</td>
      </tr>
      <tr>
        <td>03.</td>
        <td>Subject</td>
        <td>:</td>
        <td>PGD 107</td>
      </tr>
      <tr>
        <td>04.</td>
        <td>BATCH</td>
        <td>:</td>
        <td>PGD 2020</td>
      </tr>
      <tr>
        <td>05.</td>
        <td>Roll No.</td>
        <td>:</td>
        <td>2025</td>
      </tr>
     
    </tbody>
  </table>
</div>

</body>
</html>