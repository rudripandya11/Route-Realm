<?php include('assets/includes/header.php');?>
<!-- #masthead --><link rel="stylesheet" type="text/css" href="css/timeline.css">
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Dwarka Somnath Gir with  <span>Diu Tour Package</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="gujarat-travel-packages.php">Packages</a></li>
		<li>Dwarka Somnath Gir with Diu Tour Package</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">

			<h2 class="wow fadeInUp mb10">Saurashtra Darshan: Ahmedabad - Dwarka - Somnath - Sasan Gir - Diu  </h2>
			<h3 class="wow fadeInUp m0"><img src="images/touricon.png" alt="" width="34" />  5 Nights / 6 Days Tour Package</h3>

			<p class="wow fadeInUp text-justify">With the Dwarka Somnath Gir with Diu Tour Package, set off on an amazing adventure through the spiritual heart and natural beauties of Gujarat. Take in the heavenly energy of historic Jyotirlinga shrines like Dwarkadhish and Somnath Mahadev. At Gir National Park, take in the magnificent Asiatic lions in their natural environment. Discover the calm island community of Diu, which is surrounded by immaculate beaches and rich in Portuguese history. Dwarka Somnath Gir with Diu Tour Package offers a rich tapestry of spirituality, wildlife, history, and coastal appeal on this well-planned vacation. Prepare to have lasting experiences on this amazing journey.</p>

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

																	<input type="hidden" id="inquiryfor" name="inquiryfor" value="Dwarka Somnath Gir with Diu Tour Package - 5N/6D">
																												
				

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
</div>

			
			<h3 class="mt0 wow fadeInDown mt20">Best Places To Visit On The <span class="text-yellow"> Dwarka Somnath Gir with Diu Tour Package</span>  </h3>
			<ul class="fa-ul mt20 wow fadeInUp">
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Dwarkadhish Temple:</strong>  This famous temple is dedicated to Lord Krishna. It has intricate carvings and grand architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bet Dwarka: </strong>It is a peaceful island off the coast of Dwarka. Ancient temples can be found on this serene island.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nageshwar Jyotirlinga Temple: </strong> One of the 12 revered Jyotirlinga shrines of Lord Shiva. It has a huge Shiva statue in the temple complex.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Shivrajpur Beach: </strong>  A beautiful and picturesque beach near Dwarka. Visitors can relax and enjoy the coastal scenery here.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Gandhi Ashram, Porbandar:</strong>  The birthplace of Mahatma Gandhi, India's famous leader. It gives insights into Gandhi's life and teachings.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Sudama Temple, Porbandar: </strong>This temple is dedicated to Lord Krishna's friend Sudama. It holds religious and historical significance.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Somnath Mahadev Temple: </strong> An ancient and sacred pilgrimage site for Hindus. It has the revered Jyotirlinga of Lord Shiva.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Gir National Park Safari: </strong> The only place to see Asiatic lions in the wild. A jeep safari lets you explore the lion's natural habitat.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Diu Fort and Old Church: </strong> The Diu Fort has historical Portuguese-era structures. The Old Church showcases beautiful colonial architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nagoa Beach, Diu:</strong> A scenic beach located on Diu island. It is ideal for relaxing or enjoying water sports activities.</li>
				
			</ul>
			<a class="btn-default btn-small wow fadeInUp mb10" href="inquiry.php">Book Your Tour Now!</a>
 
			<p class="text-center wow fadeInUp mt20"><strong >Explore the best of the Saurashtra region with this exciting 6-day Dwarka Somnath Gir with Diu Tour Package covering major spiritual sites, wildlife hotspots, and scenic beaches.</strong> </p>
			<section class="cd-timeline js-cd-timeline">
				<div class="container container--lg cd-timeline__container">
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 1: Arrival in Dwarka</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Pick up from Ahmedabad Airport/Railway Station</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drive to Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check-in at the hotel in Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka</li>
							</ul>
							<br><br><br>
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
							<h2>Day 2: Dwarka Sightseeing</h2>
							<ul class="fa-ul">

								<li><i class="fa-li fa fa-check-square-o"></i>Begin with a delicious breakfast </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the famous Dwarkadhish Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Explore the island of Bet Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Nageshwar Jyotirlinga temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Relax at the beautiful Shivrajpur Beach</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka</li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-dwarka-2.jpg" alt="" /></span>						
							</div>							

						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 3: Porbandar and Somnath</h2>
							<ul class="fa-ul">	
								<li><i class="fa-li fa fa-check-square-o"></i>Start your day with breakfast and check-out</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Gandhi Ashram and Sudama Temple in Porbandar</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Proceed to Somnath</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening prayers at the Somnath Mahadev Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Somnath</li>
								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-sasan-gir.jpg" alt="" /></span>						
							</div>							


						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--location">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 4: Sasan Gir Safari</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Have breakfast and check-out </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Bhalka Tirth and Triveni Sangam</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check-in at a resort in Sasan Gir </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Enjoy a safari in Gir National Park (3 PM - 6 PM)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay at the Gir resort </li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-diu-fort.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 5: Diu Exploration</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Start with breakfast and check-out</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Travel to Diu island</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Diu Fort and Old Church</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening at the picturesque Nagoa Beach</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Diu </li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-diu-church.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--movie">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 6: Departure</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Have breakfast and check-out</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Return journey to Ahmedabad</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drop-off at Railway Station/Airport</li>
								<li><i class="fa-li fa fa-check-square-o"></i>The tour ends with wonderful memories</li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-airport.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->					
				</div>
				
			</section> <!-- cd-timeline -->
			<p class="wow fadeInUp mt20">Book this tour for an incredible experience of Gujarat's vibrant culture, spiritual treasures, wildlife adventures, and stunning coastline!</p>
			<div class="text-center mb10">
				<a class="btn-default btn-small wow fadeInUp mb10 mt10" href="inquiry.php">Plan Your Adventure Today!</a>
			</div>

			<section class="wow fadeInUp mt20">
				<div class="bg-f6f6f6 p20 text-justify">
					<h3 class="mt0 wow fadeInDown">Local Cuisine In Dwarka,<span class="text-yellow">  Somnath & Diu</span>  </h3>
				<p class="wow fadeInUp mt0">On the Dwarka Somnath Gir with Diu Tour Package, you get to relish a variety of food items. In Dwarka and Somnath, the local food is very delicious. A famous snack is khaman dhokla - steamed yellow cakes made from a fermented batter. People also love potato dabeli, gathiya which are gram flour nuggets, popular pav bhaji, crispy khakhra which is a type of roti, dhokla sandwiches, tangy pani puri, and the special Undhiyu veggie dish. In Diu, the food has a unique mix of Portuguese, African, Arabian, and Indian flavors along with Gujarati taste. Seafood is very common as Diu is an island. But there are also many vegetarian dishes using local vegetables following Gujarati tradition. The different cultures mixed make Diu's cuisine quite special and distinct. So you can try the classic Gujarati snacks and thalis in Dwarka and Somnath. And in Diu, you get to enjoy a blend of cultures and cooking styles in the local food there.</p>
				<hr>
				<h3 class="wow fadeInUp mb10">Places To Shop In Dwarka Somnath Gir with <span class="text-yellow"> Diu Tour Package </span></h3>
				<p class="wow fadeInUp mt0">Discover the vibrant shopping scene while on your Dwarka Somnath Gir with Diu tour package. In Diu, don't miss the bustling Bandar Chowk Market and the lively Sunday Market for an array of local delights. In Somnath, lose yourself in the charm of Big Somnath Street Market, offering a treasure trove of items like Toran, home decor, bangles, clothing for all, and unique novelties. Enjoy a delightful shopping spree amidst the cultural richness of these beautiful destinations.</p>
				<a class="btn-default btn-small wow fadeInUp mb10 mt10" href="inquiry.php">Explore with Us!</a>
				</div>

				<h3 class="wow fadeInUp mb0">Things To Pack On The <span class="text-yellow"> Dwarka Somnath Gir with Diu Tour Package </span></h3>
				<div >
					<div class="col-21" >
						<p class="mb10"><strong>For Summer:</strong></p>
						<ul class="fa-ul">
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Light, loose cotton clothes</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Sunglasses and hat/cap</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Sunscreen lotion</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Comfortable walking shoes</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Water bottles</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Umbrella or rain jacket (for monsoon months)</li>
						</ul>
					</div>
					<div class="col-22">
						<p class="mb10"><strong>For Winter:</strong></p>
						<ul class="fa-ul">
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Warm sweaters/jackets</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Thermals or warm innerwear</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Gloves, muffler/scarf</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Thick socks</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Comfortable walking shoes</li>
						</ul>
					</div>

					<div class="col-21" >
						<p class="mb10"> <strong>For Monsoon:</strong></p>
						<ul class="fa-ul">
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Lightweight raincoat/jacket</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Umbrella</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Waterproof shoes</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Dry bags for clothes/items</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Extra pair of clothes</li>
							
						</ul>
					</div>
					<div class="col-22">
						<p class="mb10"><strong>All Seasons:</strong></p>
						<ul class="fa-ul">
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Basic medications</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Toiletries and personal care items</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Power bank for charging devices</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Camera to capture memories</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Comfortable travel bag/backpack</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Masks and sanitizers</li>
							<li><i class="fa-li fa fa-chevron-circle-right"></i>Copies of IDs and documents</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</section>

			<section>
				<div class=" bg-f6f6f6 p20 ">
					<h3 class="wow fadeInDown">Why Choose Route Realm For <span class="text-yellow">Dwarka Somnath Gir with Diu Tour Package? </span></h3>
					<p class="wow fadeInUp">With our well-designed Dwarka Somnath Gir with Diu Tour Package, you can experience the colorful glamor of Gujarat. Travel through historic temples, stunning wildlife reserves, and tranquil coastal villages with the Route Realm. Plan your trip now to see the state's rich cultural legacy and breathtaking natural beauty. You can also get in touch with us for <a href="saurashtra-darshan.html"> Saurashtra darshan packages, Saurashtra darshan with Gir tour </a> package, <a href="saurashtra-darshan-with-sou.html"> Saurashtra darshan with SOU tour </a> package, <a href="saurashtra-darshan-ahmedabad.html"> Saurashtra darshan from Ahmedabad tour </a> package, our <a href="adventurous-gujarat-tour-packages.html"> glorious Gujarat tour package </a> and more.</p>
					<a class="btn-default btn-small wow fadeInUp mb10 mt10" href="inquiry.php">Join Our Next Tour!</a>
				</div>

				<div>
					<h3 class="wow fadeInDown">FAQs</h3>
					<div class="wow fadeInUp">
						<div class="mb10 font20 text-yellow">Q. What is the best time for Dwarka Somnath Gir with Diu Tour Package? </div>
						<div>The best time to go on Dwarka Somnath Gir with Diu Tour Package is between September to March. </div>
						<div class="mt20 mb10 font20 text-yellow">Q. How far is Somnath from Diu?</div>
						<div>Somnath is 84 km away from Diu.</div>

						<div class="mt20 mb10 font20 text-yellow">Q. How many days are required for the Dwarka Somnath Gir with Diu Tour Package?</div>
						<div>5 to 6 days are enough to explore the Dwarka Somnath Gir with Diu Tour Package fully.</div>

						<div class="mt20 mb10 font20 text-yellow">Q. Why choose Route Realm For Dwarka Somnath Gir with Diu Tour Package?</div>
						<div>Choose us because we offer customizable and quick tour services at the most affordable rates.</div>
					</div>
				</section>
				<script src="js/timeline.js"></script>

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
	</php	   
</aside>
<div class="clear"></div>		</div>
	</section>
	<?php include('assets/includes/footer.php');?>