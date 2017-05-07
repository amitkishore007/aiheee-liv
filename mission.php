<?php
include('header.php');
include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);
?>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">OUR MISSION</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.php">Home</a></li>
                                            <li>OUR MISSION</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--About Page Area Start-->
                <div class="about-page-area section-padding">
                    <div class="container">
                        
                        <div class="row">
						
						 <?php
                        
	
				$userQuery = "select * from informative where informativeid='107' && status='active'";
				
				$userQueryResult = $connectionObject->executeQuery($userQuery);
				if(!$userQueryResult)
				{ // if query failed to execute then print error msg
					$errorMsg = mysql_errno()." : failed to display users";
					echo $errorMsg;
					//header("location: {$_SERVER['PHP_SELF']}?error=$errorMsg");
					exit();
                }
    			
				while($userRow = mysql_fetch_assoc($userQueryResult)) {
				?>
						
						
                            <div class="col-md-6">
                                <div class="about-text-container">
                                   <?php echo $userRow['detail']?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-image">
                                    <img src="docs/informative/<?php echo $userRow['imgName']?>" alt="">
                                </div>
                            </div>
							
							<?php
							
							}
							
							?>
							
							
                        </div>
                    </div>
                </div>
                <!--End of About Page Area-->
                <!--Skill And Experience Area Start-->
                
                <!--End of Skill And Experience Area-->
                <!--Teachers Area Start-->
                
                <!--End of Teachers Area-->
                <!--Newsletter Area Start-->
                <div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="newsletter-form angle">
                                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                            <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="images/logo.png" alt=""></a>                                    </div>
                                    <p>AIHEEE for the first time brings a truly International platform for Olympiads in various variants. </p>
                                    <div class="social-icons">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>GET IN TOUCH</h3>
                                    <span><i class="fa fa-phone"></i>+91-7209777777</span>
                                    <span><i class="fa fa-envelope"></i>info@aiheee.com</span>
                                    <span><i class="fa fa-globe"></i>www.aiheee.com</span>
                                    <span><i class="fa fa-map-marker"></i>Eros Corporate Towers, Level 15, Nehru Place, New Delhi-110019</span>                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-footer-widget">
                                    <h3>Useful Links</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Principals Zone</a></li>
                                        <li><a href="#">Teachers Zone</a></li>
                                        <li><a href="#">Parents Zone</a></li>
                                        <li><a href="#">Students Zone</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>Useful Links</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Our Partners</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Results</a></li>
                                        <li><a href="#">Announcements</a></li>
                                        <li><a href="#">Whats New</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget Area-->
                <!--Footer Area Start-->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <span>Copyright &copy; AIHEEE 2016.All right reserved.</span>                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="column-right">
                                    <span>Privacy Policy , Terms &amp; Conditions</span>                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
        
        <!-- Color Switcher end -->	
        
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
        
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
		<!-- Waypoints JS
		============================================ -->		
        <script src="js/waypoints.min.js"></script>
        
		<!-- Counterup JS
		============================================ -->		
        <script src="js/jquery.counterup.min.js"></script>
        
		<!-- Slick JS
		============================================ -->		
        <script src="js/slick.min.js"></script>
        
		<!-- Animated Headlines JS
		============================================ -->		
        <script src="js/animated-headlines.js"></script>
        
		<!-- Textilate JS
		============================================ -->		
        <script src="js/textilate.js"></script>
        
		<!-- Lettering JS
		============================================ -->		
        <script src="js/lettering.js"></script>
        
		<!-- Video Player JS
		============================================ -->		
        <script src="js/jquery.mb.YTPlayer.js"></script>
        
		<!-- Mail Chimp JS
		============================================ -->		
        <script src="js/jquery.ajaxchimp.min.js"></script>
        
		<!-- AJax Mail JS
		============================================ -->		
        <script src="js/ajax-mail.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- StyleSwitch JS
		============================================ -->	
        <script src="js/styleswitch.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>