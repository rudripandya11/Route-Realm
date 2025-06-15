<?php include('assets/includes/header.php');?>
<!-- #masthead --><link rel="stylesheet" type="text/css" href="css/timeline.css">
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Make Unforgettable Memories On Your  <span>Saurashtra Darshan</span> From Ahmedabad
</h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="gujarat-travel-packages.php">Packages</a></li>
		<li>Suarashtra Darshan from Ahmedabad</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<h2 class="wow fadeInUp mb10">Ahmedabad - Dwarka - Somnath</h2>
			<h3 class="wow fadeInUp m0"><img src="images/touricon.png" alt="" width="34" /> 3N/4D Temple and Beach Tour </h3>
			<p class="text-justify wow fadeInUp">Saurashtra is a special part of Gujarat on the western side. It is famous for its colorful folk culture. The music, dances, art, and tasty foods are loved by all. Long ago, Saurashtra was an important place for business and trade. Many ports were there on the coastline for ships to come.</p>
			<p class="text-justify wow fadeInUp">Choosing Route Realm's Saurashtra Darshan from Ahmedabad tour package will be an enlightening journey for sure. The nature is beautiful in Saurashtra and the calm beaches and pretty hills will absolutely sway you away. Saurashtra has so much for you to see, hear, and taste. On the Saurashtra Darshan tour from Ahmedabad, you can witness bright traditions and try their delicious local foods. </p>
			<p class="text-justify wow fadeInUp">Embark on your Saurashtra Darshan from Ahmedabad with the Route Realm to make unforgettable memories. </p>
			
			<script src="../www.google.com/recaptcha/api.js" async defer></script>
<div class="inquiryWrap">
	<span id="inquiry" style="position:absolute; top:-100px;">&nbsp;</span>
	<h2 class="text-center wow fadeInDown">Inquiry Now<div class="flag"><span class="line"></span></div></h2>
	<div class="formWrap wow fadeInUp">
		<form method="post" action="indata.php">
			<div class="flexForm">
				<div class="col">
					<label for="name">Name <span class="asterisk">*</span></label>
					<input id="name" name="name" required type="text">		
				</div>
				<div class="col">
					<label for="email">Email <span class="asterisk">*</span></label>
					<input id="email" name="email" required type="email">
				</div>

				<div class="col">
					<label for="phone">Phone <span class="asterisk">*</span></label>
					<input id="phone" name="phone" type="tel" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
				</div>																											
			</div>
			<div class="text-center" style="display:flex; justify-content: center;"><div class="g-recaptcha" data-sitekey="6LfJR_ApAAAAAOFXCoZJt7Ug4R9F3qlWJdfAD8vb"></div></div>
			
			<div class="col formBtn text-center">
				<input value="Submit" type="submit" class="btn-default"  onclick="return validate();">
			</div>
		</form>
	</div>
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
			var name = jQuery("#name").val();

			var email = jQuery("#email").val();
			var phone = jQuery("#phone").val();
			var inquiryfor = jQuery("#inquiryfor").val();

			/** to check soldout date **/
			var flag = 0;
			if(name=="" && email==""&& phone==""){
				alert("Please Enter Require Data.");
				show_spinner();
				return false;
			}else if(name==""){
				alert("Please Enter Name.");
				show_spinner();
				return false;
			}else if(email==""){
				alert("Please Enter Email.");
				show_spinner();
				return false;
			}else if(phone==""){
				alert("Please Enter Phone.");
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

	<div class="clear"></div>
</div>			<h3 class="wow fadeInUp">Best Places To Visit On The Saurashtra Tour From Ahmedabad</h3>
			<ul class="fa-ul mt20 wow fadeInUp">
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Dwarkadhish Temple:</strong> This grand temple in Dwarka is dedicated to Lord Krishna and is a major pilgrimage site.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bet Dwarka:</strong> It is a beautiful island off the coast of Dwarka, known for its peaceful atmosphere and ancient temples.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nageshwar Jyotirlinga:</strong> This is one of the twelve revered Jyotirlingas (sacred lingams) of Lord Shiva.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Rukmani Temple:</strong> This temple in Dwarka is dedicated to Rukmani, the principal wife of Lord Krishna.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Shivrajpur Beach:</strong> It is a serene and picturesque beach near Dwarka, perfect for relaxation and enjoying the coastal beauty.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Gandhi Ashram, Porbandar:</strong> This ashram in Porbandar is the birthplace of Mahatma Gandhi and holds great historical significance.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Sudama Temple, Porbandar:</strong> This temple in Porbandar is dedicated to Lord Krishna's friend, Sudama.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Somnath Mahadev Jyotirlinga:</strong> This ancient temple in Somnath is one of the most sacred Jyotirlinga shrines and a revered pilgrimage site.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bhalka Tirth:</strong> This spiritual site in Somnath is known for its holy water tank and is believed to have healing powers.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Triveni Sangam:</strong> It is the confluence of three rivers (Hiranya, Kapila, and Saraswati) near Somnath, considered sacred by Hindus. </li>
				</ul>
				<a class="btn-default btn-small wow fadeInUp mb20" href="inquiry.php">Join our Saurashtra tour!</a>
			
			
			<section class="cd-timeline js-cd-timeline">
				<div class="container container--lg cd-timeline__container">
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 1</h2>
							<p><strong>Arrival and Transfer to Dwarka</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Pick-up from Ahmedabad/Rajkot/Jamnagar Airport/Railway Station</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drive to Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check-in at the hotel in Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka</li><br><br><br>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-dwarka.jpg" alt="" /></span>
							
							 </div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--movie">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 2</h2>
							<p><strong>Exploring Dwarka</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Begin the day with a delicious breakfast</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the iconic Dwarkadhish Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Explore Bet Dwarka, an island off the coast of Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Nageshwar Jyotirlinga and Rukmani Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Relax at the beautiful Shivrajpur Beach</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka</li>
								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/place-dwarkadhish-temple.jpg" alt="" /></span>						
							</div>							
				  
						</div> <!-- cd-timeline__content -->

					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 3</h2>
							<p><strong>Porbandar and Somnath</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Enjoy breakfast and check out from the hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Gandhi Ashram and Sudama Temple in Porbandar</li>
								<li><i class="fa-li fa fa-check-square-o"></i>In the evening, witness the mesmerizing Somnath Mahadev Jyotirlinga</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check-in at the hotel in Somnath</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Somnath</li>						
								
							</ul>
							<br><br><br>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-somnath.jpg" alt="" /></span>						
							</div>							

				 
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--location">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 4</h2>
							<p><strong>Departure</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Start the day with a hearty breakfast</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Bhalka Tirth and witness the holy Triveni Sangam</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Return journey to Ahmedabad</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drop-off at the Railway Station/Airport</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Saurashtra Darshan from Ahmedabad tour ends with sweet memories </li>
																
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-airport.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
	
				</div>
				<div class="text-center">
					<a class="btn-default btn-small clear wow fadeInUp mt20" href="inquiry.php">Plan your trip now!</a>
				</div>
			</section> <!-- cd-timeline -->
			<script src="js/timeline.js"></script>
			<div class="bg-f6f6f6 p20 mt20">
			<h3 class="mt0 wow fadeInDown">Things To Do On <span class="text-yellow">Saurashtra Darshan Tour Package</span> From Ahmedabad</h3>
			<p class="text-justify wow fadeInUp mb10"><strong>Weekend Getaways:</strong></p>
			<ul class="fa-ul wow fadeInUp">
				<li><i class="fa-li fa fa-check-square-o"></i>Spend a fun weekend in Dwarka, feeling peaceful at the holy places and enjoying the beautiful Shivrajpur Beach.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Visit the famous Somnath Mahadev Temple and other holy sites like Bhalka Tirth and Triveni Sangam on your Saurashtra Darshan tour package from Ahmedabad.</li>
			</ul>
			<p class="text-justify wow fadeInUp mb10"><strong>Museums:</strong></p>
			<ul class="fa-ul wow fadeInUp">
				<li><i class="fa-li fa fa-check-square-o"></i>Go to the Sudama Memorial Museum in Porbandar to learn about the life story of Sudama and Lord Krishna's friendship.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Visit the Gandhi Smriti Museum in Porbandar to know more about Mahatma Gandhi's life and teachings.</li>
			</ul>
			<p class="text-justify wow fadeInUp mb10"><strong>Golf Tourism:</strong></p>
			<ul class="fa-ul wow fadeInUp">
			
				<li><i class="fa-li fa fa-check-square-o"></i>Play a round of golf at the Dwarka Golf Course, surrounded by green gardens and nice views as an activity on your Saurashtra Darshan tour package from Ahmedabad.</li>
			</ul>
			<p class="text-justify wow fadeInUp mb10"><strong>Art & Craft:</strong></p>
			<ul class="fa-ul wow fadeInUp">
				<li><i class="fa-li fa fa-check-square-o"></i>See the beautiful stone carvings and old buildings at the Dwarkadhish Temple and other ancient temples in the area.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Explore the local handicraft markets in Dwarka and Somnath to buy unique souvenirs and traditional artworks.</li>
				</ul>
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Start your adventure today!</a>

			</div>
			
			<div class="mt20">
			<h3 class="wow fadeInDown">Try The Local Cuisine On The <span class="text-yellow">Saurashtra Darshan Tour From Ahmedabad</span></h3>
			
			<ul class="fa-ul wow fadeInUp">	
				<li><i class="fa-li fa fa-check-square-o"></i> Ringan no Odo / Baingan Bharta - Roasted brinjals (eggplants) tossed with garlic and spices.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Vagharelo Rotlo - Indian bread made with jowar or bajra millet tossed in a tangy, spicy gravy.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Gir Kesar Mango Ras - Juice made from the famous Gir Kesar mangoes which have a Geographical Indication (GI) tag.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Gujarati Thali - Includes dishes like alu gobi curry, safed vatana curry, Gujarati kadhi, khichdi, sambhar, and rotis.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Churma Ladoo and Magas Ladoo - Ghee-laden sweet prasad available at Somnath Temple.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Tender Coconut Barfi - Fresh and delicious coconut barfi bought from a stall near Nageshwar Jyotirlinga Temple.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Pakoras / Fritters and Chana Jor Garam Chaat - Street food delicacies enjoyed at Bet Dwarka.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Puran Poli - Hot puran poli dunked in ghee, served as part of the elaborate Gujarati thali at The Grand Thakar restaurant in Ahmedabad.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Sev Khamni / Amiri Khaman, White Sandwich Dhoklas, Mini Samosas, and Khandvi - Popular Gujarati breakfast items.</li>	
				</ul>
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Join our Saurashtra tour!</a>		
				
			
			</div>
			<hr>
			<div class="mt20">
			<h3 class="wow fadeInDown">Why Choose Route Realm As Your <span class="text-yellow">Saurashtra Darshan</span> Expert?</h3>
			
			<ul class="fa-ul wow fadeInUp">	
				<li><i class="fa-li fa fa-check-square-o"></i> Expert team that plans and organizes tours smoothly</li>
				<li><i class="fa-li fa fa-check-square-o"></i>We create custom-made vacation packages just for you</li>
				<li><i class="fa-li fa fa-check-square-o"></i>We offer the best deals and packages for maximum convenience</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Budget-friendly travel options available on request</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Our support team is just a call away during your entire tour</li>
				<li><i class="fa-li fa fa-check-square-o"></i>We make hotel bookings and arrange rental cars easily</li>
				<li><i class="fa-li fa fa-check-square-o"></i>You get SMS alerts for confirmations, payments, etc.</li>
				<li><i class="fa-li fa fa-check-square-o"></i>Personal mobile app to view your day-wise tour itinerary</li>							
			</ul>	
			
			</div>
			<div class="bg-f6f6f6 p20 mt20 text-center">
			<h3 class="mt0 wow fadeInDown">Book Our <span class="text-yellow">Saurashtra Darshan From Ahmedabad Tour Package</span> Today</h3>
			<p class=" wow fadeInUp">Our carefully planned Saurashtra Darshan tour packages from Ahmedabad let you see the spiritual center of Gujarat. Enjoy the area's rich culture and natural beauty, from the holy Somnath and Dwarkadhish temples to the peaceful beaches. Our knowledge of the area makes sure that the experience is smooth. Book our Saurashtra Darshan from Ahmedabad tour package today, and we'll make sure you have a wonderful family trip that you'll never forget.</p>
			
			<p class="wow fadeInUp"><a class="btn-default" href="#inquiry">Book Now</a></p>
			
			</div>
			<h3 class="wow fadeInDown">FAQ about Saurashtra Darshan Tour</h3>
			<div class="wow fadeInUp">
			<div class="mb10 font20 text-yellow">Q. What is the major highlight of the Saurashtra Darshan From Ahmedabad? </div>
			<div>Saurashtra Darshan From Ahmedabad tour is famous for its vibrant folk culture, including music, dance, art, and rich cuisine.</div>
			<div class="mt20 mb10 font20 text-yellow">Q. What is the local language of Saurashtra?</div>
			<div>
				Gujarati, Hindi, and English are locally spoken languages of the region.
			</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. What sets Route Realm’s Saurashtra Darshan tour package from Ahmedabad apart?</div>
			<div>Route Realm offers custom-made Saurashtra Darshan tour packages from Ahmedabad, budget-friendly options, and a dedicated support team during the tour.</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. How Long is the Saurashtra Darshan from Ahmedabad tour plan?</div>
			<div>Our Saurashtra Darshan from Ahmedabad is a 3N/4D tour plan.</div>
			
			
			

			
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
<?php include('assets/includes/footer.php');?>