<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php">
							<div class="banner-wrapper">
								<div class="banner-header text-center">
									<h1>Improv</h1>
								</div>
							</div>
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<div class="banner-header text-center">
								<h1>Improv</h1>
							</div>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="../index.php">Home</a>
							</li>
							<li class="has-submenu">
								<a href="../overview.php">Overview </a>
							</li>	
							<li class="has-submenu">
								<a href="../about.php">About Us </a>
							</li>	
							<li class="has-submenu">
								<a href="../contact.php">Contact Us </a>
							</li>
							<li class="has-submenu">
								<a href="../booking.php">Schedule </a>
							</li>
						</ul>		 
					</div>
				</nav>
			</header>
			<!-- /Header -->
  <div class="wrapper">
    <section class="form login">
      <header>Login Improv</header>
      <p>to chat with a consultant</p>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Don't have an Improv account? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
