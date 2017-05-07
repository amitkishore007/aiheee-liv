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
                                    <h1 class="text-center">Downloads</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Downloads
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Gallery Area Start-->
               <div class="course-area section-padding bg-white">
                    <div class="container">
                        
                        <div class="row">
						 <?php
                        
	
				$userQuery = "select * from hotdeals where status='active' ";
				
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
						
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                   
                                    <div class="button-bottom">
                                        <a href="gallery_images/hotdeals/<?php echo $userRow['imgName']; ?>" class="button-default" target="_blank"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Download PDF</a>                                    </div>	
                                </div>
								<br><br>
								<h3 align="center"><u><?php echo $userRow['heading']; ?></h3>
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