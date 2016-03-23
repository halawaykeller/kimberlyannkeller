<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Home";
/*load head-utils.php*/
require_once("head-utils.php");
require_once("navbar.php");

?>

<body>
	<div>

		<!--contains header and large mountain image-->
		<div class="bk-home bk-center container-fluid">

			<div class="row" id="headline">
				<div class="col-sm-12 text-center" id="head-column">
					kimberly ann keller
				</div>
			</div>
			<div class="row row-margin-lg">
				<div class="col-sm-12 text-center">
					<i class="home-icon fa fa-angle-double-down"></i>
				</div>
			</div>
		</div>
	<!--contains 3 key selling point containers-->
		<div class="container-fluid">
			<div class="bk-white row text-center">
				<!--point 1-->
				<div class="col-sm-4 txt-box">
					<img class="icon-size" src="img/devices.svg" alt="multiple devices">
					<h2 class="h-home">Mobile Ready</h2>
					<hr />
					<p class="p-home">I build with mobile devices at the forefront of my design process.
					Let's be real, we're all on our phones. </p>
				</div>
				<!--point 2-->
				<div class="col-sm-4 txt-box">
					<img class="icon-size" src="img/coding.svg" alt="browser with code">
					<h2 class="h-home">Custom Build</h2>
					<hr />
					<p class="p-home">Each product, person, and website is different. I create modern, on-brand websites that reflect
					your unique online message.</p>
				</div>
				<!--point 3-->
				<div class="col-sm-4 txt-box">
					<img class="icon-size" src="img/key.svg" alt="key">
					<h2 class="h-home">Secure Development</h2>
					<hr />
					<p class="p-home">I can integrate eCommerce software, build custom APIs, and create the fully functional
					backend you've been looking for while maintaing the highest security standards to keep your data safe.</p>
				</div>
			</div>
		</div>

	<!--start code for a cause block-->
		<div class="container-fluid">
			<div class="row bk-white text-center">
				<div class="col-sm-12 txt-box">
					<h2 class="h-home">Let's code for a cause. </h2>
					<p class="p-home">There are a lot of web developers out there. However, if I build your website
						then 15% the proceeds go to non-profit organizations in need.
					</p>
					<h4 class="h-home">Check out some of the organizations I support</h4>
					<i class="fa fa-angle-double-down"></i>
				</div>
			</div>
		</div>
	<!--contains logos for organizations I support-->
	<div class="container-fluid bk-cactus">
		<div class="row bk-black">
			<div class="col-md-3 txt-box">
				<a href="http://ctkf.com/" target="_blank">
					<img class="img-responsive media-icon" src="img/ctklgo.png" alt="CTKF Logo">
				</a>
			</div>
			<div class="col-md-3 txt-box">
				<a href="https://animalhumanenm.org/" target="_blank">
					<img class="img-responsive media-icon" src="img/animalhumane.png" alt="Animal Humane Logo">
				</a>
			</div>
			<div class="col-md-3 txt-box">
				<a href="https://http://www.extra-life.org/" target="_blank">
					<img class="img-responsive media-icon" src="img/xtra-life-white.png" alt="Extra Life Logo">
				</a>
			</div>
			<div class="col-md-3 txt-box">
				<h3 class="text-center logo-txt">Have an organization in mind? Tell me where you'd like to donate.</h3>
			</div>
		</div>
	</div>

	<!--portfolio begins-->

	<div class="container-fluid">
		<a name="portfolio"></a>
		<!--portfolio title-->
		<div class="row row-margin text-center">
				<h1 class="h1-home">Portfolio</h1>
			<i class="home-icon fa fa-angle-double-down"></i>
		</div>
	</div>
	<div class="container-fluid">
		<!--Bread Basket project-->
		<div class="row row-margin bk-white">
			<div class="col-md-4">
				<h2 class="h-home">Bread Basket</h2>
			</div>
		</div>
		<div class="row bk-white">
			<div class="col-md-4">
				<p class="p-home">About This Project</p>
				<p>Bread Basket is a peer to peer web and mobile application that connects
				grocery stores and restaurants who have consumable but otherwise unsellable goods with homeless shelters and food banks
				in need. </p>
			</div>
			<div class="col-md-4">
				<p class="p-home">Technology Used:</p>
				<ul>
					<li>AngularJS</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML5</li>
					<li>CSS3</li>
					<li>Ionic Framework</li>
				</ul>
			</div>
			<div class="col-md-4">
				<p class="p-home">Visit the Live Site</p>
				<p class="p-home">Download the Mobile App</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 bk-white2">
				<a href="img/breadbasket1.png" class="swipebox" title="Bread Basket">
					<img class="img-responsive img-swipebox" src="img/breadbasket1.png" alt="image">
				</a>
			</div>
			<div class="col-md-4 bk-black bk-white2">
				<a href="img/breadbasket2.png" class="swipebox" title="Bread Basket">
					<img class="img-responsive img-swipebox" src="img/breadbasket2.png" alt="image">
				</a>
			</div>
			<div class="col-md-4 bk-black bk-white2">
				<a href="img/breadbasket6.png" class="swipebox" title="Bread Basket">
					<img class="img-swipebox img-responsive" src="img/breadbasket6.png" alt="image">
				</a>
			</div>
		</div>

	</div> <!-- end portfolio container-->


		<!--about begins-->

		<div class="container-fluid">
			<a name="about"></a>
			<!--about title-->
			<div class="row row-margin text-center">
					<h1 class="h1-home">About</h1>

				<i class="home-icon fa fa-angle-double-down"></i>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row row-margin bk-white">
				<div class="col-md-4 txt-box text-center">
					<img src="img/headshot2.png" class="img-responsive img-circle" alt="picture of me">
				</div>

					<div class="col-md-4 txt-box">
						<h2 class="h-home">Kimberly Keller</h2>
						<p class="p-home">Hello, world!</p>
						<p>I'm a full-stack web developer and coffee lover. Born and raised in New Mexico, I enjoy the outdoors, puttering
						around in my garden. I'm passionate about building cool stuff, giving back to the community, and bringing beauty and
						functionality to our tech experiences. </p>
					</div>
					<div class="col-md-4 txt-box">
						<p class="p-home">Languages & Skills</p>
						<ul>
							<li>PHP</li>
							<li>MySQL</li>
							<li>AngularJS</li>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>Ionic Framework</li>
							<li>Image editing</li>
							<li>Content writing</li>
						</ul>
					</div>

			</div>
		</div>

		<!--start contact form-->
		<a name="contact"></a>
		<div class="container-fluid bk-road">
			<div class="row row-margin-btm">
				<div class="col-md-4 txt-box text-center">
					<h2 class="h-home">Let's Get Started</h2>

				</div>
				<div class="col-md-8 txt-box">
					<form>
						<div class="form-group">
							<label class="p-home white-txt" for="name">Name</label>
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<label class="p-home white-txt" for="email">Email</label>
							<input type="email" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<label class="p-home white-txt" for="message">Message</label>
							<textarea placeholder="Your Message" class="form-control" name="message" id="message" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-lg">Email Me</button>
					</form>
				</div>
			</div>

		</div>


	</div> <!--.sfooter-->


	<?php require_once("footer.php")?>
</body>
