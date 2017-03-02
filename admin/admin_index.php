<?php 
	ini_set('display_errrors', 1);
	error_reporting(E_All);
	require_once('phpscripts/init.php');
	//confirm_logged_in();


 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<!-- <link rel="stylesheet" href="css/app.css"> -->
	<link rel="stylesheet" href="css/styles.css">

	<title>Welcome to your Admin Panel</title>
</head>
<body>
	<div class="fixed">
	<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="../gallery.php" target="_blank">Chantry Island</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <!-- <li class="active"><a href="#">Right Button Active</a></li> -->
      <li class="has-dropdown">
        <a href="#">Howdy <?php echo $_SESSION['users_name']; ?></a>
        <ul class="dropdown">
          <li><a href="#">Edit My Profile</a></li>
          <li><a href="phpscripts/caller.php?caller_id=logout">Log Out</a></li>
        </ul>
      </li>
    </ul>

    
  </section>
</nav>
</div>
<!-- <div class="row"> -->
<div class="small-12 medium-12 large-1 columns" id="sideNav">
<ul class="side-nav">
	<h2 class="hidden">Side Nav</h2>
  <li><a href="#">Dashboard</a></li>
  <li><a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Media</a>
	<ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">Library</a></li>
  <li><a href="#">Add New</a></li>
  <!-- <li><a href="#">Yet another</a></li> -->
</ul>
  </li>
  <li><a data-dropdown="drop2" aria-controls="drop1" aria-expanded="false">Pages</a>
	<ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">All Pages</a></li>
  <li><a href="#">Add New</a></li>
  <!-- <li><a href="#">Yet another</a></li> -->
</ul> 
  </li>
  <li><a data-dropdown="drop4" aria-controls="drop1" aria-expanded="false">Gallery</a>
	<ul id="drop4" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">Edit Gallery</a></li>
  <li><a href="includes/add_gallery.php">Add to Gallery</a></li>
</ul>
  </li>
  <li><a data-dropdown="drop3" aria-controls="drop1" aria-expanded="false">Users</a>
  <ul id="drop3" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">All Users</a></li>
  <li><a href="#">Add New</a></li>
  <li><a href="#">Your Profile</a></li>
</ul>
</li>
</ul>
</div>
<!-- </div> -->

<!-- <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Has Dropdown</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul> -->


	<section>
	<div class="row panel">
	<div class="small-10 medium-10 large-12 columns">
	<h1>Welcome <?php echo $_SESSION['users_name']; ?> to the admin panel</h1>
	<!-- <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a> -->

	</div>
	</div>
	</section>


	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.offcanvas.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/foundation/foundation.equalizer.js"></script>
    <script src="js/foundation/foundation.abide.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/start.js"></script>
    <script src="js/facebookpage.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>