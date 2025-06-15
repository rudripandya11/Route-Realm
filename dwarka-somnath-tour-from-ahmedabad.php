<?php include('assets/includes/header.php');?>
<!-- #masthead --><link rel="stylesheet" type="text/css" href="css/timeline.css">
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Discover The Breath-Taking <span>Dwarka Somnath Tour Package</span> From Ahmedabad</h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="gujarat-travel-packages.php">Packages</a></li>
		<li>Dwarka Somnath Tour from Ahmedabad</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<h2 class="wow fadeInUp mb10">Ahmedabad - Dwarka - Somnath - Ahmedabad </h2>
			<h3 class="wow fadeInUp m0"><img src="images/touricon.png" alt="" width="34" /> 3N/4D Temple and Beach Tour </h3>
			<p class="text-justify wow fadeInUp">From Ahmedabad, going on a spiritual journey to the old towns of Dwarka and Somnath can be an enriching experience. These places are very important to history, culture, and religion, and they offer a unique mix of old customs and beautiful coastal scenery. This guide will show you how to plan an amazing trip to Dwarka Somnath from Ahmedabad that will go smoothly and be fun. If you want to book the best Dwarka Somnath tour package from Ahmedabad, the Gujarat Tour Guide has got you covered. </p>
			
			<h3 class="wow fadeInUp">Uncover Magical Destinations On The Package Tour From Ahmedabad To Dwarka And Somnath</h3>
			<p class="text-justify wow fadeInUp">Explore the ancient city of Dwarka, where stories of Gods and Devotion come alive. We have listed the top places of Dwarka and Somanath sightseeing you will get to witness when you book Somnath and Dwarka tour packages. Here are the best places to visit in Dwarka and Somnath:</p>
			<ul class="fa-ul mt20 wow fadeInUp">
			<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>		
			Dwarkadhish Temple:</strong> A sacred abode of Lord Krishna.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nageshwar Jyotirling:</strong> Known for its divine presence.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bet Dwarka:</strong> An enchanting island accessible by boat.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong> Shivrajpur Beach:</strong> A calming place to unwind.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Porbandar Gandhi Ashram:</strong> A testament to Mahatma Gandhi's life and teachings.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Pandav Gufa:</strong> Home to beautiful, ancient architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Somnath Mahadev Jyotirling:</strong> Offering spiritual solace.</li>
				</ul>
				<p class="text-justify wow fadeInUp"> Apart from these, you will also get to witness the famous Spiritual Bhalka Tirth, the Sacred Triveni Sangam, and much more.</p>

				
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Book Your Tour Now!</a>
				
			
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

			<input type="hidden" id="inquiryfor" name="inquiryfor" value="Dwarka Somnath From Ahmedabad - 3N/4D">
				
				

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
</div>			<div class="mt20">
				
				<h3 class="wow fadeInDown">Exploring Local Cuisine On The  <span class="text-yellow">Somnath And Dwarka Tour Packages</span></h3>
				<p class="text-justify wow fadeInUp">Trying the food from the place you're visiting is an important part of any trip. Don't miss the chance to try real Gujarati food and street food favorites on your package tour from Ahmedabad to Dwarka and Somnath. Dhokla, a tasty steamed cake, thepla, a spicy flatbread, fafda-jalebi, a crispy fried snack with syrupy jalebi, undhiyu, a traditional vegetable curry, and khandvi are all treats that you should try.</p>

				
				
				
				
				<hr>
				<h3 class="wow fadeInDown mb20 text-center">Our Meticulously-Designed <span class="text-yellow">Ahmedabad Dwarka Somnath</span> Tour Itinerary</h3>
				

				
			</div>
			<section class="cd-timeline js-cd-timeline">
				<div class="container container--lg cd-timeline__container">
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 1</h2>
							<p><strong>Ahmedabad to Dwarka</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Pick Up from Ahmedabad Airport/Railway Station</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Travel to Dwarka (420 Km)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>En-route Visit to Jamnagar Bala Hanuman Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Night Stay at Hotel in Dwarka</li>
							</ul>
							<br><br>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/journey-to-dwarka-th.jpg" alt="Dwarka" /></span>
							
							 </div>
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--movie">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 2</h2>
							<p><strong>Dwarka Exploration</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Enjoy Breakfast at the Hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Darshan at Dwarkadhis Temple</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Serene Bet Dwarka</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Rest and Relax at the Hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Explore the Sacred Nageshwar Jyotirling</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening Serenity at Shivrajpur Beach</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight Stay at Hotel in Dwarka</li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/nageshwar-jyotirling-th.jpg" alt="Nageshwar Jyotirling" /></span>						
							</div>							
				  
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 3</h2>
							<p><strong>Dwarka to Somnath</strong></p>
							<ul class="fa-ul">	
								<li><i class="fa-li fa fa-check-square-o"></i>Morning Breakfast and Check-out from Hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Travel to Somnath</li>
								<li><i class="fa-li fa fa-check-square-o"></i>En-route Visit to Porbandar Gandhi Ashram</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Check-in at Hotel in Somnath</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening Darshan at Somnath Mahadev Jyotirling</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Night Stay at Hotel in Somnath</li>
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/gandhi-ashram-porbandar.jpg" alt="Rukmani Devi Temple" /></span>						
							</div>							

				 
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--movie">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 4</h2>
							<p><strong>Somnath Exploration and Return to Ahmedabad</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Breakfast and Check-out from Hotel</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Spiritual Bhalka Tirth</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Explore the Sacred Triveni Sangam</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Discover the Mystical Pandav Gufa</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Return Journey to Ahmedabad</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drop-off at Railway Station/Airport</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Tour Concludes with Sweet Memories</li>								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/bhaka-tirth.jpg" alt="Nageshwar Jyotirling" /></span>						
							</div>							
				  
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->
					
								
				</div>
			</section> <!-- cd-timeline -->
			<script src="js/timeline.js"></script>
			<div class="clear"></div>
			<div class="text-center mt20">
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Get Exclusive Deals!</a>
			</div>
			
			<div class="bg-f6f6f6 p20 mt20">
			<h3 class="mt0 wow fadeInDown">Choosing the Right Transportation On The Package Tour From  <span class="text-yellow">Ahmedabad To Dwarka And Somnath</span></h3>
			<p class="text-justify wow fadeInUp">When choosing a Dwarka Somnath tour package from Ahmedabad, you have several transportation options to opt from based on your preferences and budget:</p>
			<p class="text-justify wow fadeInUp"><strong>Dwarka Somnath tour package from Ahmedabad by car:</strong> Driving is the easiest way to get to Dwarka and Somnath. The trip to each place takes about seven to eight hours, and you can stop and see things along the way. </p>
			<p class="text-justify wow fadeInUp"><strong>Dwarka Somnath tour package from Ahmedabad by train: </strong> The Dwarka Express and the Somnath Express are two trains that go from Ahmedabad to these places. The train is a cheap and beautiful way to travel, and it lets you see the beautiful scenery of Gujarat.</p>
			<p class="text-justify wow fadeInUp"><strong>Dwarka Somnath tour package from Ahmedabad by bus:</strong> Between Ahmedabad and Dwarka/Somnath, both state-run and private buses run, making this a cheap way to travel. People on a tight budget can take this route, even though it takes longer.</p>
			<p class="text-justify wow fadeInUp">However, if you book your tour package With Gujarat Tour Guide, you can beat the hassle of a hectic travel. We will arrange the best mode of transportation for you so that you can focus on your fun journey.</p>
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Explore with Us!</a>

			</div>
			<div class="mt20">
			<h3 class="wow fadeInDown">Why Choose Gujarat Tour Guide To Book The <span class="text-yellow">Best Dwarka Somnath Packages from Ahmedabad</span>? </h3>
			
			<ul class="fa-ul wow fadeInUp">	
				<li><i class="fa-li fa fa-check-square-o"></i> Custom Dwarka Somanath Packages for You: We understand that everyone travels differently. That's why we create special Dwarka Somnath packages just for you, fitting your exact needs and preferences.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> Make Your Plan: While we have ready-made Dwarka Somnath packages, we're also happy to adjust them to your liking. Want more time at a temple or to see a hidden gem? Just let us know!</li>
				<li><i class="fa-li fa fa-check-square-o"></i> Friendly Experts to Guide You: Our team knows Gujarat inside out. They'll help you pick the perfect Dwarka and Somnath tour packages that match what you love, making sure you have a wonderful trip.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> Certified by Gujarat Tourism: You can trust us! Gujarat Tour Guide is certified by Gujarat Tourism, showing our package tour from Ahmedabad to Dwarka and Somnath meets high standards and is reliable for your travel needs.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> See the Best Of The Town: Visit the famous Dwarkadhish Temple, serene Bet Dwarka, and more with our well-planned Dwarka Somnath packages. Immerse yourself in Dwarka’s rich culture and spirituality.</li>
			</ul>	
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Book Your Tour Now!</a>
			
			
			</div>
			<div class="bg-f6f6f6 p20 mt20 text-center">
			<h3 class="mt0 wow fadeInDown">Book The Best   <span class="text-yellow">Dwarka Somnath Tour Package From Ahmedabad</span></h3>
			<p class=" wow fadeInUp">Planning a trip to Dwarka Somnath from Ahmedabad takes careful thought about many things, such as how to get there, where to stay, what to do, where to eat, and how to stay safe. You can be sure of a memorable and fulfilling trip if you book your package tour from Ahmedabad to Dwarka and Somnath with the Gujarat Tour Guide. Plus, our Dwarka Somnath tour package from Ahmedabad price is reasonably lower making us a budget-friendly choice. Get ready for this life-changing trip, and make experiences that will last a lifetime in the heart of Gujarat.</p>
			
			<p class="wow fadeInUp"><a class="btn-default" href="#inquiry">Book Now</a></p>
			
			</div>
			<h3 class="wow fadeInDown">FAQ's</h3>
			<div class="wow fadeInUp">
			<div class="mb10 font20 text-yellow">Q. How to plan a trip from Somnath and Dwarka from Ahmedabad?</div>
			<div>You can contact the Gujarat Tour Guide for a personalized trip from Ahmedabad to Somnath and Dwarka. With our Somnath and Dwarka tour packages, you can enjoy comfortable transportation, expert guides, and memorable experiences.</div>
			<div class="mt20 mb10 font20 text-yellow">Q. How many days are enough for Somnath and Dwarka? </div>
			<div>
				Three to four days is enough time for your package tour from Ahmedabad to Dwarka and Somnath.
			</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. How can I plan Somnath to Dwarka? Is It Affordable?</div>
			<div>Plan your Somnath to Dwarka journey with the Gujarat Tour Guide for an affordable and memorable trip. Our Somnath and Dwarka tour packages are the best bet if you want to have a hassle-free and cost-effective journey.</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. Which is the best season to visit Dwarka and Somnath?</div>
			<div>The best season to book Somnath and Dwarka tour packages is November to February. However, the place has pleasant weather all year long making it the perfect holy place to visit all year long.</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. Which railway station is near to Somnath Temple?</div>
			<div>The nearest station is Veraval Rail Station. Some trains go to Somnath Station, but most stop at Veraval. Veraval and Somnath are just 6 km apart. You can easily take an auto between the two towns.</div>
			

			
			</div>
			<hr>
			<h3>Places to Visit</h3>
			<div class="placesWrap">
				<div class="col-31">
					<a href="images/gallery/dwarka/dwarka-place-1.jpg" class="placethumb wow fadeInUp fancybox" title="Shree Dwarkadhish Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-1.jpg" alt="Shree Dwarkadhish Temple" />
						</div>
						<h3>Shree Dwarkadhish Temple</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-2.jpg" class="placethumb wow fadeInUp fancybox" title="Dwarka Beach" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-2.jpg" alt="Dwarka Beach" />
						</div>
						<h3>Dwarka Beach</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-3.jpg" class="placethumb wow fadeInUp fancybox" title="Rukmini Devi Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-3.jpg" alt="Rukmini Devi Temple" />
						</div>
						<h3>Rukmini Devi Temple</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-4.jpg" class="placethumb wow fadeInUp fancybox" title="Bhadkeshwar Mahadev Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-4.jpg" alt="Bhadkeshwar Mahadev Temple" />
						</div>
						<h3>Bhadkeshwar Mahadev Temple</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-5.jpg" class="placethumb wow fadeInUp fancybox" title="Dwarka Lighthouse" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-5.jpg" alt="Dwarka Lighthouse" />
						</div>
						<h3>Dwarka Lighthouse</h3>
					</a>
					
					
					
				</div>
				<div class="col-32">
					<a href="images/gallery/dwarka/dwarka-place-6.jpg" class="placethumb wow fadeInUp fancybox" title="Sudama Setu" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-6.jpg" alt="Sudama Setu" />
						</div>
						<h3>Sudama Setu</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-7.jpg" class="placethumb wow fadeInUp fancybox" title="Shree Swaminarayan Mandir" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-7.jpg" alt="Shree Swaminarayan Mandir" />
						</div>
						<h3>Shree Swaminarayan Mandir</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-8.jpg" class="placethumb wow fadeInUp fancybox" title="Shri Nageshwar Mahadev Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-8.jpg" alt="Shri Nageshwar Mahadev Temple" />
						</div>
						<h3>Shri Nageshwar Mahadev Temple</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-9.jpg" class="placethumb wow fadeInUp fancybox" title="Iskcon Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-9.jpg" alt="Iskcon Temple" />
						</div>
						<h3>Iskcon Temple</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-10.jpg" class="placethumb wow fadeInUp fancybox" title="Gomti Ghat" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-10.jpg" alt="Gomti Ghat" />
						</div>
						<h3>Gomti Ghat</h3>
					</a>
					
				</div>
				<div class="col-33">
					<a href="images/gallery/dwarka/dwarka-place-11.jpg" class="placethumb wow fadeInUp fancybox" title="Sunset Point" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-11.jpg" alt="Sunset Point" />
						</div>
						<h3>Sunset Point</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-12.jpg" class="placethumb wow fadeInUp fancybox" title="Beyt Dwarka" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-12.jpg" alt="Beyt Dwarka" />
						</div>
						<h3>Beyt Dwarka</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-13.jpg" class="placethumb wow fadeInUp fancybox" title="Gita Mandir" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-13.jpg" alt="Gita Mandir" />
						</div>
						<h3>Gita Mandir</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-1.jpg" class="placethumb wow fadeInUp fancybox" title="Gayatri Shaktipeeth" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-14.jpg" alt="Gayatri Shaktipeeth" />
						</div>
						<h3>Gayatri Shaktipeeth</h3>
					</a>
					<a href="images/gallery/dwarka/dwarka-place-15.jpg" class="placethumb wow fadeInUp fancybox" title="Samudra Narayan Temple" rel="gallery">
						<div class="placeImg"><span class="ovarlay"></span>
							<img src="images/gallery/dwarka/dwarka-place-15.jpg" alt="Samudra Narayan Temple" />
						</div>
						<h3>Samudra Narayan Temple</h3>
					</a>
					
				</div>
				<div class="clear"></div>
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
	</diphp	   
</aside>
<div class="clear"></div>	</div>
</section>
<?php include('assets/includes/footer.php');?>