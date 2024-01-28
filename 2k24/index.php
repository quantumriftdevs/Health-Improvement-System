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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	<style>
        .video-about-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .video-container,
        .about-text {
            width: 48%; /* Adjust the width as needed */
            box-sizing: border-box;
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
        }

        .about-text h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.5;
        }

        .autocom-box {
            position: absolute;
            display: none;
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1;
            width: 100%;
        }

        .autocom-box a {
            padding: 10px;
            display: block;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #ccc;
        }

        .autocom-box a:hover {
            background: #f5f5f5;
        }
    </style>
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
							<li class="active">
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
							<li class="has-submenu">
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

        <!-- Home Banner -->
        <section class="section section-search">
            <div class="container-fluid">
                <div class="banner-wrapper">
                    <div class="banner-header text-center">
                        <h1>Search Doctor, Make an Appointment</h1>
                        <p>Discover more about your health</p>
                    </div>

                    <!-- Search -->
                    <div class="search-box">
							<form action="#">
								<div class="form-group search-info search-input">
									<input type="text" class="form-control" placeholder="Clinics, Hospitals, Diseases Etc">
									<div class="autocom-box">
                                    <!-- here list are inserted from javascript -->
                                    </div>
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
					</div>
                    <!-- /Search -->
                    <section class="section section-specialities">
				
						<!-- Video and About Text -->
						<div class="video-about-container">
							<div class="video-container">
								<iframe 
								    width="560" height="315" src="https://www.youtube.com/embed/Qlhyj4V312E?si=hymQemVALKyOeRmj"
									title="YouTube video player" 
									frameborder="0" 
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
									allowfullscreen>
								</iframe>
							</div>
							<div class="about-text">
								<h2>How to Check Blood Pressure at Home</h2>
								<p> <strong> May 19, 2023</strong>
                                Monitoring your blood pressure at home is a critical part of managing high blood pressure or hypertension. Knowing how to check your blood pressure, including the proper steps before and after taking your reading is very important to obtaining the most accurate information</p>
							</div>
						</div>
						<div class="video-about-container">
							<div class="video-container">
							<iframe 
							    width="560" 
								height="315" 
								src="https://www.youtube.com/embed/YAc9NabBJzg?si=TY_U6xnHa7aIa4_W" 
								title="YouTube video player" 
								frameborder="0" 
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
								allowfullscreen></iframe>
							</div>
							<div class="about-text">
								<h2>What are the symptoms of covid-19 or coronavirus?</h2>
								<p> <strong> 3 years ago</strong>
								Coronavirus or covid-19 symptoms range from mild to severe. They’re most likely to be similar to a regular cold, the flu or seasonal allergies; like a fever, headache, fatigue, sore throat and runny nose.</div>
						</div>
						<div class="video-about-container">
							<div class="video-container">
							<iframe 
							width="560" 
							height="315" 
							src="https://www.youtube.com/embed/tXKGasTUxNI?si=AEX89gmng4GDhBip&amp;start=7" 
							title="YouTube video player" 
							frameborder="0" 
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
							allowfullscreen>
						    </iframe>
							</div>
							<div class="about-text">
								<h2>What is Hepatitis B? Signs, Symptoms, #Hepatitis Transmission and How to get #Tested</h2>
								<p> <strong> 5 years ago</strong>
                                Hepatitis B is a liver #infection caused by the #hepatitis B virus (HBV). As one of the most common sexually transmitted diseases (STDs) worldwide, this virus is spread through the blood, semen, or bodily fluids of a person who has the virus; however, it can also be spread from mother to baby at birth. </p>
							</div>
						</div>
						<!-- /Video and About Text -->
			</div>   
		</section>

                </div>
            </div>
        </section>
        <!-- /Home Banner -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/slick.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
