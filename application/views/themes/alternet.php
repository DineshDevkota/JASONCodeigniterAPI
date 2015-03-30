 
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="<?php echo base_url(); ?>assets/themes/alternet/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/jquery.scrollgress.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/skel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/alternet/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/alternet/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/alternet/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/alternet/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/alternet/css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">Alpha</a> by HTML5 UP</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Layouts</a>
							<ul>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li>
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Option One</a></li>
										<li><a href="#">Option Two</a></li>
										<li><a href="#">Option Three</a></li>
										<li><a href="#">Option Four</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Alpha</h2>
				<p>Another fine responsive site template freebie by HTML5 UP.</p>
				<ul class="actions">
					<li><a href="#" class="button special">Sign Up</a></li>
					<li><a href="#" class="button">Learn More</a></li>
				</ul>
			</section>

		<!-- Main -->
			<section id="main" class="container">

				<section class="box special">
					<header class="major">
						<h2>Introducing the ultimate mobile app
						<br />
						for doing stuff with your phone</h2>
						<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
						adipiscing nunc adipiscing. Condimentum turpis massa.</p>
					</header>
					<span class="image featured"><img src="<?php echo base_url(); ?>assets/themes/alternet/img/pic01.jpg" alt="" /></span>
				</section>

				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Magna etiam</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Ipsum dolor</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>Sed feugiat</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Enim phasellus</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div> <div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>
    <div class="row">
	    <?php echo $output;?>
		<?php echo $this->load->get_section('sidebar'); ?>
    </div>
      <hr/>
				</section>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section class="box special">
							<span class="image featured"><img src="<?php echo base_url(); ?>assets/themes/alternet/img/pic02.jpg" alt="" /></span>
							<h3>Sed lorem adipiscing</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section class="box special">
							<span class="image featured"><img src="<?php echo base_url(); ?>assets/themes/alternet/img/pic03.jpg" alt="" /></span>
							<h3>Accumsan integer</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>

		<!-- CTA -->
			<section id="cta">

				<h2>Sign up for beta access</h2>
				<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

				<form>
					<div class="row uniform 50%">
						<div class="8u 12u(mobilep)">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="4u 12u(mobilep)">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>

			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

	</body>
</html>
