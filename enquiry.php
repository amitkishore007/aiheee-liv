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
                                    <h1 class="text-center">ENQUIRY</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>ENQUIRY</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                
                <!--Contact Form Area Start-->
                <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="contact-title">contact info</h4>
								
								<?php
                        
	
				$userQuery = "select * from city";
				
				$userQueryResult = $connectionObject->executeQuery($userQuery);
				if(!$userQueryResult)
				{ // if query failed to execute then print error msg
					$errorMsg = mysql_errno()." : failed to display users";
					echo $errorMsg;
					//header("location: {$_SERVER['PHP_SELF']}?error=$errorMsg");
					exit();
                }
    			
				while($userRow = mysql_fetch_assoc($userQueryResult)) 
                {
                    
                    //$id = $userRow['cityid'];
                   
				?>
                                <div class="contact-text">
                                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text"><?php echo $userRow['Add_title']?></span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text"><?php echo $userRow['heading']?></span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text"><?php echo $userRow['detail']?></span></p>
                                </div>
								<?php
								}
								?>
                                <h4 class="contact-title">social media</h4>
                                <div class="link-social">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4 class="contact-title">send your massage</h4>
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="comments" cols="30" rows="10" placeholder="Message"></textarea>
                                            <button type="submit" class="button-default">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Contact Form-->
                <!--Newsletter Area Start-->
<?php
include('footer.php');
?>