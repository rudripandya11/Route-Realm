<?php include('assets/includes/header.php');?>
<!-- #masthead -->
<script src="../www.google.com/recaptcha/api.js" async defer></script>
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Contact <span>Us</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li>Contact Us</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<p class="text-justify wow fadeInUp">At Route Realm, we're passionate about helping with all your travel inquiries. Our dedicated team is always ready to assist, whether you're seeking information about a destination in Gujarat, exploring our ready-made packages, or looking to customize your itinerary. Whatever your needs, feel free to reach out, and we'll ensure your travel experience is perfectly tailored to you. </p>
			<p class="text-justify wow fadeInUp">Please fill out the form below, and we'll get in touch with you as soon as possible.</p>
			
			<div class="formWrap">
				<form method="post" action="indata2.php">
					<div class="col21">
						<label for="firstname">First Name*</label>
						<input id="firstname" name="firstname" required type="text">		
					</div>
					<div class="col22">
						<label for="lastname">Last Name*</label>
						<input id="lastname" name="lastname" required type="text">
					</div>
					<div class="clear"></div>
					<div class="col21">
						<label for="email">Email*</label>
						<input id="email" name="email" required type="text">
					</div>
					<div class="col22">
						<label for="phone">Phone</label>
						<input id="phone" name="phone" type="tel">
					</div>
					<div class="clear"></div>
					<label for="message">Message*</label>
					<textarea id="message" name="message" required></textarea>
					<div class="g-recaptcha" data-sitekey="6LfJR_ApAAAAAOFXCoZJt7Ug4R9F3qlWJdfAD8vb"></div>
					<div class="formBtn">
						<input value="Send Message" type="submit" class="btn-default"  onclick="return validate();">
					</div>
				</form>
			</div>
		</div>
		<aside id="secondary" class="wow fadeInRight">			
	<div class="widgetbox">
		<h3>Exclusive Gujarat Packages</h3>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-darshan.php">
			<img src="images/package-th-somnath.jpg" alt="Somnath" />
			</a></div>
			<div class="right">
				<p><a href="saurashtra-darshan.php">Ahmedabad - Dwarka - Somnath</a></p>
				<p><strong>Tour Duration</strong>: 3N/4D</p>
				<p><a href="saurashtra-darshan.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-dwarka-somnath-gir.php">
			<img src="images/package-th-vijay-vilas.jpg" alt="Ahmedabad - Dwarka - Somnath - Sasan Gir" />
			</a></div>
			<div class="right">
				<p><a href="saurashtra-dwarka-somnath-gir.php"> Ahmedabad - Dwarka - Somnath - Sasan Gir  </a></p>
				<p><strong>Tour Duration</strong>: 4N/5D</p>
				<p><a href="saurashtra-dwarka-somnath-gir.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-dwarka-somnath-gir-diu.php">
			<img src="images/package-th-white-rann.jpg" alt="Ahmedabad - Dwarka - Somnath - Sasan Gir - Diu" />
			</a></div>
			<div class="right">
				<p><a href="saurashtra-dwarka-somnath-gir-diu.php">Ahmedabad - Dwarka - Somnath - Sasan Gir - Diu</a></p>
				<p><strong>Tour Duration</strong>: 5N/6D</p>
				<p><a href="saurashtra-dwarka-somnath-gir-diu.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-darshan-with-sou.php">
			<img src="images/package-th-statue-of-unity.jpg" alt="Ahmedabad - Dwarka - Somnath - Diu - Vadodara - Ahmedabad " />
			</a></div>
			<div class="right">
				<p><a href="saurashtra-darshan-with-sou.php">Ahmedabad - Dwarka - Somnath - Diu - Vadodara - Ahmedabad </a></p>
				<p><strong>Tour Duration</strong>: 6N/7D</p>
				<p><a href="saurashtra-darshan-with-sou.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-darshan-ahmedabad.php">
			<img src="images/package-th-dwarka.jpg" alt="Ahmedabad - Dwarka - Somnath - Sasan Gir  - Diu - Vadodar - Ahmedabad" />
			</a></div>
			<div class="right">
				<p><a href="saurashtra-darshan-ahmedabad.php">Ahmedabad - Dwarka - Somnath - Sasan Gir  - Diu - Vadodar - Ahmedabad </a></p>
				<p><strong>Tour Duration</strong>: 7N/8D</p>
				<p><a href="saurashtra-darshan-ahmedabad.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="holiday-tour-package-saurashtra-kutch-tour.php">
			<img src="images/package-th-mandvi-beach.jpg" alt="Ahmedabad - Bhuj - Mandvi - Rann Of Kutch - Dwarka - Somnath - Sasan Gir - Ahmedabad" />
			</a></div>
			<div class="right">
				<p><a href="holiday-tour-package-saurashtra-kutch-tour.php">Ahmedabad - Bhuj - Mandvi - Rann Of Kutch - Dwarka - Somnath - Sasan Gir - Ahmedabad</a></p>
				<p><strong>Tour Duration</strong>: 8N/9D</p>
				<p><a href="holiday-tour-package-saurashtra-kutch-tour.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="adventurous-gujarat-tour-packages.php">
			<img src="images/package-th-sasan-gir.jpg" alt="Ahmedabad - Bhuj - Mandvi - Rann Of Kutch - Dwarka - Somnath - Sasan Gir - Diu -  Ahmedabad" />
			</a></div>
			<div class="right">
				<p><a href="adventurous-gujarat-tour-packages.php">Ahmedabad - Bhuj - Mandvi - Rann Of Kutch - Dwarka - Somnath - Sasan Gir - Diu -  Ahmedabad</a></p>
				<p><strong>Tour Duration</strong>: 9N/10D</p>
				<p><a href="adventurous-gujarat-tour-packages.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="dwarka-tour-packages-from-ahmedabad.php">
			<img src="images/package-th-dwarka.jpg" alt="Ahmedabad - Dwarka - Ahmedabad" />
			</a></div>
			<div class="right">
				<p><a href="dwarka-tour-packages-from-ahmedabad.php">Experience The Spiritual Dwarka With Our Dwarka Tour Package </a></p>
				<p><strong>Tour Duration</strong>: 2N/3D</p>
				<p><a href="dwarka-tour-packages-from-ahmedabad.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="dwarka-tour-packages-from-ahmedabad.php">
			<img src="images/package-th-somnath.jpg" alt="Ahmedabad - Dwarka - Somnath - Ahmedabad" />
			</a></div>
			<div class="right">
				<p><a href="dwarka-somnath-tour-from-ahmedabad.php">Discover The Breath-Taking Dwarka Somnath Tour Package From Ahmedabad</a></p>
				<p><strong>Tour Duration</strong>: 3N/4D</p>
				<p><a href="dwarka-somnath-tour-from-ahmedabad.php" class="btn-default btn-small">Read More</a></p>
			</div>
		</div>
	</div>		   
</aside>
<div class="clear"></div>	</div>
</section>
<div id="COVER" class="div_fullscreen" style="z-index:9998; display:none"></div>
<div id="WAIT" class="redMediumBold" style="display:none; z-index:9999; position:fixed; background-color:#fff; width:100%; border:1px solid #09F; text-align:center; left:0; right:0; top:0; bottom:0;opacity:.9">
	<div class="loaderntxt" style="top:49%; left:48%; position:absolute;">
		<img src="images/wait.gif" alt="waiting" /><br /><br/>
		<strong style="font-size:25px">Loading.....</strong><br/><br/><br/><br/>
	</div>
</div>
<script>
	function show_spinner(){
		jQuery("#WAIT,#COVER").toggle();
	}
	function validate(){
		show_spinner();
		var firstname = jQuery("#firstname").val();
		var lastname = jQuery("#lastname").val();
		var email = jQuery("#email").val();
		var phone = jQuery("#phone").val();
		var message = jQuery("#message").val();

		/** to check soldout date **/
		var flag = 0;
		if(firstname=="" && lastname=="" && email=="" && message==""){
			alert("Please Enter Require Data.");
			show_spinner();
			return false;
		}else if(firstname==""){
			alert("Please Enter First Name.");
			show_spinner();
			return false;
		}else if(lastname==""){
			alert("Please Enter Last Name.");
			show_spinner();
			return false;
		}else if(email==""){
			alert("Please Enter Email.");
			show_spinner();
			return false;
		}else if(message==""){
			alert("Please Enter Message.");
			show_spinner();
			return false;
		}else if(email!=""){
			var atpos=email.indexOf("@");
			var dotpos=email.lastIndexOf(".");
			if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
				alert("Please Provide Valid Email");
				jQuery("#email").focus();
				show_spinner();
				return false;
			}
		}
		var response = grecaptcha.getResponse();
		if (!response) {
			alert('Please complete the reCAPTCHA challenge.');
			show_spinner();
			return false; 
		}
	}
</script>
<?php include('assets/includes/footer.php');?>