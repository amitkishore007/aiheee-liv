<?php
include('header.php');
include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);
include_once('dbconnect.php');
$rs = mysql_query("select * from  homepage");
          $res = mysql_fetch_array($rs);
              
                $home_id = $res['home_id'];
                $marquee_content = $res['marquee_content'];
              
                $exam_heading = $res['exam_heading'];
                $exam_content = $res['exam_content'];
                $notice_heading = $res['notice_heading'];
                $notice_content = $res['notice_content'];
?>
                <!--End of Header Area-->
                <footer class="footer-area">
                    <div class="container" style="line-height:20px; padding:0; margin:0;">
                        
                          
                                <span style="font-weight:bold;"><marquee><?php echo $marquee_content;?> </marquee></span>                      
                            
                       
                    </div>
                </footer>
                <!--Slider Area Start-->
				<div class="container">
				<div class="row">
				<div class="col-md-9 col-sm-12" style="margin-left: 0px;">
               <div class="slider-area">
			      <div class="preview-2">
                        <div id="nivoslider" class="slides">
                        <img src="img/slider/2.jpg" alt="" title="#slider-1-caption1"/>
                            <img src="img/slider/1.jpg" alt="" title="#slider-1-caption2"/>  	
                            <img src="img/slider/8.jpg" alt="" title="#slider-1-caption3"/>
                            <img src="img/slider/3.jpg" alt="" title="#slider-1-caption4"/>  
                            <img src="img/slider/4.jpg" alt="" title="#slider-1-caption5"/> 
                            <img src="img/slider/6.jpg" alt="" title="#slider-1-caption6"/>  
                            <img src="img/slider/5.jpg" alt="" title="#slider-1-caption7"/>   
                            <img src="img/slider/7.jpg" alt="" title="#slider-1-caption8"/>                   </div> 
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="text-content-wrapper">
                                                <div class="text-content">
                                                    <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Science Olympiad</h1>
                                                    <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> To bring science to life, to show how science works <br>
to emphasize problem solving aspects of science and the <br>
understanding of science concepts.</p>
                                                    <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Mathematics Olympiad</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> To Popularise Matehmatics among Indians and to assists in proving <br>
the public image 
of Mathematics across the world, acknowledging the  <br>critical role of
mathematics in the technological environment .</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption3" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Kids Olympiad</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">To foster Kids creativity and ingenvity and to provide <br>
satisfaction joy and thrill of challenges in <br>
young age.</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption4" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Academic Olympiad</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">We celebrate Brainpower, Determination and Hardwork, while recognizing <br>
the "MENTAL ATHLETES" who represent each school. Our heroes <br>
are our students who play an expert game of chess, deliver a great speech, <br>
master geography, solve an intricate math problem, spell a word that seems<br>
 impossibly. Obscure or perform a brilliant musical piece.</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="slider-1-caption5" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    General Knowledge Olympiad</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">If you aren't part of the solution, you're part of the precipitate.<br>
 A photon checks into a hotel and is asked if he needs any help with his luggage. <br>
He says, "No, I'm traveling light".</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption6" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Domestic Tours</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">We want to give our students, full understanding of Indian States, <br>
through our tours. Our goal is to help you get closer, Understand <br>
better and experience more. Immerse yourself in the history and culture <br>
of India on this Education Tour of Incredible India !</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption7" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    International Tours</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">WHAT’S IMPORTANT TO YOU IS IMPORTANT TO US.<br>

We provide Safety & Experience, Dedicated Support, Educational Impact, Lowest prices. <br>
We prefer to inspire a new perspective on the world.
We help teachers and <br>
students experience different cultures navigate new languages and explore historic <br>
sites, and while developing the global perspective needed for success in today’s <br>
interconnected World.
</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption8" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">AIHEEE<br>
                                                    Non - Academic Olympiads</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s">Non Academic Olympiads are not related with studies, They <br>
are related with creativity of Brain !
</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">Know More</a>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				 </div>
				 </div>
				 
				  <div class="col-md-3 col-sm-12">
                                <div class="single-item">
                                     <div class="single-item-text">

                                        <h4><a href="#"><?php echo $exam_heading;?></a></h4>
                                       
                                            <p><?php echo $exam_content;?> </p>      
                                    </div>
                                    <div class="single-item-text" style="height:183px;">
                                        <h4><a href="#"><?php echo $notice_heading;?></a></h4>
                                       
                                        <p><?php echo $notice_content;?> </p>
                                           
                                    </div>
                                </div>
                            </div>

				</div>
				
				 
				  </div>
					                 <!--End of Slider Area-->
                <!--About Area Start--> 
                <div class="course-area section-padding bg-white">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="company-profile.php"><img src="img/course/1.jpg" alt=""></a>                                    </div>
                                   
								   
								    <div class="single-item-text">
                                        <h4><a href="company-profile.php">About AIHEEE</a></h4>
											 <?php
                        
	
				$userQuery = "select * from informative where informativeid='80' && status='active'";
				
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
                                        
                                        <p><?php echo substr($userRow['detail'],0,350)?>... </p>
                                           
                                    </div>
                                    <div class="button-bottom">
                                        <a href="company-profile.php" class="button-default">Learn Now</a>                                   
									</div>
									
									<?php
							
							}
							
							?>
									
									
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
								 <?php
                        
	
				$userQuery = "select * from informative where informativeid='116' && status='active'";
				
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
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="docs/informative/<?php echo $userRow['imgName']; ?>" alt="" style="height:211px;width:300px;"></a>                                   
										 </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Why AIHEEE ?</a></h4>
                                       
                                        <p><?php echo $userRow['detail']; ?></p>
                                          
                                    </div>
									 <?php
										   
										   }
										   
										   ?>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn More</a>                                    
										</div>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm">
                                <div class="single-item">
								 <?php
                        
	
				$userQuery = "select * from informative where informativeid='117' && status='active'";
				
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
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="docs/informative/<?php echo $userRow['imgName']; ?>" alt="" style="height:211px;width:300px;"></a>                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Our Specialization</a></h4>
                                        
                                        <p><?php echo $userRow['detail']; ?></p>
                                           
                                    </div>
									
									<?php
									
									}
									
									?>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn More</a>                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
               
                <!--Testimonial Area Start-->
                
                <!--End of Testimonial Area-->
                <!--Event Area Start-->
                
                <!--End of Event Area-->
                <!--Newsletter Area Start-->
              <?php
			  include('footer.php');
			  ?>