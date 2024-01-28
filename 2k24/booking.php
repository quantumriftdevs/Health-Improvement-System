<!DOCTYPE html> 
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Health Improvement System</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
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
							<li class="">
								<a href="index.php">Home</a>
							</li>
							<li class="has-submenu">
								<a href="overview.php">Overview </a>
							</li>	
							<li class="has-submenu">
								<a href="about.php">About Us </a>
							</li>	
							<li class="has-submenu">
								<a href="contact.php">Contact Us </a>
							</li>
							<li class="has-submenu active">
								<a href="booking.php">Schedule </a>
							</li>
							<li>
								<a href="chat/login.php" target="_blank">Login</a>
							</li>
						</ul>		 
					</div>
				</nav>
			</header>
			<!-- /Header -->
			<div class="container mt-4 p-4">
      <div class="row">
          <div class="col-md-6">
              <h2 class="text-center my-4">
                  Find Consultant
              </h2>
              <form>
                  <div class="form-group row">
                      <label class="col-sm-4 col-lg-4">
                          Patient Name
                      </label>
                      <div class="col-sm-8 col-lg-8">
                          <input type="text"id="patient-name"class="form-control"
                          placeholder="Name"required>
                      </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                        Contact
                    </label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="tel"id="contact"class="form-control"
                        placeholder="123"required>
                    </div>
                </div>
                <!---->
                <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                      Date
                    </label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="date"id="date"class="form-control">
                    </div>
                </div>
                <!---->
                <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                       Time
                    </label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="time"id="time"class="form-control">
                       </div>
                </div>
                <!---->
                <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                       Symptoms
                    </label>
                    <div class="col-sm-8 col-lg-8">
                        <textarea id="symptoms" class="form-control" required></textarea>
                    </div>
                </div>
                <!---->
                <div class="form-group row justify-content-end">
                    <div class="col-sm-5">
                        <button type="submit"class="btn btn-success btn-form">
                            Confirm
                        </button>
                    </div>
                </div>
              </form>
          </div>
      </div>
  </div>
      <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    </div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/script.js"></script>
	</body>
</html>