<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Photo &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	

	<div id="fh5co-page">
	
	<div class="aside-toggle btn-circle">
		<a href="#"><span></span><em>About</em></a>
	</div>
	<div class="back-to-home btn-circle">
		<a href="index.php?id_user="><span></span><em>Back</em></a>
	</div>

	<div id="fh5co-aside">
		<div class="image-bg"></div>
		<div class="overlay"></div> 
		<div class="row">
			<div class="col-md-12">
				<div id="fh5co-aside-inner">
					<div class="row" id="fh5co-bio">
						<div class="col-md-12">
							<h2>About Me</h2>
						</div>
						<div class="col-md-6">
							<p>Sint, <a href="#">consectetur</a>, fugit. Sed, blanditiis. Autem quae perferendis totam provident, consequuntur inventore reiciendis vitae suscipit rerum repellendus facere voluptatem tenetur iure praesentium corrupti asperiores eos laborum debitis eaque maiores magnam nisi exercitationem sunt maxime! At eligendi deserunt, iusto natus molestias!</p>
						</div>
						<div class="col-md-6">
							<p>Quas praesentium dolore unde delectus, nemo accusantium, qui ab illum debitis assumenda tempore molestias ipsam, eveniet repellendus officiis in vel, explicabo quos necessitatibus atque doloremque. Quae maiores delectus, magnam nam.</p>
						</div>
						<div class="col-md-12 fh5co-social">
							<a href="#"><i class="icon-envelope"></i></a>
							<a href="#"><i class="icon-twitter"></i></a>
							<a href="#"><i class="icon-linkedin"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-google-plus"></i></a>
						</div>
<div class="col-md-12" style="margin-top: 40px;">
	<p>&copy; 2016 Free HTML5 Template. All Rights Reserved. Designed by <a href="http://gettemplates.co/">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></p>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="fh5co-image-grid">
		

		<div class="grid">
		  <div class="grid-sizer"></div>

		  <?php 
			$connect = mysqli_connect("localhost", "root", "", "xuka_db");
			mysqli_query($connect, "SET NAMES 'utf8'");
			$query = "SELECT * FROM photo where id_album=".$_GET['id'];
			$data = mysqli_query($connect, $query);

			while($row = mysqli_fetch_assoc($data)){
			echo "<div class='grid-item item animate-box' data-animate-effect='fadeIn'>";
		  	echo "	<a href='".$row['link']."' class='image-popup' title='".$row['description']."'>";
			echo "		<div class='img-wrap'>";
			echo "			<img src='".$row['link']."' alt='' class='img-responsive'>";
			echo "		</div>";
			echo "		<div class='text-wrap'>";
			echo "			<div class='text-inner popup'>";
			echo "				<div>";
			echo "					<h2>".$row['title']."</h2>";
			echo "				</div>";
			echo "			</div>";
			echo "		</div>";
			echo "	</a>";
 			echo " </div>";
 		}
			?>
		  
		  
		  

		</div>

		
	</div>

	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Magnific -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Isotope & imagesLoaded -->
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- GSAP  -->
	<script src="js/TweenLite.min.js"></script>
	<script src="js/CSSPlugin.min.js"></script>
	<script src="js/EasePack.min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

