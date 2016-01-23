<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Home";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("navbar.php");

?>

<body class="sfooter">
	<div class="mnt-bg sfooter-content">
		<!--contains header and large mountain image-->
		<div class="container-fluid">

			<div class="row" id="headline">
				<div class="col-sm-12 text-center" id="head-column">
					kimberly ann keller
				</div>
			</div>
			<div class="row"">
				<div class="col-sm-12 text-center">
					<i id="home-icon" class="fa fa-angle-double-down"></i>
				</div>
			</div>
		</div>
	<!--contains 3 key selling point containers-->
		<div class="bk-white container-fluid">
			<div class="row text-center">
				<div class="col-sm-4">
					<h2>Responsive Design</h2>
					<hr />
					<p>I build with mobile devices at the forefront of my design process.
					Let's be real, we're all on our phones. </p>
				</div>
				<div class="col-sm-4">
					<h2>Custom Build</h2>
					<hr />
					<p>I'm part artist, part analyst. I build beautiful, on-brand websites.</p>
				</div>
				<div class="col-sm-4">
					<h2>Full Stack Dev</h2>
					<hr />
					<p>I can integrate eCommerce software, build custom APIs, and create the fully functional
					backend you've been looking for.</p>
				</div>
			</div>
			<hr />
		</div>
		<div class="container-fluid bk-white">
			<div class="row text-center">
				<h2>Alright, so why are you different?</h2>
				<p>There are a lot of web developers out there. However, if I build your website
					then all the proceeds go to non-profit organizations in need.
				</p>
				<h3>Yes. All of it.</h3>
				<p>Check out some of the organizations I support</p>
				<i class="fa fa-angle-double-down icon-sm"></i>
			</div>
		</div>

	<div class="container-fluid bk-black">
		<div class="row">
			<div class="col-md-3">
				<a href="http://ctkf.com/" target="_blank">
					<img class="img-responsive" src="img/ctklgo.png" alt="CTKF Logo">
				</a>
			</div>
			<div class="col-md-3 text-center">
				<a href="https://animalhumanenm.org/" target="_blank">
					<img class="img-responsive" src="img/animalhumane.png" alt="Animal Humane Logo">
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://http://www.extra-life.org/" target="_blank">
					<img class="img-responsive" src="img/xtra-life-white.png" alt="Extra Life Logo">
				</a>
			</div>
			<div class="col-md-3">
				<h3 class="text-center logo-txt">Have an organization in mind? Tell me where you'd like to donate.</h3>
			</div>
		</div>
	</div>
	<!--contains portfolio swipe box-->

		<div class="container-fluid">
			<div class="row text-center">

			</div>
		</div>

	</div>
	<?php require_once("footer.php")?>
</body>
