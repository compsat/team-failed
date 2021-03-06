
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/nav-bar.css">

	<link rel="stylesheet" type="text/css" href="css/image-holder.css">

	<style>
		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 80%;
		}

		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
		</style>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

<?php

include ('../session.php');
?>


	<body>
		<header id="fh5co-header">
			
<nav class="nav-bar">
  <ul>
    <div class="container">
      <li><a  href="index.php"><img src="logo.png" style="height:50px;"></a></li>
      <li><a  href="#home">Pilipino : <?php echo $login_session;?></a></li>
      <li><a  href="#">Personnal Blog</a></li>
      <li><a  href="">Place to go</a></li>
      <li class="pull-right"><a  href="../logout.php">Logout</i></a></li>
    </div>
  </ul>
</nav>


		</header>
	<div id="fh5co-wrap">
		<header id="fh5co-header">
	
<nav class="nav-bar">
  <ul>
    <div class="container">
      <li><a  href="index.php"><img src="logo.png" style="height:50px;"></a></li>
      <li><a  href="#">Pilipino :<?php echo $login_session;?></a></li>
      <li><a  href="#">Personnal Blog</a></li>
      <li><a  href="#">Place to go</a></li>
      <li class="pull-right"><a  href="../logout.php" id="myBtn">Logout</i></a></li>
    </div>
  </ul>
</nav>


		</header>

		<div class="fh5co-hero" style="background-image: url(images/Philippines-Guide.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">"Pilipinas: Magbayanihan tayo"</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<h2><b>Mag upload ng panibago<b></h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">

<?php
$sql = mysql_query("SELECT * FROM account WHERE username = '$login_session'");
$row = mysql_fetch_array($sql);
?>
						
<form method="post" action="addvideo.php" enctype="multipart/form-data">

<input type="hidden" name="name" value='<?php echo $login_session;?>'>
<!-- <input type="file" name="video_name" ><br>
<textarea name="caption" placeholder="description here ..." class="form-control"></textarea>
<input type="hidden" name="status" value="0">
<br>
<input type="submit" name="upd" class="bnt btn-primary" value="Post">
 -->


<input type="file" name="fileToUpload"><br>
<textarea name="caption" placeholder="Type here" class="form-control" style="height:310px"></textarea>
<input type="hidden" name="status" value="0"><br>
<input type="submit" value="Upload" name="upd" class="btn btn-primary">


</form>

					</div>
				

<h2>Ang mga iyong na iupload</h2>


<?php

$con = mysql_connect('localhost','root','');
$sel = mysql_select_db('demo',$con);

$sql = mysql_query("SELECT caption,name,video_name, 



       (CASE WHEN status = 0 THEN 'Pending'
             WHEN status = 1 THEN 'Approval'
       
       END) AS status
       FROM

 video WHERE name = '$login_session' ")or die("".mysql_error());
while ($row = mysql_fetch_array($sql)) {


echo "
<h4 style='float:right'>Status : ".$row['status']."</h4>

<p style='float:left'>".$row['caption']."</p>

<br>
<video width='550' height='300' controls>
		<source src='../videos/".$row['video_name']."' type='video/mp4'>
		</video>
		<br>

		";

	
}
?>








				</div>
<br><br>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<h2><b>Bakit kailangan malaman ang kasaysayan ng isang lugar?<b></h2>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<p>-Hindi natin malalaman ang halaga ng isang bagay kung hindi natin malalaman ang pinagmulan nya</p>
						<p>-Bakit natin kailangan ingatan ang lugar na ito</p>
					</div>
				</div><br><br>
				<h1><i></B>#bakitngapepe</i></h1><br>

				<div class="col-md-6">
					<h2>Katangian ng pinoy?</h2>
					<div class="image-container">
					  <img src="images/9784485_orig.jpg" alt="Avatar" class="image">
					  <div class="overlay">
					    <div class="text"><a href="pages/katangian.php">Siyasatin</a></div>
					  </div>
					</div>		
				</div>
				<div class="col-md-6">
					<h2>Sino nga ba si pepe?</h2>
					<div class="image-container">
					  <img src="images/icon-logo.jpg" alt="Avatar" class="image">
					  <div class="overlay">
					    <div class="text">Siyasatin</div>
					  </div>
					</div>
				</div>
				<div class="col-md-6"><br><br>
					<h2>Bakit ang Pilipino kilala <br> sa bayanihan?</h2>
					<div class="image-container">
					  <img src="images/bayanihan.jpg" alt="Avatar" class="image">
					  <div class="overlay">
					    <div class="text">Siyasatin</div>
					  </div>
					</div>
				</div>
				<div class="col-md-6"><br><br>
					<div class="container">
						<img src="images/share-story.jpg" alt="Avatar" style="width:auto; height:250px;"><br><br>
						<p>If you have story . Just <a href="">send to us.</a></p>
					</div>
				</div>
			</div>
		</div>
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <p>Some text in the Modal..</p>
		  </div>

		</div>

	</div> <!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>About Us</h3>
					<p>This site provides information on how beautiful the Philippines is.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Follow Us</h3>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
						<li><a href="#"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
						<li><a href="#"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
						<li><a href="#"><i class="icon-google"></i> <span>Google Plus</span></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2018 BLUEHACK . Team FAILED </small> 
				</div>
			</div>
		</div>
	</footer>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

