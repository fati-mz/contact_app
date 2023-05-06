<?php
session_start();

include_once 'database.php';

$name = $_SESSION['first_name']." ".$_SESSION['last_name'];

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3  bg-body border-bottom">
  <!-- Container wrapper -->
  <div class="container" style="width: 77%;">
    <!-- Navbar brand -->
    <a class="navbar-brand text-danger" style="font-weight: bolder;" href="index.php">CONTACT APP</a>
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
      </ul>
      <!-- Left links -->
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- <button type="button" class="btn btn-outline-secondary px-3 me-2">Login</button>
        <button type="button" class="btn btn-outline-primary me-3">Register</button> -->
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
         <ul class="navbar-nav">
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $name?></a>
             <ul class="dropdown-menu dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Setting</a></li>
              <li><button class="dropdown-item" href="welcom.php">Log Out</button></li>
             </ul>
          </li>
         </ul>
        </div>
      </div>
      <!-- Right elements -->
      
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
