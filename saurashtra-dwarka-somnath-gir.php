<?php include('assets/includes/header.php');?>
<!-- #masthead --><link rel="stylesheet" type="text/css" href="css/timeline.css">
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Dwarka Somnath Tour Package with  <span>Gir National Park</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="gujarat-travel-packages.html">Packages</a></li>
		<li>Dwarka Somnath Tour Package with Gir National Park</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<h2 class="wow fadeInUp mb10">Ahmedabad - Dwarka - Somnath  - Sasan Gir </h2>
			<h3 class="wow fadeInUp m0"><img src="images/touricon.png" alt="" width="34" /> 4N/5D Temple, Safari and Beach Tour </h3>
			<p class="text-justify wow fadeInUp">Witness Dwarka's rich cultural history and Somnath’s timeless beauty -then, go into the wilds of Gir National Park, which is home to the majestic Asiatic lion - all with the Gujarat Tour Guide. Book our Dwarka Somnath Tour Package with Gir National Park included, you can enjoy the natural beauty of this untouched refuge, which is full of colorful plants and wild animals. Every place you visit has its own special mix of history, culture, and natural beauty. As <a href="index.html">tours and travel service providers in Gujarat</a>, We will be sure you have an unforgettable experience during your tour. </p>
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

													<input type="hidden" id="inquiryfor" name="inquiryfor" value="Dwarka Somnath Tour Package with Gir National Park - 4N/5D">
																																
				

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
			<h3 class="wow fadeInUp">Best Places To Visit On The Dwarka Somnath Tour Package with Gir National Park</h3>
			
			
			<ul class="fa-ul mt20 wow fadeInUp">
				<li><i class="fa-li fa fa-chevron-circle-right"></i> Dwarkadhish Temple: This is a very famous and holy temple in Dwarka. Witness the magic of this holy pilgrimage on this tour.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bet Dwarka:</strong> Bet Dwarka is a small island just off the coast of Dwarka. You can take a short boat ride to visit this island.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nageshwar Jyotirlinga:</strong> This is one of the twelve Jyotirlingas, which are sacred shrines for Lord Shiva. It has a special Shiva lingam.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Rukmini Temple: </strong>This temple is dedicated to Rukmini, who was Lord Krishna's chief queen. It has beautiful carvings and architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Shivrajpur Beach:</strong> This is a long, clean beach in Dwarka where you can relax and enjoy the coastline views.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Porbandar Gandhi Ashram:</strong> This was one of Mahatma Gandhi's ashrams (spiritual homes) where he lived for some time. You can see where he stayed.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Somnath Mahadev Jyotirlinga: </strong>Another of the twelve sacred Jyotirlingas of Lord Shiva. This temple has a long history and beautiful architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bhalka Tirth and Triveni Sangam:</strong> These are holy places in Somnath where three rivers meet (Triveni Sangam). You can take a holy dip here.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Gir National Park:</strong> This famous park is the only place in the world to see Asiatic lions in the wild! The jeep safari lets you try spotting them.</li>
				
			</ul>
			<a class="btn-default btn-small wow fadeInUp mb10" href="inquiry.php">Get Exclusive Deals!</a>
			
			<section class="cd-timeline js-cd-timeline">
				<div class="container container--lg cd-timeline__container">
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 1</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>We'll pick you up from Ahmedabad, Rajkot or Jamnagar airport/railway station</li>
								<li><i class="fa-li fa fa-check-square-o"></i> Travel to the city of Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i> Check into your Dwarka hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i> Overnight stay in Dwarka</li>
								
							</ul>
							<br><br>
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
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Have breakfast at the hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit and pray at the famous Dwarkadhish Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>See Bet Dwarka island</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Nageshwar Jyotirlinga and Rukmini Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Relax at Shivrajpur Beach</li>
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
							<ul class="fa-ul">	
								<li><i class="fa-li fa fa-check-square-o"></i>Breakfast and check-out from hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit Porbandar's Gandhi Ashram and Sudama Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening prayers at Somnath Mahadev Jyotirlinga</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Night stay in Somnath</li>
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
							<h2>Day 4</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Breakfast and check-out </li>
								<li><i class="fa-li fa fa-check-square-o"></i>See Bhalka Tirth and Triveni Sangam </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Travel to Sasan Gir </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check into a Gir resort </li>
								<li><i class="fa-li fa fa-check-square-o"></i>4-7pm jeep safari in Gir National Park to spot lions! </li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight in Gir resort </li>								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-bhalka-tirth.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 5</h2>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Breakfast and check-out from resort</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Return to Ahmedabad</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drop-off options: Rajkot, Jamnagar or Ahmedabad</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Tour ends, taking home sweet Gujarat memories!</li>								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/package-th-airport.jpg" alt="" /></span>						
							</div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->			
				</div>
				
			</section> <!-- cd-timeline -->
			<script src="js/timeline.js"></script>
			<div class="clear"></div>
			
			<div class="text-center mt20">
				<a class="btn-default btn-small wow fadeInUp mb10" href="inquiry.php">Start Your Journey!</a>
			</div>
			<div class="bg-f6f6f6 p20 mt20">
				<h3 class="mt0 wow fadeInDown">Best Time To Opt For The <span class="text-yellow">Dwarka Somnath Tour Package</span> with Gir National Park  </h3>
				<p class="text-justify wow fadeInUp mb10">These are the best months to visit the places covered in this Dwarka Somnath Tour Package with Gir National Park:</p>
				<ul class="fa-ul wow fadeInUp">
					<li><i class="fa-li fa fa-check-square-o"></i>October to December is the peak tourist season in Gujarat. The weather is pleasant and cool, making it ideal for sightseeing and outdoor activities like the Gir safari.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>June, July, August, and September can still be warm and humid, though temperatures start dropping towards the end.</li>
				</ul>
				
				<p class="text-justify wow fadeInUp mb10"><strong>Common Languages Of Dwarka &amp; Somnath</strong></p>
				<p class="text-justify wow fadeInUp mb10">The primary language spoken in Dwarka and Somnath is Gujarati, reflecting the predominant Gujarati population in these areas. Additionally, due to the influx of tourists, Hindi and English are also commonly used languages, facilitating communication for visitors exploring these historic destinations.</p>
				<p class="text-justify wow fadeInUp mb10"><strong>Shopping In Dwarka & Somnath</strong></p>
				<p class="text-justify wow fadeInUp mb10">Dwarka is home to some renowned marketplaces that offer a diverse shopping experience.. Somnath entices visitors with its wide array of items sold in various marketplaces, including wall hangings, quilts, wedding attire, cradle garments, and animal accessories, making it a must-visit destination for those looking for unique finds. The big Somnath street market is popular for selling home decor things, novelties, bangles, clothes, dresses, mens T-shirts, etc. Bathan Chowk in Dwarka is a local market that you can also visit to buy traditional items.</p>
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Join Our Next Tour!</a>
			</div>
			<div class="mt20">
				<h3 class="wow fadeInDown">Things To Eat In <span class="text-yellow">Dwarka - Somnath - Gir National Park Tour Package</span></h3>
				<p class="text-justify wow fadeInUp mb10">During your trip to Dwarka, Somnath, and Gir National Park, make sure to try some delicious local dishes. Start your day with Poha, a tasty breakfast made with flattened rice, veggies, and spices. Then, dig into Khichdi, a comforting mix of rice and lentils. For something spicy, go for Lasaniya Mamra, a curry with eggplant and lots of garlic, or try Fansi nu Shak, a dry vegetable curry with tender cluster beans. Don't miss out on Methina Gota, sweet dumplings made with fenugreek leaves and jaggery, or Ladwa, sweet balls made with gram flour and sugar syrup. And for snacks, try Khakhra, crispy crackers made from rice and lentils, Thepla, soft flatbread with spices and butter, Gathiya, savory spiral snacks made from gram flour, or Dabeli, spiced potato filling in a bun with chutneys and sev on top. </p>
				
			</div>
			<hr>
			<div class="mt20">
				<h3 class="wow fadeInDown ">What You Will Witness In <span class="text-yellow">Sasan Gir National Park</span></h3>
				<p class="text-justify wow fadeInUp mb10 mt0">Sasan Gir, also known as Gir National Park, is a unique place because it's the only home to Asiatic Lions. It's full of hills and dry forests with teak trees. Apart from lions, you can see leopards, wild pigs, spotted deer, and other animals like nilgai and chinkaras. There's even a water hole with crocodiles! Plus, there's a temple dedicated to Krishna near Tulsi-Shyam Springs.</p>
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Book Your Tour Now!</a>
			</div>
			<hr>
			<div class="mt20">
				<h3 class="wow fadeInDown" >Why Choose Gujarat Tour Guide For <span class="text-yellow">Dwarka Somnath Tour Package</span> with Gir National Park? </h3>
				
				<ul class="fa-ul wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">	
					<li><i class="fa-li fa fa-check-square-o"></i> Smooth teamwork and well-organized tours.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>Customized holiday packages tailored to your preferences.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>Unbeatable deals and hassle-free packages.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>Budget-friendly travel options upon request.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>Immediate travel support is just a phone call away.</li>
					<li><i class="fa-li fa fa-check-square-o"></i>Effortless arrangements for accommodations and car rentals.</li>
					
				</ul>	
				
			</div>
			<div class="bg-f6f6f6 p20 mt20 text-center">
				<h3 class="mt0 wow fadeInDown">Book Our  <span class="text-yellow">Dwarka Somnath Tour Package with Gir National Park</span></h3>
				<p class="wow fadeInUp">Join our special tour package to explore Dwarka, Somnath, and Gir National Park effortlessly. Discover Dwarka's history, Somnath's beauty, and Gir's wildlife with the Gujarat Tour Guide. Enjoy a hassle-free journey tailored to your preferences. Book our Dwarka Somnath Tour Package with Gir National Park today to explore.</p>
				<p class="wow fadeInUp">If you are looking for some more attractive tour packages in Gujarat, you would be delighted to know we also offer other packages including <a href="saurashtra-darshan.php">Saurashtra darshan packages</a>, <a href="saurashtra-dwarka-somnath-gir.php">Saurashtra darshan with Gir tour</a> package, <a href="saurashtra-darshan-with-sou.php">Saurashtra darshan with SOU tour</a> package, <a href="saurashtra-darshan-ahmedabad.php">Saurashtra darshan from Ahmedabad tour</a> package, our <a href="adventurous-gujarat-tour-packages.php">glorious Gujarat tour package</a> and more.</p>
				
				<p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a class="btn-default" href="#inquiry">Book Now</a></p>
				
			</div>

			<h3 class="wow fadeInDown">FAQs</h3>
			<div class="wow fadeInUp">
				<div class="mb10 font20 text-yellow">Q. Which famous temples can you visit during the Dwarka Somnath Tour Package with Gir National Park? </div>
				<div>Dwarkadhish Temple, Bet Dwarka, Nageshwar Jyotirlinga, Rukmini Temple, and Somnath Mahadev Jyotirlinga are among the must-visit temples on the Dwarka Somnath Tour Package with Gir National Park.</div>
				<div class="mt20 mb10 font20 text-yellow">Q. What exciting activities can you enjoy at Gir National Park?</div>
				<div>Experience a thrilling jeep safari to spot Asiatic lions and other wildlife in their natural habitat.</div>
				
				<div class="mt20 mb10 font20 text-yellow">Q. When is the best time to opt for this tour package?</div>
				<div>The ideal months to opt for the Dwarka Somnath Tour Package with Gir National Park are October to December, during Gujarat's peak tourist season, or June to September.</div>
				
				<div class="mt20 mb10 font20 text-yellow">Q. Why choose Gujarat Tour Guide for your trip?</div>
				<div>Benefit from well-organized tours, personalized packages, budget-friendly options, immediate travel support, and convenient accommodations on your Dwarka Somnath Tour Package with Gir National Park.</div>
				
				
				

				
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
	</php>	   
</aside>
<div class="clear"></div>	</div>
</section>
<?php include('assets/includes/footer.php');?>