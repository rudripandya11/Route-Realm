<?php include('assets/includes/header.php');?>
<!-- #masthead --><link rel="stylesheet" type="text/css" href="css/timeline.css">
<!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Experience The Spiritual Dwarka With Our <span>Dwarka Tour Package</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="gujarat-travel-packages.php">Packages</a></li>
		<li>Dwarka Tour Packages from Ahmedabad</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="content-with-sidebar">
			<h2 class="wow fadeInUp mb10">Ahmedabad - Dwarka - Ahmedabad </h2>
			<h3 class="wow fadeInUp m0"><img src="images/touricon.png" alt="" width="34" /> 2N/3D Temple and Beach Tour </h3>
			<p class="text-justify wow fadeInUp">Dwarka is a very holistic place in India. This city in Gujarat sits by the sacred Gomti River. It is deeply connected to Hindu beliefs as the home of Lord Krishna. Visiting Dwarka fills you with peace and good energy.  </p>
			<p class="text-justify wow fadeInUp">Gujarat Tour Guide has many <a href="saurashtra-darshan.php">Dwarka tour packages</a> to explore this holy city. You can pick one that fits your needs and budget. Our friendly team makes sure your Dwarka trip is unforgettable and safe. We plan affordable <a href="saurashtra-dwarka-somnath-gir.php">Dwarka tour packages with gir national park</a> so you can see all the best sights. From ancient temples to the calm river, Dwarka lets you experience India's rich spiritual history. Join us for a truly meaningful journey.</p>
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

																																					<input type="hidden" id="inquiryfor" name="inquiryfor" value="Dwarka Tour Packages From Ahmedabad - 2N/3D">
								
				

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
				<h2 class="wow fadeInUp">Cultural Importance Of Dwarka</h2>
				<p class="text-justify wow fadeInUp">Dwarka is a very important place in Hindu religion and beliefs. It is known as the great kingdom where Lord Krishna lived and ruled a long time ago. Hindu holy books say that Dwarka was a beautiful and wealthy city when Lord Krishna was there.</p>
				<p class="text-justify wow fadeInUp">The stories tell that after Lord Krishna left the Earth to go to the spiritual world, the whole city of Dwarka and its people went underwater in the sea. This marked the beginning of the current time period called Kali Yuga.</p>
				<p class="text-justify wow fadeInUp">Because of its connection to the much-loved Lord Krishna, Dwarka became a major place of pilgrimage for Hindus. People go via Ahmedabad to Dwarka tour package to feel close to Lord Krishna's divine energy. They visit Dwarka's sacred temples and holy sites related to Lord Krishna's life and teachings.</p>
				<p class="text-justify wow fadeInUp">With its ancient legends and links to Lord Krishna, Dwarka holds great cultural value. Pilgrims travel there to experience its special spiritual vibrations and seek blessings. The city's deep religious roots and mystical past continue to fascinate people.</p>
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Book Your Tour Now!</a>

				<hr>
				<h3 class="wow fadeInDown">Magical Places You Will Witness On The <span class="text-yellow">Ahmedabad to Dwarka Tour Package</span></h3>
				<ul class="fa-ul mt20 wow fadeInUp">
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bala Hanuman Temple, Jamnagar:</strong> You can visit this ancient temple on your Ahmedabad to Dwarka tour package. It is dedicated to Lord Hanuman and is a significant Hindu pilgrimage site, known for its intricate architecture.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Dwarkadhish Temple, Dwarka:</strong> One of the four most sacred Hindu pilgrimage destinations, this iconic temple is believed to be the home of Lord Krishna.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Bet Dwarka:</strong> An island off the coast of Dwarka, Bet Dwarka is considered the abode of Lord Krishna and is famous to visit on the Ahmedabad to Dwarka tour package.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Nageshwar Jyotirling, Dwarka:</strong> This holy site houses one of the 12 revered Jyotirlingas, making it a must-visit for devotees of Lord Shiva.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Shivrajpur Beach, Dwarka: </strong> Unwind at this serene beach on your Ahmedabad to Dwarka package, known for its tranquil ambiance and stunning sunsets, offering a perfect break from sightseeing.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Rukmani Devi Temple, Dwarka:</strong> Dedicated to Rukmani, the wife of Lord Krishna, this temple holds great religious and mythological importance for Hindus.</li>
				<li><i class="fa-li fa fa-chevron-circle-right"></i> <strong>Gopi Talav, Dwarka:</strong> This sacred pond is steeped in mythological tales that you will get to visit the Dwarka package from Ahmedabad. It is believed to be the place where Lord Krishna played with gopinis.</li>
				</ul>
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Discover Amazing Destinations!</a>

				<hr>
				<h3 class="wow fadeInDown mb20 text-center">2N/3D Dwarka <span class="text-yellow">Itinerary Package</span> From Ahmedabad</h3>
				

				
			</div>
			<section class="cd-timeline js-cd-timeline">
				<div class="container container--lg cd-timeline__container">
					<div class="cd-timeline__block">
						<div class="cd-timeline__img cd-timeline__img--picture">
							<img src="images/cd-icon-location.svg" alt="Location">
						</div> <!-- cd-timeline__img -->

						<div class="cd-timeline__content text-component">
							<h2>Day 1</h2>
							<p><strong>Arrival and Journey to Dwarka</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Pick up from Ahmedabad airport/railway station (Your tour will start with a comfortable pick-up from Ahmedabad airport or railway station)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Begin your 420 km drive to the holy city of Dwarka (You'll then embark on a scenic 420 km drive to the coastal town of Dwarka)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>On the way, visit the famous Bala Hanuman Temple in Jamnagar (En route, you'll stop at the renowned Bala Hanuman Temple in Jamnagar, a significant Hindu pilgrimage site)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>After arriving in Dwarka on your Dwarka package from Ahmedabad, check-in at your hotel (Upon reaching Dwarka, you'll check-in at your pre-booked hotel)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening at leisure (The rest of the evening is free for you to relax or explore on your own)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka (You'll stay overnight in Dwarka)</li>
								
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
							<p><strong>Exploring the Local sightseeing Places in Dwarka tour Package</strong></p>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-check-square-o"></i>Start the 2nd day of your Ahmedabad to Dwarka package with a delicious breakfast (Begin your day with a sumptuous breakfast)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Pay a visit to the ancient Dwarkadhish Temple, one of the four main Hindu pilgrimage sites (Visit the iconic Dwarkadhish Temple, one of the four most revered Hindu pilgrimage destinations)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Proceed to Bet Dwarka, an island off the coast believed to be Lord Krishna's dwelling (Next, you'll go to Bet Dwarka, an island considered the abode of Lord Krishna)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Relax at your hotel in the afternoon (You'll have leisure time in the afternoon to unwind at your hotel)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Evening visit to Nageshwar Jyotirling, home to one of the 12 revered Jyotirlingas (In the evening, you'll visit Nageshwar Jyotirling, which houses one of the 12 sacred Jyotirlingas)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Unwind at the serene Shivrajpur Beach as the sun sets (Witness a beautiful sunset at the tranquil Shivrajpur Beach)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Overnight stay in Dwarka (You'll stay overnight in Dwarka)</li>								
								
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
							<p><strong>Dwarka to Ahmedabad Departure</strong></p>
							<ul class="fa-ul">	
								<li><i class="fa-li fa fa-check-square-o"></i>Enjoy breakfast and check-out from the hotel on your 3rd day of the Ahmedabad to Dwarka package (Start your day with breakfast and complete check-out formalities)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Visit the Rukmani Devi Temple, dedicated to Lord Krishna's wife (Visit Rukmani Devi Temple, devoted to Lord Krishna's wife Rukmani)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Stop at Gopi Talav, a sacred pond with mythological significance (You'll also visit Gopi Talav, a sacred pond with mythological tales associated with it)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Begin your return journey to Ahmedabad (After sightseeing, you'll start your journey back to Ahmedabad)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>Drop off at Ahmedabad airport/railway station (The tour will conclude with a drop-off at Ahmedabad airport or railway station)</li>
								<li><i class="fa-li fa fa-check-square-o"></i>The tour ends with delightful memories</li>
								
							</ul>
							<div class="flex flex--space-between flex--center-y">
								<span class="cd-timeline__date"><img src="images/rukmani-temple-th.jpg" alt="Rukmani Devi Temple" /></span>						
							</div>							

				 
						</div> <!-- cd-timeline__content -->
					</div> <!-- cd-timeline__block -->

					
								
				</div>
			</section> <!-- cd-timeline -->
			<script src="js/timeline.js"></script>
			<div class="clear"></div>
			<div class="text-center mt20">
				<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Join Our Next Tour!</a>
			</div>
			
			<div class="bg-f6f6f6 p20 mt20">
			<h3 class="mt0 wow fadeInDown">Transportation Available When Opting For <span class="text-yellow">Dwarka Package From Ahmedabad</span></h3>
			<p class="text-justify wow fadeInUp"><strong>By Air:</strong> There are no airports in Dwarka itself. But you can take a flight to nearby Jamnagar Airport or Porbandar Airport. These airports are about 95-110 km away from Dwarka. After landing, you can hire a cab or take a bus to reach Dwarka.</p>
			<p class="text-justify wow fadeInUp"><strong>By Train:</strong> Dwarka has its own railway station. Many trains run between Dwarka and big cities like Delhi, Mumbai, and Ahmedabad. Taking a train is a convenient way to travel to Dwarka.</p>
			<p class="text-justify wow fadeInUp"><strong>By Road:</strong> Dwarka is well-connected by road. Buses run regularly from major cities in Gujarat and nearby states. You can easily book a bus ticket to Dwarka.</p>
			<p class="text-justify wow fadeInUp"><em>However, if you book your Dwarka tourism packages with the Gujarat Tour Guide, you don't have to worry about planning the trip. We will take care of arranging the best way for you to reach Dwarka. Whether it's by flight, train, or bus, we will handle all the transportation details.</em></p>
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Customize Your Trip!</a>

			</div>
			<div class="mt20">
			<h3 class="wow fadeInDown">Why Choose Us For Your <span class="text-yellow">Ahmedabad To Dwarka Package</span>?</h3>
			
			<ul class="fa-ul wow fadeInUp">	
				<li><i class="fa-li fa fa-check-square-o"></i> Our Dwarka tour packages make it simple and inexpensive for you to visit Dwarka. We have fair prices that work for all kinds of budgets and great value for money. You can change the length of your package, the activities you do, and where you stay based on your wants and preferences.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> Our team plans every detail of the Dwarka Gujarat tour package so you can have a stress-free spiritual journey based on years of experience. We'll take care of your trip plans so you can focus on the holy experience.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> Safety is very important to us on the Dwarka Gujarat tour package. To make sure you don't have to worry about your safety, we take the right steps and work with reliable partners. Our guides know about Dwarka's past and spiritual importance, which will help you feel more connected to the place on your Dwarka tour packages.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> We can modify our Dwarka Gujarat tour package itinerary so that you can see the sights at your own pace without feeling rushed. For your ease, our packages include smooth transportation and nice places to stay.</li>
				<li><i class="fa-li fa fa-check-square-o"></i> As a local business, we use our knowledge to give you authentic Dwarka local sightseeing packages. We immerse you in the city's rich history and divine energies by giving you darshans at renowned temples and reading about mythological stories.</li>
			</ul>	
			<a class="btn-default btn-small wow fadeInUp " href="inquiry.php">Plan Your Adventure Today!</a>
			
			
			</div>
			<div class="bg-f6f6f6 p20 mt20 text-center">
			<h3 class="mt0 wow fadeInDown">Explore Dwarka with  <span class="text-yellow">Gujarat Tour Guide</span></h3>
			<p class=" wow fadeInUp">Discover the spiritual wonders of Dwarka hassle-free with the Gujarat Tour Guide. Our safe and budget-friendly packages take you to the heart of this sacred city, home to Lord Krishna.</p>
			<p class=" wow fadeInUp">Choose Gujarat Tour Guide for a seamless and meaningful Dwarka experience. Contact us today to book our Dwarka tour packages today!</p>
			<p class="wow fadeInUp"><a class="btn-default" href="#inquiry">Book Now</a></p>
			
			</div>
			<h3 class="wow fadeInDown">FAQ's</h3>
			<div class="wow fadeInUp">
			<div class="mb10 font20 text-yellow">Q. What are some key attractions covered in Dwarka local sightseeing packages?</div>
			<div>Dwarkadhish Temple, Bet Dwarka, Nageshwar Jyotirlinga, Bala Hanuman Temple, and more are covered in the Dwarka local sightseeing packages.</div>
			<div class="mt20 mb10 font20 text-yellow">Q. What makes Gujarat Tour Guide’s Dwarka tourism packages special? </div>
			<div>
				<p>Our Dwarka tourism packages are tailored to fit various budgets and preferences, with expertly planned itineraries.</p>
				<p>Safety measures in place, reliable transportation, and knowledgeable guides for a worry-free journey on your chosen Dwarka tourism packages.</p>
			</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. Which airport is closest to Dwarka?</div>
			<div>Jamnagar Airport and Porbandar Airport are approximately 95-110 km away, serving as convenient points of entry.</div>
			
			<div class="mt20 mb10 font20 text-yellow">Q. Why choose Gujarat Tour Guide for Dwarka tourism packages? </div>
			<div>Competitive pricing on Dwarka tourism packages, value for money, stress-free planning, and a commitment to safety and memorable experiences.</div>
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
	</div>	   
</aside>
<div class="clear"></div>	</div>
</section>
<?php include('assets/includes/footer.php');?>