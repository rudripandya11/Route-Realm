<?php include('assets/includes/header.php');?>
<!-- #masthead --><script src="../www.google.com/recaptcha/api.js" async defer></script>
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Quick <span>Inquiry</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li>Quick Inquiry</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<p class="text-justify wow fadeInUp">Gujarat Tour Guide will help you in making your journey pleasant as it is an Official Tour Operator and Travel Partner from Gujarat Tourism. Let us make plans for you and you shall just ease down because we are here to handle all your situations and queries.</p>
			
			<div class="formWrap">
				<form method="post" action="updata.php">
					<div class="col21">
						<label for="name">Name*</label>
						<input id="name" name="name" required type="text">		
					</div>
					<div class="col22">
						<label for="email">Email*</label>
						<input id="email" name="email" required type="email">
					</div>
					<div class="clear"></div>
					<div class="col21">
						<label for="phone">Contact *</label>
						<input id="phone" name="phone" type="tel" required>
					</div>
					<div class="col22">
						<label for="city">City</label>
						<input id="city" name="city" type="text">
					</div>
					<div class="clear"></div>
					<h3>Help Me to plan my travel</h3>
					<div>Interested In :</div>
					<div class="col31 sm-mb0">
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype1" class="css-checkbox" value="Archeological Site" />
							<label for="placetype1" class="css-label">Archeological Site</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype2" class="css-checkbox" value="Beaches" />
							<label for="placetype2" class="css-label">Beaches</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype3" class="css-checkbox" value="Bird Sanctuary" />
							<label for="placetype3" class="css-label">Bird Sanctuary</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype4" class="css-checkbox" value="Eco Camp Site" />
							<label for="placetype4" class="css-label">Eco Camp Site</label>
						</div>
					</div>
					<div class="col32 sm-mb0">
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype5" class="css-checkbox" value="Heritage" />
							<label for="placetype5" class="css-label">Heritage</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype6" class="css-checkbox" value="Hill Station" />
							<label for="placetype6" class="css-label">Hill Station</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype7" class="css-checkbox" value="Palace" />
							<label for="placetype7" class="css-label">Palace</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype8" class="css-checkbox" value="Museum" />
							<label for="placetype8" class="css-label">Museum</label>
						</div>
					</div>
					<div class="col33">
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype9" class="css-checkbox" value="Pilgrim Center" />
							<label for="placetype9" class="css-label">Pilgrim Center</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype10" class="css-checkbox" value="Stepwell" />
							<label for="placetype10" class="css-label">Stepwell</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype11" class="css-checkbox" value="Weekend Gateway" />
							<label for="placetype11" class="css-label">Weekend Gateway</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="interested_place[]" id="placetype12" class="css-checkbox" value="Wildlife" />
							<label for="placetype12" class="css-label">Wildlife</label>
						</div>					
					</div>
					<div class="clear"></div>					
					<div class="boxspacer"></div>					
					<div class="col21">
						<label for="city">On or Around : </label>
						<input id="onoraround" name="onoraround" type="date">
					</div>
					<div class="col22">
						<label for="daytostay">Days to Stay:</label>
						<input id="daytostay" name="daytostay" type="number">
					</div>
					<div class="clear"></div>
					
					<label>Along With: </label>
					<div class="col21">					
						<select id="person" name="person" class="textbox valid">
							<option value="0">--Adults :--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="group">Group</option>
						</select>
					</div>
					<div class="col22">
						<select id="child" name="child" class="textbox">
							<option value="0">--Child :--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="clear"></div>
					
					<label for="message">Tentative travel plan & requirements :</label>
					<textarea id="message" name="message" placeholder="Any Plans?"></textarea>

					<div class="g-recaptcha" data-sitekey="6LfJR_ApAAAAAOFXCoZJt7Ug4R9F3qlWJdfAD8vb"></div>

					
					<div class="formBtn">
						<input value="Send" type="submit" class="btn-default"  onclick="getIntegerPaise();">
					</div>

				</form>
			</div>
		</div>
		<aside id="secondary" class="wow fadeInRight">			
	<!--<div class="widgetbox bg">
		<a href="gallery"><img src="images/gallery-th.jpg" alt="Gallery" /></a>
	</div>
	<div class="widgetbox bg">
		<a href="gujarat-travel-packages"><img src="images/package-th.jpg" alt="Package" /></a>
	</div>-->
	<div class="widgetbox">
		<h3>Exclusive Gujarat Packages</h3>
		<div class="sidebarPackage">
			<div class="imgleft"><a href="saurashtra-darshan.html">
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	
	function getIntegerPaise() {
												var rateInRupees = document.getElementById('name').value;
												var rateInPaise = parseInt(rateInRupees) * 100;
												openRazorpay(rateInPaise);
											}
function openRazorpay(rate) {
											
												var options = {
													"key": "rzp_test_I3yDb9cFK47THw",
													"amount": rate , // amount in paise (change according to your requirements)
													"currency": "INR",
													"name": "Hotel Booking",
													"description": "Payment for hotel booking",
													"image": "https://example.com/your_logo.png",
													"handler": function (response) {
														// handle the payment response
														alert(response.razorpay_payment_id);
													},
												};
												var rzp = new Razorpay(options);
												rzp.open();
											}

	function show_spinner(){
		jQuery("#WAIT,#COVER").toggle();
	}
	function validate(){
		show_spinner();
		var name = jQuery("#name").val();
		var email = jQuery("#email").val();
		var phone = jQuery("#phone").val();

		/** to check soldout date **/
		var flag = 0;
		if(name=="" && email=="" && phone==""){
			alert("Please Enter Require Data.");
			show_spinner();
			return false;
		}else if(name==""){
			alert("Please Enter Full Name.");
			show_spinner();
			return false;
		}else if(email==""){
			alert("Please Enter Email.");
			show_spinner();
			return false;
		}else if(phone==""){
			alert("Please Enter Contact.");
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