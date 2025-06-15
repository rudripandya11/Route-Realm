<?php include('assets/includes/header.php');?>
<!-- #masthead --><!-- Page Content -->
<section class="pageTitle bg-aboutus bg3A3A3C">
	<h1>Places <span>Map</span></h1>
	<ul id="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
		<li>Places Map</li>
	</ul>
</section>
<section class="site-content bg-skyline">
	<div class="container">		
		<div class="mt20">
			
			<iframe src="https://www.google.com/maps/d/embed?mid=1pU3dE8SKKTmIbivfxTrVz6l46WEbxg7n" width="100%" height="580" style="border:1px solid #ccc"></iframe>
			
		</div>
		
	</div>
</section>
<?php include('assets/includes/footer.php');?>
</div> <!--#page close here -->
<a href="#" id="back-to-top" title="Back to top" class=""><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
<!-- jQuery -->    
<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/cssmenumaker.js'></script>
<script type='text/javascript' src='js/owl.carousel.js'></script>
<script type='text/javascript' src='js/wow.min.js'></script>
<script>new WOW().init();</script>
<!-- fancybox for image popup -->
<script type='text/javascript' src='js/jquery.fancybox-1.3.4.js'></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css">
<script type='text/javascript' src='js/jquery.lazy.min.js'></script>
<script type='text/javascript' src='js/mmenu.js'></script>
<!--<script type='text/javascript' src='js/mmenu.debugger.js'></script>-->
<script type='text/javascript' src='js/jquery.sticky-kit.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type="text/javascript">
                function feed() {
					$=jQuery;
                    var maxImages = 9;
                    $.ajax({
                        method: "GET",
                        url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=2081433876.1677ed0.c62e858881aa4ffa96185f9805491668&count=" + maxImages',
                        dataType: "jsonp",
                        success: function (data) {
                            if (data.data) {
                                if (data.data.length < maxImages) {
                                    maxImages = data.data.length;
                                }
                                for (var i = 0; i < maxImages; i++) {
                                    var image = data.data[i].images.low_resolution.url;
                                    var thumbnail = data.data[i].images.thumbnail.url;
                                    var link = data.data[i].link;
                                    var likes = data.data[i].likes.count;
                                    var comments = data.data[i].comments.count;
                                    var largerThumbnail = thumbnail.replace('s150x150', 's480x480');
                                    var caption = '';
                                    if (data.data[i].caption) {
                                        caption = data.data[i].caption.text;
                                    }
                                    var content = '<div class="post-item"><a href="' + link + '" target="_blank"><img src="' + thumbnail + '" /></a></div>';
                                    $('#instagram_pics').append(content)
                                }
                            } else {
                                console.log(data);
                            }
                        }
                    });
                }
                jQuery(document).ready(function () {
                    feed();
                });
            </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140815854-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140815854-1');
</script>
</body>

<!-- Mirrored from www.gujarattourguide.in/places-map by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 15:39:10 GMT -->
</html>