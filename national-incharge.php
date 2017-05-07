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
                                    <h1 class="text-center">NATIONAL INCHARGE</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.php">Home</a></li>
                                            <li>National Incharge </li>
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
                        
	
				$userQuery = "select * from informative where informativeid='118' && status='active'";
				
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
                                    <img src="docs/informative/<?php echo $userRow['imgName']?>" height="570" width="470" alt="">
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
               <?php  
include('footer.php');
?>
         