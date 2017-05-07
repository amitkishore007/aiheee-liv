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
                                    <h1 class="text-center">Image Gallery</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Gallery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Gallery Area Start-->
                <div class="gallery-area pt-110 pb-130">
                    <div class="container">
                        <div class="row">
                           <?php
                        
	
				$userQuery = "select * from gallery where status='active' ";
				
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
						  
                            <div class="col-md-4 hidden-sm">
                                <div class="gallery-img">
                                    <img src="gallery_images/<?php echo $userRow['imgName']?>" alt="">
                                    <div class="hover-effect">
                                        <h2><?php echo $userRow['heading']?></h2>
                                        <p><?php echo $userRow['detail']?></p>
                                    </div>
                                </div>
                            </div>
							
							
							 
                                    <?php
                    
                }
                                    
                                    ?>
							
							
							
							
							
							
                        </div>
                    </div>
                </div>
                <!--End of Gallery Area-->
                <!--Newsletter Area Start-->
               <?php
			   include('footer.php');
			   ?>