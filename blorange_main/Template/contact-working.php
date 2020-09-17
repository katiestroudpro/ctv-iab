 <!DOCTYPE html>
<!--[if lt IE 8]>         <html class="ie8"> <![endif]-->  
<!--[if !IE]><!--> <html><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Blorange</title>
    <link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/prettyphoto.css" media="screen" />
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/roundabout.js" type="text/javascript"></script>
    <script src="js/quicksand.js" type="text/javascript"></script>
    <script src="js/easing.js" type="text/javascript"></script>
    <script src="js/prettyphoto.js" type="text/javascript"></script>
    <script src="js/cycle.js" type="text/javascript"></script>
    <script src="js/html5form.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    
    <!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
	<div id="wrap">
    	
        <!-- BEGIN HEADER -->
    	<header id="secondaryHeader">
        	<div id="headerContent">
            	<a href="index.html" id="headerLogo"><img src="img/logo.png" width="152" height="31" alt="logo" /></a>
                <nav>
                    <ul>
                        <li>
                        	<a href="#">Home</a>
                        	<ul class="submenu">
                                <li><a href="index.html">Homepage Slider</a></li>
                                <li><a href="index-slideshow.html">Homepage Slideshow</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                        	<a href="#">Portfolio</a>
                            <ul class="submenu">
                                <li><a href="portfolio-3-columns.html">3 columns</a></li>
                                <li><a href="portfolio-4-columns.html">4 columns</a></li>
                            </ul>
                        </li>
                        <li>
                        	<a href="services.html">Services</a>
                            <ul class="submenu">
                                <li><a href="read-more.html">Read More</a></li>
                                <li><a href="404.html">Not Found</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html" class="selectedPage">Contact</a></li>
                    </ul>
                </nav>
                <h1 class="desyrel">Contact Us<span>Lorem ipsum dolor sit amet abitir est nullam, forsem pater allum</span></h1>
            </div><!-- #headerContent -->
        </header>
        <!-- END HEADER -->
        
        <!-- BEGIN CONTENT -->
        <section id="content">
        	<span id="secondaryContentTop"></span>
        	<div id="secondaryContent">
            
            	<!-- CONTACT SECTION -->
            	<section id="contact">
                
                	<!-- MAP -->
                    <img src="img/img-map.jpg" width="810" height="330" alt="map location" id="locationMap">
                    
                    <!-- MESSAGE FORM -->
                    <form id="contactForm" enctype="multipart/form-data" method="post" action="js/mail.php">
                    	<fieldset>
                            <h2 class="desyrel">Send us a comment</h2>
                            <input type="text" placeholder="Name" name="name" id="name" title="Name" required>
                            <input type="text" placeholder="Company" name="company" id="company" title="Company">
                            <input type="email" placeholder="name@domain.com" name="email" id="email" title="Email" required />
                            <input type="tel" placeholder="Telephone" name="phone" id="phone" title="Phone">
                            <textarea placeholder="Message" name="message" id="message" title="Message" required></textarea>
                            <input type="submit" name="submit" value="SEND IT" id="submitContact">
                            <div id="response"></div>
                    	</fieldset>
                    </form>
                    
                    <!-- COMPANY INFO -->
                    <ul>
                    	<li><h2 class="desyrel">Company Info</h2></li>
                        <li>
                        	<address>
                            	<span>Address</span>
                                <strong>
                                	123 Your Company Street
                                    <br>
                                    Your City, 123456
                                    <br>
                                    Your State, Your Country
                                </strong>
                            </address>
                        </li>
                        <li>
                        	<address>
                            	<span>Phont Number</span>
                                <strong>
                                	0 800 123 456 7890
                                    <br>
									555 23 18 9546
                                </strong>
                            </address>
                        </li>
                        <li>
                        	<address>
                            	<span>Email</span>
                                <strong>
                                	hello@yourcompany.com
                                    <br>
                                    careers@yourcompany.com
                                    <br>
                                    marketing@yourcompany.com
                                </strong>
                            </address>
                        </li>
                    </ul>
                </section><!-- #contact -->
            </div><!-- #secondaryContent -->
            <span id="secondaryContentBottom"></span>
        </section><!-- #content -->
        <!-- END CONTENT -->
        
        <!-- BEGIN FOOTER -->
        <footer>
            
            <!-- MAIN FOOTER AREA -->
        	<section id="footerMain">
            	<span id="footerMainTop"></span>
                <div id="footerMainContent">
                    <div id="footerLeft">
                        <h2 class="desyrel">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget erat turpis. Curabitur auctor nisl eget velit auctor condim. Nulla non turpis leo, ac rhon.
                        <br /><br />
                        Sed imperdiet molestie enim, non pellentesque velit placerat a. Mauris vestibulum porta nisi ac aliquam. Nullam ultricies eros a metus aliqu non pellentesque velit.</p>
                    </div><!-- #footerLeft -->
                    
                    <div id="footerRight">
                        <ul id="socialize">
                            <li><h2 class="desyrel">Socialize With Us</h2></li>
                            <li><a href="#" id="socialFacebook">facebook</a></li>
                            <li><a href="#" id="socialTwitter">twitter</a></li>
                            <li><a href="#" id="socialGoogle">google</a></li>
                            <li><a href="#" id="socialLinkedin">linkedin</a></li>
                            <li><a href="#" id="socialYoutube">youtube</a></li>
                            <li><a href="#" id="socialYahoo">yahoo</a></li>
                        </ul><!-- #socialize -->
                        <div id="latestTweet">
                            <h2 class="desyrel">Latest Tweet</h2>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget erat turpis. <a href="#">Curabitur auctor nisl auctor.</a>”</p>
                        </div><!-- #latestTweet -->
                    </div><!-- #footerRight -->
                    
                    <ul id="flickrStream">
                        <li><h2 class="desyrel">Flickr stream</h2></li>
                        <li class="stringSeparator"></li>
                        <li><a href="#"><img src="img/img-flickr1.jpg" width="114" height="114" alt="flickr image" /></a></li>
                        <li class="stringSeparator"></li>
                        <li><a href="#"><img src="img/img-flickr2.jpg" width="114" height="114" alt="flickr image" /></a></li>
                        <li class="stringSeparator"></li>
                        <li><a href="#"><img src="img/img-flickr3.jpg" width="114" height="114" alt="flickr image" /></a></li>
                        <li class="stringSeparator"></li>
                        <li><a href="#"><img src="img/img-flickr4.jpg" width="114" height="114" alt="flickr image" /></a></li>
                        <li class="stringSeparator"></li>
                        <li><a href="#"><img src="img/img-flickr5.jpg" width="114" height="114" alt="flickr image" /></a></li>
                    </ul><!-- #flickrStream -->
                </div><!-- #footerMainContent -->
                <span id="footerMainBottom"></span>
            </section><!-- #footerMain -->
            
            <!-- BOTTOM INFO -->
            <ul id="footerInfo">
                <li><img src="img/footer-logo.png" width="30" height="30" alt="footer logo" /></li>
                <li>123 Your Company Street, Your City, 0123456 Your State</li>
                <li>&copy; 2012 Your Company | All rights reserved | Designed by Mihai</li>
                <li>Tel: 0800 123 456 7890 | hello@yourcompany.com</li>
                <li><a href="http://www.graphicriver.net/user/mihaai">www.graphicriver.net/user/mihaai</a></li>
            </ul><!-- #footerInfo -->
        </footer><!-- #footer -->
        <!-- END FOOTER -->
        
    </div><!-- #wrap -->
</body>
</html>
