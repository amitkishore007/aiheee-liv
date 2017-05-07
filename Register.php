<?php

include('header.php');
?>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Register</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Register</li>
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
                       
                            <div class="col-md-9"><br><br>
                                <h4 class="contact-title">Register!</h4>

                                  <form id="contact-form" action="registersuccessful.php" method="post">
                                    <div class="row">
									 
                                        <div class="col-md-9">
                                            <input type="text" name="Name" placeholder="Username  ">
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" name="Email" placeholder="Email Address">
                                        </div>
										  <div class="col-md-9">
                                           
											<input type="Password" name="Password" placeholder="Password">
                                        </div>
										 
									
									
                                        <div class="col-md-12">
                                            <br><br>
                                            <button type="submit" class="button-default">Register</button>
                                        </div>
										 
                                    </div>
                               </form>
                               
                            </div>
							
                        </div>
                    </div>
                </div>
                <!--End of Contact Form-->
                <!--Newsletter Area Start-->
               <?php

include('footer.php');
?>